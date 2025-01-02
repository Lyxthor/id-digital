<?php

namespace App\Http\Requests;

use App\Models\Citizen;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class UpdateCitizenRequest extends FormRequest
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
            "citizen_id"=>"required|exists:citizens,id",
            "nik"=>"required",
            "name"=>"required|max:100",
            "birth_place"=>"required",
            "birth_date"=>"required",
            "current_address"=>"required",
            "no_kk"=>"required",
            "family_role"=>"required",
            "rt_id"=>"required|exists:rts,id",
        ];
    }
    public function withValidator(Validator $validator)
    {

        $validator->after(function($validator) {
            $citizen = Citizen::find($this->citizen_id);
            if($citizen->nik != $this->nik)
            {
                if(Citizen::where('nik', $this->nik)->count() > 0)
                {
                    $validator->errors()->add('nik', 'nik must be unique');
                    return;
                }
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
