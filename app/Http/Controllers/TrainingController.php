<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
   public function index(){
    $testing=Testing::all();
    return view('content.testing',compact('testing'));
   }
   public function create() {
    return view ('content.testing-tambah', );
}

public function createPost(Request $request) {
    $request->validate([
        'id_mhs'=>'required',
        // 'nama'=>'required',
        // 'prodi'=>'required',
        'id_mk'=>'required',
        'testing'=>'required'
    ]);
    // dd($request);
    $Testing = Testing::create($request->all());
    $Testing->save();
    return redirect()->route('Testing');
}

public function edit($id){
    $Testingi = Testing::find($id);
    return view('content.Testing-edit', compact('Testingi','mahasiswa','mk'));
}

public function editpost(Request $request,$id){
    $Testing=Testing::find($id);
    // dd($Testing);
    $Testing->update($request->all());
    return redirect()->route('Testing');
} 

public function hapus($id){
    $Testing=Testing::find($id);
    $Testing->delete();
    return redirect()->route('Testing');
}
}