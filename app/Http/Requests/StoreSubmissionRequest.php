<?php

namespace App\Http\Requests;

use App\Rules\SubmissionDomainIdsAreValid;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Rules\SubmissionDomainIsValid;
use Illuminate\Http\Response;

class StoreSubmissionRequest extends FormRequest
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
        $rules =  [
            'title'=>'required|max:200',
            'desc'=>'required|max:2000',
            'author_id'=>'required|exists:officers,id',
            'privilege'=>'required|in:kelurahan,rt,rw|bail',
            'deadline'=>'required|date|date_format:Y-m-d H:i:s|after:now',
            'document_requirements'=>'required|array|min:1',
            'document_requirements.*'=>'integer|exists:document_types,id',
            'domains'=>['required', 'array'],
            'domains.*.type'=>['required', 'string', 'in:kelurahan,rw,rt'],
            'domains.*.ids'=>['required', 'array', 'min:1'],
            'domains.*.ids.*'=>['array', 'min:1'],
            'domains.*.ids.*.id'=>'required',
            'domains.*.ids.*.kelurahan_id'=>'required',
            'domains.*.ids.*.rw_id'=>'required_if:domains.*.type,in:rw,rt',
            'domains.*.ids.*.rt_id'=>'required_if:domains.*.type,rt',
            'domains'=>[new SubmissionDomainIdsAreValid($this->domains, $this->privilege, $this->author_id)]

            //'domains.*.type'=>'required|string|in:kelurahan,rw,rt',
        ];
        return $rules;
    }
    // public function withValidator(Validator $validator)
    // {
    //     if(!$validator->fails())
    //     {
    //         $validator->after(function($validator)
    //         {
    //             $validator->addRules(
    //             [
    //                 'domains'=>[new SubmissionDomainIdsAreValid($this->domains, $this->privilege, $this->author_id)]
    //             ]);
    //         });
    //     }
    // }
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(response([
            'status' => 'Validation error',
            'errors' => $validator->errors()->toArray(),
        ], Response::HTTP_UNPROCESSABLE_ENTITY)));
    }
}
