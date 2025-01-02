<?php

namespace App\Http\Controllers\Citizen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Submission;
use App\Models\Citizen;

class SubmissionApprovalController extends Controller
{
    public function index()
    {
        $domainIds = $this->GetDomainIds();
        $submissions = Submission::userSubmission($domainIds)->get();
        return $submissions;
        return view("frontend.citizen.submission.index", compact("submission", "submission"));
    }
    public function show($id)
    {
        $submission = Submission::find($id);
        $user = Auth::user();
        $family = Citizen::where('no_kk', $user->userable->no_kk);
        return view("frontend.citizen.submission.show", compact(""));
    }
    private function GetDomainIds()
    {
        $user = Auth::user();
        $rt = $user->rt;
        $rw = $rt->rw;
        $kelurahan = $rw->kelurahan;

        return [$kelurahan->id, $rw->id, $rt->id];
    }
}
