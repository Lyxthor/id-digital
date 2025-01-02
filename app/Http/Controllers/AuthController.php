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

    public function showLoginform()
    {
        return view('auth.login');
    }


    public function showRequestData(){
        return view('auth.RequestData');
    }


    public function showUpdatedata(){
        return view('auth.UpdateData');
    }


    public function showRegister(){
        return view('auth.register');
    }


    public function login(LoginRequest $req)
    {
        return $this->getResponse(function() use($req) {
            $credentials = $req->validated();
            if(Auth::attempt($credentials))
            {
                return redirect()->route('citizen.submissions.index')->with('success', 'citizen logged in successfully');
            }
            return back()->with('error', 'invalid credentials');
        });
    }
    public function logout()
    {
        return $this->getResponse(function() {
            Auth::logout();
            return redirect()->route('login')->with('success', 'user logged out successfully');
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
