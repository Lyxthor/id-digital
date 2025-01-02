<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubmissionRequest;
use App\Models\Citizen;
use Dotenv\Exception\ValidationException as ExceptionValidationException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CitizenController extends Controller
{
    public function index()
    {
        try
        {
            $citizens = Citizen::all();
            $message = "All citizens data";
            return response()->json([
                "message"=>$message,
                "data"=>$citizens
            ], 200);
        }
        catch(\Exception $e)
        {
            return response()->json([
                "message"=> "Internal server error",
                "error"=> $e
            ], 500);
        }
    }
    public function store(StoreSubmissionRequest $req)
    {
        try
        {
            $validData = $req->validated();
            $citizen = Citizen::create($validData);
            return response()->json([
                "message"=>"Add citizen $citizen->nik is success",
                "data"=>$citizen
            ], 201);
        }
        catch(ValidationException $e)
        {
            return response()->json([
                "message"=> "Validation error",
                "error"=> $e->errors()
            ], 401);
        }
        catch(\Exception $e)
        {
            return response()->json([
                "message"=> "Internal server error",
                "error"=> $e
            ], 500);
        }
    }
    public function show($id)
    {
        $citizen = Citizen::with(['user'])->find($id);
        if($citizen==null)
        {
            return response()->json([
                "message"=>"Citizen not found"
            ], 401);
        }

        return response()->json([
            "message"=>"Citizen with nik $citizen->nik",
            "data"=>[
                "citizen"=>$citizen,
                "user"=>$citizen->user
            ]
        ], 200);
    }
    public function update(StoreSubmissionRequest $req,$id)
    {
        try
        {
            $citizen = Citizen::find($id);
            if($citizen==null)
            {
                return response()->json([
                    "message"=>"Citizen not found"
                ], 401);
            }
            $validData = $req->validated();
            $citizen->update($validData);
            return response()->json([
                "message"=>"Edit citizen $citizen->nik is success",
                "data"=>$citizen
            ], 201);
        }
        catch(ValidationException $e)
        {
            return response()->json([
                "message"=> "Validation error",
                "error"=> $e->errors()
            ], 401);
        }
        catch(\Exception $e)
        {
            return response()->json([
                "message"=> "Internal server error",
                "error"=> $e
            ], 500);
        }
    }
    public function destroy($id)
    {
        try
        {
            $citizen = Citizen::find($id);
            if($citizen==null)
            {
                return response()->json([
                    "message"=>"Citizen not found"
                ], 401);
            }
            $citizen->delete();
            return response()->json([
                "message"=>"citizen $citizen->nik is destroyed successfully",
            ], 201);
        }
        catch(\Exception $e)
        {
            return response()->json([
                "message"=> "Internal server error",
                "error"=> $e
            ], 500);
        }
    }
}
