<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function login(LoginRequest $req)
    {
        return $this->getResponse(function() use($req) {
            $credentials = $req->validated();
            $user = $credentials['user'];
            $current_time = Date::now();
            $token = "$user->id _ $user->username _ $current_time";
            $token = $user->createToken($token);
            $token->accessToken->expires_at = Date::now()->addMinutes(120);
            $token->accessToken->save();
            return response()->json([
                "message"=>"Login success",
                "token"=>$token->plainTextToken
            ], 200);
        });
    }
    private function getResponse($func)
    {
        try
        {
            return $func();
        }
        catch (\Exception $e)
        {
            return response()->json([
                'message' => "Interval Server Error : \n".$e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTrace(),
            ], 500);
        }
    }
}
