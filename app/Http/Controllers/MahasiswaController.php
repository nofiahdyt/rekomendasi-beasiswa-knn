<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $mahasiswa=Mahasiswa::all();
        return view ('content.mahasiswa', compact('mahasiswa'));
    }

    public function create() {
        return view ('content.mahasiswa-tambah');
    }

    public function createPost(Request $request) {
        // dd($request);
        $Mahasiswa = Mahasiswa::create($request->all());
        $Mahasiswa->save();
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('content.mahasiswa-edit',compact('mahasiswa'));
    }
    public function editpost(Request $request,$id){
        $mahasiswa=Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa');
    }

    public function hapus($id){
        $mahasiswa=Mahasiswa::find($id);
       $mahasiswa->delete();
        return redirect()->route('mahasiswa');
    }
}
