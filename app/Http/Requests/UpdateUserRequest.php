<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class UpdateUserRequest extends FormRequest
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
            'user_id'=>'required|exists:users,id',
            'username'=>'required|min:6|max:25',
            'password'=>'nullable|min:6',
            'userable_type'=>'required|in:citizen,officer',
            'userable_id'=>'required'
        ];
    }
    public function withValidator(Validator $validator)
    {

        $validator->after(function($validator) {
            $user = User::find($this->user_id);
            if($user->username != $this->username)
            {
                if(User::where('username', $user->username)->count() > 0)
                {
                    $validator->errors()->add('username', 'username must be unique');
                    return;
                }
            }
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
