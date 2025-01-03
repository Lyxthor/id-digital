<?php

namespace App\Http\Controllers\Dukcapil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DocumentType;
use App\Models\Document;
use App\Http\Requests\DocumentStoreRequest;
use App\Helpers\ImageCipherHelper;
use App\Helpers\TextCipherHelper;
use App\Http\Requests\UpdateDocumentRequest;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index()
    {
        return "hello";
    }
    public function create()
    {
        $document_types = DocumentType::all();
        return view('frontend.dukcapil.document.create', compact('document_types'));
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
            unset($validData['document_file']);
            // remove document_file since it's not get needed anymore
            Document::create($validData);

            return redirect()->route('dukcapil.documents.index')->with('success', 'document addedd succesfully');
        });
    }
    public function update(UpdateDocumentRequest $req, $id) {
        return $this->getResponse(function() use($req, $id)
        {
            $document = Document::find($id);
            if($document==null)
            {
                return back()->with('error', 'document not found');
            }
            $validData = $req->validated();
            // Store and append the path of stored image in validData
            $file = $req->file('document_file');
            $path = $this->storeImage($file);
            $validData['doc_path'] = $path;
            unset($validData['document_file']);

            // remove document_file since it's not get needed anymore
            $document->update($validData);

            return redirect()->route('dukcapil.documents.create')->with('success', 'document addedd succesfully');
        });
    }
    // Notes : Turn storeImage method into a global method or a method of a helper class
    private function storeImage($file) // Save and return the image path
    {
            $generateHashedName = function ($file) {
                return hash('sha256', uniqid('', true)) . '.enc'; // Menggunakan ekstensi .enc untuk file terenkripsi
            };

            $fileContent = file_get_contents($file);
            $encryptedContent = ImageCipherHelper::encrypt($fileContent); // Enkripsi konten file
            $fileName = TextCipherHelper::encrypt($file, env('ENCRIPTION_KEY')); // Nama file hash dengan ekstensi
            $fileName = $generateHashedName($file);
            $filePath = storage_path("images/".$fileName);
            // Simpan file terenkripsi ke path tujuan
            Storage::disk('public')->put("images/$fileName", $encryptedContent);

            // Simpan nama file ke database
            return $fileName;

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
