<?php

namespace App\Http\Controllers;

use App\DataKepalaSekolah;
use Illuminate\Http\Request;

class DataKepalaSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('operator.data-kepala-sekolah');

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
        $data_kepala_sekolah = $request->validate([
            "nama_kepala_sekolah" => "required",
            "alamat" => "required",
            "nomor_hp" => "required",
            "wilayah" => "required",
            "bentuk_pendidikan" => "required",
            "nama_sekolah" => "required",
            "nama_pengguna" => "required",
            "kata_sandi" => "required",
            "foto_url" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $image = $request->file('foto_url');

        $filename = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = public_path('/images');

        $image->move($destinationPath, $filename);

        DataKepalaSekolah::create(
            [
                "nama_kepala_sekolah" => $request->post("nama_kepala_sekolah"),
                "alamat" => $request->post("alamat"),
                "nomor_hp" => $request->post("nomor_hp"),
                "wilayah" => $request->post("wilayah"),
                "bentuk_pendidikan" => $request->post("bentuk_pendidikan"),
                "nama_sekolah" => $request->post("nama_sekolah"),
                "nama_pengguna" => $request->post("nama_pengguna"),
                "kata_sandi" => $request->post("kata_sandi"),
                "foto_url" => $filename,
            ]
        );
        // dd($filename);
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
