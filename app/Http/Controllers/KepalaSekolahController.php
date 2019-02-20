<?php

namespace App\Http\Controllers;

class KepalaSekolahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dataKepalaSekolah');
    }

    public function lihatSemuaPtk()
    {
        // dd(Auth::user());
        return view('kepala-sekolah.laporan');
    }
}
