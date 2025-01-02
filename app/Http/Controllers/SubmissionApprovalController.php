<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubmissionApprovalRequest;
use App\Models\SubmissionApproval;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class SubmissionApprovalController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(middleware: 'submission.access', only: ['show']),
        ];
    }
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
        $approval = SubmissionApproval::find($id);
        if($approval == null)
        {
            return response()->json([
                "message"=>"approval not found"
            ], 404);
        }
        $submission = $approval->submission;
        $citizen = $approval->citizen;
        $type_ids = $submission->document_requirements->select(["type_id"])->flatten();
        $documents = $citizen->documents->filter(function ($doc) use($type_ids) {
            return $type_ids->contains($doc->type_id);
        });

        return response()->json([
            "message"=>"all documents from citizen $citizen->nik",
            "data"=>[
                "citizen"=>$citizen,
                "documents"=>$documents
            ]
        ]);
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
