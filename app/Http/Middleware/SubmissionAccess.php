<?php

namespace App\Http\Middleware;

use App\Models\Submission;
use App\Models\SubmissionApproval;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Kelurahan;
use App\Models\Rw;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class SubmissionAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    private $model =
    [
        "submissions"=>\App\Models\Submission::class,
        "submission_approvals"=>\App\Models\SubmissionApproval::class
    ];
    public function handle(Request $request, Closure $next): Response
    {
        $domainModel = config('morphmap');
        $modelName = explode(".", Route::currentRouteName())[0];
        $id = $request->route('id');
        $user = Auth::user();


        $submission = $this->model[$modelName]::find($id);
        if($modelName=="submission_approvals")
            $submission = $submission->submission;
        $domains = $submission->submission_domains;

        foreach($user->userable->authorities as $auth)
        {
            //dd($auth->authorizable);
            $data = $domainModel[$auth->authorizable_type]::select(['id'])->withSubDomains()->find($auth->authorizable_id)->toArray();
            $data = $this->DispatchDomain($auth->authorizable_type, $data);
            foreach($domains as $d)
            {
                if(in_array($d->domain_type.$d->domain_id, $data))
                {
                    return $next($request);
                }
            }
        }
        return response()->json([
            "message"=>"You dont have access to this submission"
        ], Httpresponse::HTTP_UNAUTHORIZED);

    }
    private function DispatchDomain($domainName, $domains)
    {
        $result = [];
        foreach(array_keys($domains) as $key)
        {
            if(is_array($domains[$key]))
            {
                foreach($domains[$key] as $sd)
                {
                    array_push($result, Str::singular($key).$sd['id']);
                }
            }
            else
            {
                array_push($result, $domainName.$domains[$key]);
            }
        }
        return $result;
    }
}
