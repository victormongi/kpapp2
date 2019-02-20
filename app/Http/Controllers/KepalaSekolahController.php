<?php

namespace App\Http\Controllers;

use App\DataAnggota;
use App\DataKepalaSekolah;
use App\Laporan;

class KepalaSekolahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dataKepalaSekolah');
    }

    public function index()
    {
        return view('kepala-sekolah.index');
    }

    public function lihatSemuaPtk()
    {
        $dataAnggota = DataAnggota::where('nama_sekolah', (\Auth::user()->nama_sekolah))->get();
        // dd($s);
        return view('kepala-sekolah.laporan', compact('dataAnggota'));
    }

    public function detailLaporan()
    {
        // dd(\Auth::user());
        $laporanHarian = Laporan::where('id_data_anggotas', request()->get('id_anggota'))->get();
        // dd($dataAnggota);
        return view('kepala-sekolah.detail-laporan', compact('laporanHarian'));
    }

    public function dataDiri()
    {
        $s = DataKepalaSekolah::where('id_data_kepala_sekolah', \Auth::user()->id_data_kepala_sekolah)->firstOrFail();
        return view('kepala-sekolah.data-diri', compact('s'));
    }
}
