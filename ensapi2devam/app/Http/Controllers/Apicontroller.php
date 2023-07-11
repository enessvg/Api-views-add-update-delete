<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Apicontroller extends Controller
{
    public function apikullanicigetir(){
        $response = Http::get('http://127.0.0.1:8000/api/items');
        $veriler = $response->json();
        return view('veriler', ['veriler'=> $veriler]);
        //ilk olan blade ismi 2.olan $veriler tarafı
    }
}
