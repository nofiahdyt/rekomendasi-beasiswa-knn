<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Rekomendasi;
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
        $request->validate([
            'nama'=>'required',
            'npm'=>'required',
            'alamat'=>'required',
            'jk'=>'required',
            'tgl_lahir'=>'required',
            'tempat_lahir'=>'required',
            'semester'=>'required',
            'status_perkawinan'=>'required',
            'ipk'=>'required',
            'penghasilan'=>'required',
            'email'=>'required'
        ]);
        // dd($request);
        $Mahasiswa = Mahasiswa::create($request->all());
        $Mahasiswa->save();
        $hasil= new Rekomendasi();
        // dd($rekomendasi);
            if($request->semester<=2){
                $semester=5;
            }else if($request->semester>=3 && $request->semester<=4){
                $semester=4;
            }else if($request->semester>=5 && $request->semester<=6){
                $semester=3;
            }else if($request->semester>=7 && $request->semester<=8){
                $semester=2;
            }else if($request->semester>=8){
                $semester=1;
            }
            if($request->ipk>=3.75){
                $ipk=5;
            }else if($request->ipk>=3.5 && $request->ipk<=3.74){
                $ipk=4;
            }else if($request->ipk>=3.25 && $request->ipk<=3.49){
                $ipk=3;
            }else if($request->ipk>=3 && $request->ipk<=3.24){
                $ipk=2;
            }else if($request->ipk<3){
                $ipk=1;
            }
            if($request->penghasilan <=1500000){
                $peng=5;
            }else if($request->penghasilan >=1500001 && $request->penghasilan<=2500000){
                $peng=4;
            }else if($request->penghasilan >=2500001 && $request->penghasilan<=3500000){
                $peng=3;
            }else if($request->penghasilan >=3500001 && $request->penghasilan<=4500000){
                $peng=2;
            }else if($request->penghasilan >4500000 ){
                $peng=1;
            }
            if($request->status_perkawinan == "Belum"){
                $status=2;
            }else if($request->status_perkawinan == "Sudah"){
                $status=1;
            }
            $ipkh=(4-$ipk);
            $semesterh=(4-$semester);
            $pengh=(4-$peng);
            $statush=(2-$status);
            $pros=sqrt(($ipkh*$ipkh)+($semesterh*$semesterh)+($pengh*$pengh)+($statush*$statush));
            // dd($pros);
            $hasil->nama=$request->nama;
                $hasil->npm=$request->npm;
                $hasil->ipk=$ipk;
                $hasil->penghasilan=$peng;
                $hasil->semester=$semester;
                $hasil->status_perkawinan=$status;
                $hasil->label=$pros;
                $hasil->save();
        
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('content.mahasiswa-edit',compact('mahasiswa'));
    }
    public function editpost(Request $request,$id){
        $mahasiswa=Mahasiswa::find($id);
        $
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa');
    }

    public function hapus($id){
        $mahasiswa=Mahasiswa::find($id);
       $mahasiswa->delete();
        return redirect()->route('mahasiswa');
    }
}
