<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use App\Models\DocumentRequirement;
use App\Models\Submission;
use App\Models\SubmissionDomain;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public  function showSubmissionPage(){
        return view('frontend.citizen.submission.index');
    }

    public function index()
    {
        return response()->json([
            "message"=>"All submission data",
            "data"=>Submission::all()
        ]);
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
                    $type = $domain['type'];
                    foreach($domain['ids'] as $id_collection)
                    {
                        $data =
                        [
                            'submission_id'=>$submission->id,
                            'domain_id'=>$id_collection['id'],
                            'domain_type'=>$type
                        ];
                        SubmissionDomain::create($data);
                    }
                }

                return response()->json([
                    "message"=>"Submission created successfully",
                    "data" => $submission
                ]);
            }
        );
    }
    public function update(UpdateSubmissionRequest $req, Submission $submission)
    {
        return $this->getResponse(
            function() use($req)
            {
                $validData = $req->validated();
                $type_ids = $validData['type_ids'];
                unset($validData['type_ids']);
                $data = Submission::create($validData);
                foreach($type_ids as $id)
                {
                    DocumentRequirement::create([
                        'type_id'=>$id,
                        'submission_id'=>$data->id
                    ]);
                }
                return response()->json([
                    "message"=>"Submission created successfully",
                    "data"=>$data
                ]);
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
