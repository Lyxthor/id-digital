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
        [$kelurahan, $rw, $rt] = $this->GetDomainIds();
        // $submissions = Submission::whereHas('submission_domains', function($query) use($kelurahan, $rw, $rt) {
        //     return $query->where('domain_type', 'kelurahan')->where('domain_id', $kelurahan)
        //     ->orWhere('domain_type', 'rw')->where('domain_id', $rw)
        //     ->orWhere('domain_type', 'rt')->where('domain_id', $rt);
        // })->whereDoesntHave('submission_approvals', function($query){
        //     return $query->where('submission_approvals.id','!=',Auth::user()->userable->id);
        // })->get();
        $submissions = Submission::whereDoesntHave('submission_approvals', function($query) {
            return $query->where('citizen_id', '=', Auth::user()->userable->id);
        })->whereHas('submission_domains', function($query) use($kelurahan, $rw, $rt) {
                return $query->where('domain_type', 'kelurahan')->where('domain_id', $kelurahan)
                ->orWhere('domain_type', 'rw')->where('domain_id', $rw)
                ->orWhere('domain_type', 'rt')->where('domain_id', $rt);
            })->get();
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
            return redirect()->route('citizen.submissions.index')->with('success', 'submission approved');
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
