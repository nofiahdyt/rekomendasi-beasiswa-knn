<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Rekomendasi;
use App\Models\Training;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function rekomendasi(){
        $testing=Training::orderBy('label','asc')->get();
        
        // fore
        // $testingg=Training::orderBy('label','asc');
       
        // dd($testing);
        return view('content.testing',compact('testing'));
    }
    public function akses(Request $request){
        Training::orderBy('label','asc')->limit(2)->update([
            'hasil'=>'tidak_Lulus',
        ]);
        return redirect('/coba');
    }
}
