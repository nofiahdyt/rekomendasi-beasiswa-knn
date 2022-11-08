<?php

namespace App\Http\Controllers;

use App\Models\MK;
use Illuminate\Http\Request;

class MKController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $mk=MK::all();
        return view ('content.mk', compact('mk'));
    }

    public function create() {
        return view ('content.mk-tambah');
    }

    public function createPost(Request $request) {
        // dd($request);
        $MK = MK::create($request->all());
        $MK->save();
        return redirect()->route('mk');
    }

    public function edit($id){
        $mk = MK::find($id);
        return view('content.mk-edit',compact('mk'));
    }
    public function editpost(Request $request,$id){
        $mk=mk::find($id);
        $mk->update($request->all());
        return redirect()->route('mk');
    }

    public function hapus($id){
        $mk=MK::find($id);
        $mk->delete();
        return redirect()->route('mk');
    }
}