<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mterima=Training::where('hasil','lulus')->count();
        $mtidak=Training::where('hasil','tidak_lulus')->count();
        return view('content.home',compact('mterima','mtidak'));
    }

}
