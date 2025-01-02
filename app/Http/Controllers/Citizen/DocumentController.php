<?php

namespace App\Http\Controllers\Citizen;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    //
    public function index(Request $request)
    {
        $user = Auth::user();
        $documents = $user->userable->documents;
        $withFamily = $request->query('withFamily', false);
        return view("frontend.citizen.document.index", compact("documents", "documents"));
    }
    public function show($id)
    {
        $user = Auth::user();
        $document = $user->userable->documents->where('id', $id);
        if($document->count() == 0)
        {
            return back()->with('error', 'document not found');
        }

        $document = $document->first();
        // decrypt document image
        return view("frontend.citizen.document.show", compact('document', 'document'));
    }
}
