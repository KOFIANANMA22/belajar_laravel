<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index($anan){

        $nama = "Anan";
        return view('profil',[
            "nama" => $nama,
            "alamat" =>"Semarang"
        ]);
    }
}
