<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCitizenRequest extends FormRequest
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
        return [
            "nik"=>"required|unique:citizens",
            "name"=>"required|max:100",
            "birth_place"=>"required",
            "birth_date"=>"required",
            "current_address"=>"required",
            "no_kk"=>"required",
            "family_role"=>"required",
            "rt_id"=>"required|exists:rts,id"
        ];
    }
}
