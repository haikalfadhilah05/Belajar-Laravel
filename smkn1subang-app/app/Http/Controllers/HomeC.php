<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesertadidikS;
use App\Models\eskulS;
use App\Models\prestasiS;
use App\Models\about;


class HomeC extends Controller
{
    public function index(){
        return view('pages.home');
    }
    
    public function pesertadidik (){
        $data = pesertadidikS::all();
        return view('pages.pesertadidik', ['data' => $data]);
    }
    public function eskul (){
        $data = eskulS::all();
        return view('pages.eskul', ['data' => $data]);
    }
    public function prestasi (){
        $data = prestasiS::all();
        return view('pages.prestasi', ['data' => $data]);
    }
    public function about(){
        return view('pages.about');
    }
    
}
