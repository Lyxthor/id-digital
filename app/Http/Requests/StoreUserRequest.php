<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class StoreUserRequest extends FormRequest
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
            'username'=>'required|min:6|max:25|unique:users',
            'password'=>'required|min:6',
            'userable_type'=>'required|in:citizen,officer',
            'userable_id'=>'required'
        ];
    }
    public function withValidator(Validator $validator)
    {

        $validator->after(function($validator) {
            $models = config('morphmap');
            $modelName = $this->userable_type;

            $data = $models[$modelName]::find($this->userable_id);
            if($data != null)
            {
                $validator->errors()->add('userable_id', "$this->userable_type with id $this->userable_id must be unique");
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
