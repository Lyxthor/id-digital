<?php

namespace App\Http\Requests;

use App\Rules\OnlyOneTypeOfDocument;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class DocumentStoreRequest extends FormRequest
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
        return
        [
            "citizen_id"=>["required", "exists:citizens,id"],
            "document_file"=>["required", "image:png,jpeg,jpg"],
            "type_id"=>["required", "exists:document_types,id", new OnlyOneTypeOfDocument($this->citizen_id)]
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(response([
            'status' => 'Validation error',
            'errors' => $validator->errors()->toArray(),
        ], Response::HTTP_UNPROCESSABLE_ENTITY)));
    }
}
