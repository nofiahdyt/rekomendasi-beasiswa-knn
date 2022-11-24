<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Testing;

class TestingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        // dd('ok');
        $testing=Testing::all();
        return view ('content.testing', compact('testing'));
    }

    public function create() {
        return view ('content.testing-tambah');
    }

    public function createPost(Request $request) {
        // dd($request);
        // $request->validate([
        //     'nama'=>'required',
        //     'ipk'=>'required',
        //     'penghasilan'=>'required',
        //     'smt'=>'required',
        //     'status'=>'required',
        //     'label'=>'required',
        // ]);
        // dd($request);
        $Training = Testing::create($request->all());
        $Training->save(); 
        return redirect()->route('testing');
    }

    public function edit($id){
        $training = Testing::find($id);
        return view('content.testing-edit',compact('training'));
    }
    public function editpost(Request $request,$id){
        $training=Testing::find($id);
        $training->update($request->all());
        return redirect()->route('testing');
    }

    public function hapus($id){
        $training=Testing::find($id);
        $training->delete();
        return redirect()->route('testing');
    }
}
