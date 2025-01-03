<?php

namespace App\Http\Controllers\Citizen;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Citizen;
use App\Models\User;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Requests\StoreSubmissionApprovalRequest;
use App\Models\SubmissionApproval;

class SubmissionController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(middleware: 'submission.access', only: ['show']),
        ];
    }
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
    private function GetDomainIds()
    {
        $user = Auth::user();
        $rt = $user->userable->rt;
        $rw = $rt->rw;
        $kelurahan = $rw->kelurahan;

        return [$kelurahan->id, $rw->id, $rt->id];
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
