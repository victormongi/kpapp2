<?php

namespace App\Http\Controllers;

use App\DataAnggota;

class PtkNonPnsController extends Controller
{
    public function index()
    {
        return view('ptk-non-pns.index');
    }

    public function dataDiri()
    {
        $s = DataAnggota::where('id_data_anggotas', 1)->firstOrFail();

        return view('ptk-non-pns.data-diri', compact('s'));
    }

    public function laporan()
    {
        return view('ptk-non-pns.laporan');
    }

}
