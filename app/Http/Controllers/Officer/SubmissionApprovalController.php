<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubmissionApproval;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class SubmissionApprovalController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(middleware: 'submission.access', only: ['show']),
        ];
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

        return view('frontend.officer.approval.show', compact("documents"));
    }
}
