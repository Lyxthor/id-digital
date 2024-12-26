<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubmissionApprovalRequest;
use App\Models\SubmissionApproval;
use Illuminate\Http\Request;

class SubmissionApprovalController extends Controller
{
    public function index()
    {

    }
    public function store(StoreSubmissionApprovalRequest $req)
    {
        return $this->getResponse(function() use($req) {
            $validData = $req->validated();
            $approval = SubmissionApproval::create($validData);
            return response()->json([
                "message"=>"Submission $req->submission_id approved",
                "data"=>$approval
            ]);
        });
    }
    public function update()
    {

    }
    public function show($id)
    {

    }
    public function destroy()
    {

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
