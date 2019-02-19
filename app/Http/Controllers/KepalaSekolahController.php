<?php

namespace App\Http\Controllers;

class KepalaSekolahController extends Controller
{
    //
    public function lihatSemuaPtk()
    {
        return view('kepala-sekolah.laporan');
    }
}
