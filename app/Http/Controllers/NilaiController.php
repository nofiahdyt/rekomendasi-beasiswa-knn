<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\MK;
use Illuminate\Http\Request;
use App\Models\Nilai;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $nilai=DB::table('tb_nilai')
            ->join('tb_mahasiswa','tb_nilai.id_mhs','=','tb_mahasiswa.id')
            ->join('tb_mk','tb_nilai.id_mk','=','tb_mk.id')
            ->select('tb_mahasiswa.*','tb_nilai.*','tb_mk.*')
            ->get();
        return view ('content.nilai', compact('nilai'));
    }

    public function create() {
        $mahasiswa = Mahasiswa::all();
        $mk = MK::all();
        return view ('content.nilai-tambah',compact('mahasiswa','mk'));
    }

    public function createPost(Request $request) {
        // dd($request);
        $Nilai = Nilai::create($request->all());
        $Nilai->save();
        return redirect()->route('nilai');
    }

    public function edit($id){
        $nilai = Nilai::find($id);
        return view('content.nilai-edit',compact('nilai'));
    }
    public function editpost(Request $request,$id){
        $nilai=nilai::find($id);
        $nilai->update($request->all());
        return redirect()->route('nilai');
    }

    public function hapus($id){
        $nilai=Nilai::find($id);
        $nilai->delete();
        return redirect()->route('nilai');
    }
}
