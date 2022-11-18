<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        // dd('ok');
        $training=Training::all();
        return view ('content.training', compact('training'));
    }

    public function create() {
        return view ('content.training-tambah');
    }

    public function createPost(Request $request) {
        dd($request);
        $request->validate([
            'nama'=>'required',
            'ipk'=>'required',
            'penghasilan'=>'required',
            'smt'=>'required',
            'status'=>'required',
            'label'=>'required',
        ]);
        // dd($request);
        $Training = Training::create($request->all());
        $Training->save(); 
        return redirect()->route('training');
    }

    public function edit($id){
        $training = Training::find($id);
        return view('content.training-edit',compact('training'));
    }
    public function editpost(Request $request,$id){
        $training=training::find($id);
        $training->update($request->all());
        return redirect()->route('training');
    }

    public function hapus($id){
        $training=Training::find($id);
        $training->delete();
        return redirect()->route('training');
    }
}