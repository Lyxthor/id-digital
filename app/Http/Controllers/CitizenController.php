<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Dotenv\Exception\ValidationException as ExceptionValidationException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CitizenController extends Controller
{
    private $store_rules =
    [
        "nik"=>"required|unique:citizens",
        "name"=>"required|max:100",
        "birth_place"=>"required",
        "birth_date"=>"required",
        "current_address"=>"required",
        "no_kk"=>"required",
        "family_role"=>"required",
        "rt_id"=>"required|exists:rts,id"
    ];
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
    public function store(Request $req)
    {
        try
        {
            $req->validate($this->store_rules);
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
    public function show(Citizen $citizen)
    {
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
    public function destroy()
    {

    }
}
