<?php

namespace App\Http\Controllers;

use App\Models\Authority;
use App\Models\Officer;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    //
    public function index()
    {
        return response()->json([
            "message"=>"All officer data",
            "data"=>Officer::all()
        ], 200);
    }
    public function show(Request $req, $id)
    {
        $officer = Officer::with(['authorities.authorizable'])->find($id);
        if($officer == null)
        {
            return response()->json([
                "message"=>"Officer not found",
                "error"=>"Officer with id $req->id doesn't exists"
            ], 404);
        }
        //dd($officer->with('authority')->toSql());
        return response()->json([
            "message"=>"Officer $officer->id's data",
            "data"=>$officer
        ]);
    }
}
