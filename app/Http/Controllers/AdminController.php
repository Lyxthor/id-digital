<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardPage(){
        return view('backend.dashboard');
    }

    public function submissionPage(){
        return view('backend.submission.index');
    }

    public function addSubmissionPage(){
        return view('backend.submission.create');
    }
}
