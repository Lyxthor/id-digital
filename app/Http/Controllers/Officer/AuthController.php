<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $privileges = $user->userable->authorities;
        return view('auth.officerRoleSelection', compact('privileges', 'privileges'));
    }
    public function store(Request $req)
    {
        $req->validate([
            "privilege_id"=>"required|exists:authorities,id"
        ]);
        $user = Auth::user();
        $privileges = $user->userable->authorities->where('id', $req->privilege_id);
        if($privileges->count() == 0)
        {
            return back()->with("error", "privilege invalid");
        }
        $user->usedPrivilege = $privileges->first();
        return redirect()->route("officer.submissions.index");
    }
}
