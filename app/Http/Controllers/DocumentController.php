<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentStoreRequest;
use App\Http\Requests\DocumentUpdateRequest;
use App\Models\Document;
use App\Models\DocumentType;
//use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class DocumentController extends Controller
{
    public function index(Request $req)
    {
        $type = $req->type;
        $type_id = DocumentType::where('name', $type)->select(['id'])->get();
        $message="";

        if($type_id!=null && $type_id->count() > 0)
        {
            $docs = Document::where('type_id', $type_id)->get();
            $message = "All $type citizens' data";
        }
        else
        {
            $docs = Document::all();
            $message = "All citizens' data";
        }
        return response()->json([
            'message'=>$message,
            'data'=>$docs
        ], 200);
    }
    public function create(Request $req)
    {
        return
        response()->json([
            'data'=>$req->all()
        ], 200);
    }
    public function show($id)
    {
        $doc = Document::find($id);
        return response()->json([
            'message'=>'data',
            'data'=>$doc
        ], 200);
    }
    public function edit()
    {
        try
        {

        }
        catch(\Exception $e)
        {

        }
    }
    public function store(DocumentStoreRequest $req)
    {
        return $this->getResponse(function() use($req)
        {
            $validData = $req->validated();

            // Store and append the path of stored image in validData
            $file = $req->file('document_file');
            $path = $this->storeImage($file);
            $validData['doc_path'] = $path;
            unset($validData['document_file']); // remove document_file since it's not get needed anymore

            $data = Document::create($validData);
            return response()->json([
                "message"=>"Add document for citizen $validData[citizen_id] is success",
                "data"=>$data
            ], 201);
        });
    }
    // Notes : Turn storeImage method into a global method or a method of a helper class
    private function storeImage($file) // Save and return the image path
    {
        $file_name = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        $path = "images";
        $file_path = $file->storeAs($path, $file_name, 'public');
        return $file_path;
    }
    public function update(DocumentUpdateRequest $req, Document $doc)
    {
        return $this->getResponse(function() use($req, $doc)
        {
            $validData = $req->validated();

            // Store and append the path of stored image in validData
            $file = $req->file('document_file');
            $path = $this->storeImage($file);
            $validData['doc_path'] = $path;
            unset($validData['document_file']); // remove document_file since it's not get needed anymore

            $doc->update($validData);
            return response()->json([
                "message"=>"Update document for citizen $validData[nik] is success",
                "data"=>$validData
            ], 201);
        });
    }
    public function destroy($id)
    {
        return $this->getResponse(function() use($id)
        {
            $document = Document::find($id);
            if($document==null)
            {
                return response()->json([
                    "message"=>"Document with id $id not found",
                ], Response::HTTP_NOT_FOUND);
            }
            $document->delete();
            return response()->json([
                "message"=>"Document with id $id is destroyed successfully",
                "data"=>$document
            ], 201);
        });
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
