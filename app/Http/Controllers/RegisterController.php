<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        //return "OK";
        return view('form');
    }

    public function sapa(Request $request){
        //var_dump($request);
        //dd($request["alamat"]);
        return "haloo";
    }

    public function sapa_post(Request $request){
        //dd($request->all());
        $nama = $request["nama"];
        $nama_akhir = $request["nama_akhir"];
        return "Haloo ".$nama." ".$nama_akhir;
    }
}
