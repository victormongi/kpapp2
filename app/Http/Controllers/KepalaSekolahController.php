<?php

namespace App\Http\Controllers;

class KepalaSekolahController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:kepalaSekolah');
    }
    //
    public function lihatSemuaPtk()
    {
        return view('kepala-sekolah.laporan');
    }
}
