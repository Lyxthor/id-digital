<?php

namespace App\Http\Controllers\Citizen;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Citizen;
use App\Models\User;

class SubmissionController extends Controller
{
    public function index()
    {
        $domainIds = $this->GetDomainIds();
        $submissions = Submission::userSubmission($domainIds)->get();
        return view("frontend.citizen.submission.index", compact("submissions", "submissions"));
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
        $rt = $user->userable->rt;
        $rw = $rt->rw;
        $kelurahan = $rw->kelurahan;

        return [$kelurahan->id, $rw->id, $rt->id];
    }
}
