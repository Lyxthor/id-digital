<?php

namespace App\Http\Requests;

use App\Models\Citizen;
use App\Models\SubmissionDomain;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class StoreSubmissionApprovalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'submission_id'=>'required|exists:submissions,id',
            'citizen_id'=>"required|exists:citizens,id|unique:submission_approvals,citizen_id,$this->citizen_id,id,submission_id,$this->submission_id",
        ];
    }
    public function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) {
            $isAuthorized = false;
            $citizen = Citizen::find($this->citizen_id);
            $submission_domains = SubmissionDomain::where('submission_id', $this->submission_id)
            ->get()
            ->except(['id', 'submission_id', 'created_at', 'updated_at']);

            foreach($submission_domains as $domain)
            {
                switch($domain->domain_type)
                {
                    case "kelurahan" :
                        if($domain->domain_id == $citizen->rt->rw->kelurahan->id)
                        {
                            $isAuthorized = true;
                            return;
                        }
                        break;
                    case "rw" :
                        if($domain->domain_id == $citizen->rt->rw->id)
                        {
                            $isAuthorized = true;
                            return;
                        }
                        break;
                    case "rt" :
                        if($domain->domain_id == $citizen->rt_id)
                        {
                            $isAuthorized = true;
                            return;
                        }
                        break;
                }
            }
            if(!$isAuthorized)
            {
                $validator->errors()->add('domain', "You're not permitted to approve documents in this submission");
            }
        });

        if($validator->fails())
        {
            $this->failedValidation($validator);
        }

    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(response([
            'status' => 'Validation error',
            'errors' => $validator->errors()->toArray(),
        ], Response::HTTP_UNPROCESSABLE_ENTITY)));
    }
}
