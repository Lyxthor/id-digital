<?php

namespace App\Http\Controllers\Citizen;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(StoreUserRequest $req)
    {
        return $this->getResponse(function() use($req) {
            $validData = $req->validated();
            $validData['password'] = bcrypt($validData["password"]);

            $user = User::create($validData);
            return response()->json([
                "message"=>"User $user->id added successfully",
                "data"=>$user
            ], 201);
        });
    }
    public function update(UpdateUserRequest $req, $id)
    {
        return $this->getResponse(function() use($req, $id) {
            $validData = $req->validated();
            $user = User::find($id);
            $user->update($validData);

            return response()->json([
                "message"=>"User $user->id updated successfully",
                "data"=>$user
            ], 201);
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
