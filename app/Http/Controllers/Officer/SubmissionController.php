<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use App\Models\DocumentRequirement;
use App\Models\DocumentType;
use App\Models\Kelurahan;
use App\Models\Submission;
use App\Models\SubmissionDomain;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    public  function showSubmissionPage(){
        return view('frontend.citizen.submission.index');
    }

    public function index()
    {
        $submission = Kelurahan::withRelatedSubmissions()->find(1);
        return $submission;
        return response()->json([
            "message"=>"All submission data",
            "data"=>Submission::all()
        ]);
    }
    public function create()
    {
        $models = config('morphmap');
        $modelName = Auth::user()->usedPrivilege->authorizable_type;
        $id = Auth::user()->usedPrivilege->authorizable_id;
        $domains = $models[$modelName]::select(['id'])->withSubDomains()->find($id)->toArray();
        $domains = collect($this->DispatchDomain($modelName, $domains));
        $document_types = DocumentType::select(['id', 'name'])->get();
        return view("frontend.officer.submission.create", compact("domains", "document_types"));
    }
    public function edit($id)
    {
        return $this->getResponse(
            function() use($id)
            {
                $submission = Submission::with(['document_requirements', 'submission_domains'])->find($id);
                if($submission==null)
                {
                    return response()->json([
                        "message"=>"submission $id not found"
                    ]);
                }
                $models = config('morphmap');
                $modelName = Auth::user()->usedPrivilege->authorizable_type;
                $id = Auth::user()->usedPrivilege->authorizable_id;
                $domains = $models[$modelName]::select(['id'])->withSubDomains()->find($id)->toArray();
                $domains = collect($this->DispatchDomain($modelName, $domains));
                $document_types = DocumentType::select(['id', 'name'])->get();
                return view('frontend.officer.submission.edit', compact("submission", "domains", "document_types"));
            }
        );
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
                    array_push($result, Str::singular($key)."_".$sd['id']);
                }
            }
            else
            {
                array_push($result, $domainName."_".$domains[$key]);
            }
        }
        return $result;
    }
    public function store(StoreSubmissionRequest $req)
    {
        return $this->getResponse(
            function() use($req)
            {
                $valid_data = $req->validated();
                $requirements = $valid_data['document_requirements'];
                $domains = $valid_data['domains'];
                unset($valid_data['domains']);
                unset($valid_data['document_requirements']);
                $submission = Submission::create($valid_data);

                foreach($requirements as $id)
                {
                    $data =
                    [
                        'type_id'=>$id,
                        'submission_id'=>$submission->id
                    ];
                    DocumentRequirement::create($data);
                }

                foreach($domains as $domain)
                {
                    [$type, $id] = explode("_", $domain);
                    $data =
                    [
                        'submission_id'=>$submission->id,
                        'domain_id'=>$id,
                        'domain_type'=>$type
                    ];
                    SubmissionDomain::create($data);
                }

                return redirect()->route('officer.submissions.index')->with('success', 'submission created succefully');
            }
        );
    }
    public function update(UpdateSubmissionRequest $req, $id)
    {
        return $this->getResponse(
            function() use($req, $id)
            {
                $submission = Submission::find($id);
                if($submission==null)
                {
                    return back()->with('error', "submission with id $id not found");
                }
                $valid_data = $req->validated();
                $requirements = $valid_data['document_requirements'];
                $domains = $valid_data['domains'];
                unset($valid_data['domains']);
                unset($valid_data['document_requirements']);
                $submission->update($valid_data);

                $submission->document_requirements()->delete();
                foreach($requirements as $id)
                {
                    $data =
                    [
                        'type_id'=>$id,
                        'submission_id'=>$submission->id
                    ];
                    DocumentRequirement::create($data);
                }

                $submission->submission_domains()->delete();
                foreach($domains as $domain)
                {
                    [$type, $id] = explode("_", $domain);
                    $data =
                    [
                        'submission_id'=>$submission->id,
                        'domain_id'=>$id,
                        'domain_type'=>$type
                    ];
                    SubmissionDomain::create($data);
                }

                return redirect()->route('officer.submissions.index')->with('success', 'submission created succefully');
            }
        );
    }
    public function show($id)
    {
        return $this->getResponse(
            function() use($id)
            {
                $submission = Submission::with(['document_requirements', 'submission_domains'])->find($id);
                if($submission==null)
                {
                    return response()->json([
                        "message"=>"submission $id not found"
                    ]);
                }
                return response()->json([
                    "message"=>"Submission $id's data",
                    "data"=>$submission
                ]);
            }
        );
    }
    public function destroy($id)
    {
        return $this->getResponse(
            function() use($id)
            {
                $submission = Submission::find($id);
                if($submission==null)
                {
                    return back()->with('error', "submission with id $id not found");
                }
                $submission->submission_approvals()->delete();
                $submission->submission_domains()->delete();
                $submission->document_requirements()->delete();

                return redirect()->route('officer.submissions.index')->with('success', 'submission deleted successfully');
            }
        );
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
