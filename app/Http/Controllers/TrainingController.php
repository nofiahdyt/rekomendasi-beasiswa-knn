<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $training=Training::all();
        return view ('content.training', compact('training'));
    }

    // public function create() {
    //     return view ('content.mahasiswa-tambah');
    // }

    public function createPost(Request $request) {
        // $request->validate([
        //     'nama'=>'required',
        //     'npm'=>'required',
        //     'alamat'=>'required',
        //     'jk'=>'required',
        //     'tgl_lahir'=>'required',
        //     'tempat_lahir'=>'required',
        //     'semester'=>'required',
        //     'status_perkawinan'=>'required',
        //     'ipk'=>'required',
        //     'penghasilan'=>'required',
        //     'email'=>'required'
        // ]);
        // dd($request);
        $Training = Training::create($request->all());
        $Training->save();
        $hasil= new Training();
        // dd($rekomendasi);
            if($request->smt<=2){
                $smt=5;
            }else if($request->smt>=3 && $request->smt<=4){
                $smt=4;
            }else if($request->smt>=5 && $request->smt<=6){
                $smt=3;
            }else if($request->smt>=7 && $request->smt<=8){
                $smt=2;
            }else if($request->smt>=8){
                $smt=1;
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
            if($request->status == "Belum"){
                $status=2;
            }else if($request->status == "Sudah"){
                $status=1;
            }
            $ipkh=(5-$ipk);
            $smt=(5-$smt);
            $pengh=(5-$peng);
            $statush=(2-$status);
            $pros=sqrt(($ipkh*$ipkh)+($smt*$smt)+($pengh*$pengh)+($statush*$statush));
            // dd($pros);
            $hasil->nama=$request->nama;
                // $hasil->npm=$request->npm;
                $hasil->ipk=$ipk;
                $hasil->penghasilan=$peng;
                $hasil->smt=$smt;
                $hasil->status=$status;
                $hasil->label=$pros;
                $hasil->hasil="tidak_lulus";
                $hasil->save();        
        return redirect()->route('training');
    }
}