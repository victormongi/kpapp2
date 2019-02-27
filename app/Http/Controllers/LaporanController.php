<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataAnggota;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAnggota = collect([
            "jumlahAnggotaTomohonUtara" => DataAnggota::where('wilayah', 'Tomohon Utara')->count(),
            "jumlahAnggotaTomohonSelatan" => DataAnggota::where('wilayah', 'Tomohon Selatan')->count(),
            "jumlahAnggotaTomohonTengah" => DataAnggota::where('wilayah', 'Tomohon Tengah')->count(),
            "jumlahAnggotaTomohonBarat" => DataAnggota::where('wilayah', 'Tomohon Barat')->count(),
            "jumlahAnggotaTomohonTimur" => DataAnggota::where('wilayah', 'Tomohon Timur')->count(),

            "totalAnggota" => DataAnggota::all()->count(),
            "totalTK" => DataAnggota::where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "totalSMP" => DataAnggota::where('bentuk_pendidikan', 'SMP')->count(),
            "totalSD" => DataAnggota::where('bentuk_pendidikan', 'SD')->count(),
        ]);
        $dataAnggota2 = json_decode($dataAnggota->toJson());

        return view('operator.laporan', compact('dataAnggota2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDetailAnggotaByNamaAnggota(Request $request)
    {
        $req = $request->get('nama-anggota');
        $s = DataAnggota::where('nama_anggota', $req)->first();
        return view('operator.data-anggota-detail', compact('s'));
    }

}
