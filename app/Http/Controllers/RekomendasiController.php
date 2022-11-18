<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Rekomendasi;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function rekomendasi(){
        $rekomendasi=Mahasiswa::all();
        $hasil= new Rekomendasi();
        // dd($rekomendasi);
        foreach ($rekomendasi as $rekom){
            if($rekom->semester<=2){
                $semester=5;
            }else if($rekom->semester>=3 && $rekom->semester<=4){
                $semester=4;
            }else if($rekom->semester>=5 && $rekom->semester<=6){
                $semester=3;
            }else if($rekom->semester>=7 && $rekom->semester<=8){
                $semester=2;
            }else if($rekom->semester>=8){
                $semester=1;
            }
            if($rekom->ipk>=3.75){
                $ipk=5;
            }else if($rekom->ipk>=3.5 && $rekom->ipk<=3.74){
                $ipk=4;
            }else if($rekom->ipk>=3.25 && $rekom->ipk<=3.49){
                $ipk=3;
            }else if($rekom->ipk>=3 && $rekom->ipk<=3.24){
                $ipk=2;
            }else if($rekom->ipk<3){
                $ipk=1;
            }
            if($rekom->penghasilan <=1500000){
                $peng=5;
            }else if($rekom->penghasilan >=1500001 && $rekom->penghasilan<=2500000){
                $peng=4;
            }else if($rekom->penghasilan >=2500001 && $rekom->penghasilan<=3500000){
                $peng=3;
            }else if($rekom->penghasilan >=3500001 && $rekom->penghasilan<=4500000){
                $peng=2;
            }else if($rekom->penghasilan >4500000 ){
                $peng=1;
            }
            if($rekom->status_perkawinan == "Belum"){
                $status=2;
            }else if($rekom->status_perkawinan == "Sudah"){
                $status=1;
            }
            $ipkh=(4-$ipk);
            $semesterh=(4-$semester);
            $pengh=(4-$peng);
            $statush=(2-$status);
            $pros=sqrt(($ipkh*$ipkh)+($semesterh*$semesterh)+($pengh*$pengh)+($statush*$statush));
            // dd($pros);
            $hasil->nama=$rekom->nama;
                $hasil->npm=$rekom->npm;
                $hasil->ipk=$ipk;
                $hasil->penghasilan=$peng;
                $hasil->semester=$semester;
                $hasil->status_perkawinan=$status;
                $hasil->label=$pros;
                $hasil->save();
        }
        // dd($hasil);
    }
}
