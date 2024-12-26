<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\OnlyOneTypeOfDocument;

class DocumentUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            "document_file"=>["required", "image:png"],
            "type_id"=>["required", "exists:document_types,id", new OnlyOneTypeOfDocument($this->citizen_id)]
        ];
    }
}
