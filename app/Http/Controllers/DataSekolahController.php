<?php

namespace App\Http\Controllers;

use App\DataSekolah;
use Illuminate\Http\Request;

class DataSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('operator.data-sekolah');
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
        // dd($request->post());
        $data_sekolah = $request->validate([
            "nama_sekolah" => "required",
            "akreditasi" => "required",
            "kurikulum" => "required",
            "alamat" => "required",
            "wilayah" => "required",
            "npsn" => "required",
            "bentuk_sekolah" => "required",
            "bentuk_pendidikan" => "required",
            "status_kepemilikan" => "required",
            "sk_pendirian_sekolah" => "required",
            "tanggal_sk_pendirian" => "required",
            "sk_izin_operasional" => "required",
            "tanggal_sk_izin_operasional" => "required",
        ]);
        DataSekolah::create($data_sekolah);
        return back()->with('sukses berhasil dinput');
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
}
