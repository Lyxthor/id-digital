<?php

namespace App\Http\Controllers\Citizen;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $rt = $user->rt;
        $rw = $rt->rw;
        $kelurahan = $rw->kelurahan;


        return view("frontend.citizen.submission.index");
    }
    public function show($id)
    {
        $submission = Submission::find($id);
    }
}
