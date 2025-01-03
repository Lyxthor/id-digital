<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    private $user;
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
            "username"=>"required",
            "password"=>"required"
        ];
    }
    public function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) {
            $this->user = User::where('username', $this->username)->first();
            $user = $this->user;
            if(!$user || !Hash::check($this->password, $user->password))
            {
                $validator->errors()->add("credentials", "invalid credentials");
                return;
            }
            if($user->tokens()->exists())
            {
                $user->tokens()->delete();
            }
        });

        if($validator->fails())
        {
            $this->failedValidation($validator);
        }
    }
    // public function validated($key = null, $defaul = null)
    // {
    //     $validatedData = parent::validated();
    //     $validatedData['user'] = $this->user;
    //     return $validatedData;
    // }
    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(response([
            'status' => 'Validation error',
            'errors' => $validator->errors()->toArray(),
        ], Response::HTTP_UNPROCESSABLE_ENTITY)));
    }
}
