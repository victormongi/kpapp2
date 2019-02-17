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
        $dataSekolah = collect([
            "jumlahSekolahTomohonUtara" => DataSekolah::where('wilayah', 'Tomohon Utara')->count(),
            "jumlahSekolahTomohonSelatan" => DataSekolah::where('wilayah', 'Tomohon Selatan')->count(),
            "jumlahSekolahTomohonTengah" => DataSekolah::where('wilayah', 'Tomohon Tengah')->count(),
            "jumlahSekolahTomohonBarat" => DataSekolah::where('wilayah', 'Tomohon Barat')->count(),
            "jumlahSekolahTomohonTimur" => DataSekolah::where('wilayah', 'Tomohon Timur')->count(),
            "jumlahTKTomohonUtara" => DataSekolah::where('wilayah', 'Tomohon Utara')->where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "jumlahTKTomohonSelatan" => DataSekolah::where('wilayah', 'Tomohon Selatan')->where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "jumlahTKTomohonTengah" => DataSekolah::where('wilayah', 'Tomohon Tengah')->where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "jumlahTKTomohonBarat" => DataSekolah::where('wilayah', 'Tomohon Barat')->where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "jumlahTKTomohonTimur" => DataSekolah::where('wilayah', 'Tomohon Timur')->where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "jumlahSDTomohonUtara" => DataSekolah::where('wilayah', 'Tomohon Utara')->where('bentuk_pendidikan', 'SD')->count(),
            "jumlahSDTomohonSelatan" => DataSekolah::where('wilayah', 'Tomohon Selatan')->where('bentuk_pendidikan', 'SD')->count(),
            "jumlahSDTomohonTengah" => DataSekolah::where('wilayah', 'Tomohon Tengah')->where('bentuk_pendidikan', 'SD')->count(),
            "jumlahSDTomohonBarat" => DataSekolah::where('wilayah', 'Tomohon Barat')->where('bentuk_pendidikan', 'SD')->count(),
            "jumlahSDTomohonTimur" => DataSekolah::where('wilayah', 'Tomohon Timur')->where('bentuk_pendidikan', 'SD')->count(),
            "jumlahSMPTomohonUtara" => DataSekolah::where('wilayah', 'Tomohon Utara')->where('bentuk_pendidikan', 'SMP')->count(),
            "jumlahSMPTomohonSelatan" => DataSekolah::where('wilayah', 'Tomohon Selatan')->where('bentuk_pendidikan', 'SMP')->count(),
            "jumlahSMPTomohonTengah" => DataSekolah::where('wilayah', 'Tomohon Tengah')->where('bentuk_pendidikan', 'SMP')->count(),
            "jumlahSMPTomohonBarat" => DataSekolah::where('wilayah', 'Tomohon Barat')->where('bentuk_pendidikan', 'SMP')->count(),
            "jumlahSMPTomohonTimur" => DataSekolah::where('wilayah', 'Tomohon Timur')->where('bentuk_pendidikan', 'SMP')->count(),
            "totalSekolah" => DataSekolah::all()->count(),
            "totalTK" => DataSekolah::where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "totalSMP" => DataSekolah::where('bentuk_pendidikan', 'SMP')->count(),
            "totalSD" => DataSekolah::where('bentuk_pendidikan', 'SD')->count(),
        ]);
        $dataSekolah2 = json_decode($dataSekolah->toJson());
        return view('operator.data-sekolah', compact('dataSekolah2'));

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
        $s = DataSekolah::where('id_data_sekolah', $id)->firstOrFail();
        // dd($dataSekolah);
        return view('operator.data-sekolah-edit', compact('s'));
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
        $data = $request->validate([
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
        DataSekolah::findOrFail($id)->update($data);
        return back()->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $dataSekolah = DataSekolah::where('id_data_sekolah', $id)->firstOrFail();
        $dataSekolah->delete();

        return back();
        //
    }

    // data sekolah

    public function getDataSekolahByKecamatan(Request $request)
    {
        $req = $request->get('kec');
        $dataSekolah = DataSekolah::where('wilayah', $req)->get();
        // dd($dataSekolah);
        return view('operator.data-sekolah-kecamatan', compact('dataSekolah'));
    }

    public function getDetailSekolahByNamaSekolah(Request $request)
    {
        $req = $request->get('nama-sekolah');
        $s = DataSekolah::where('nama_sekolah', $req)->first();
        return view('operator.data-sekolah-detail', compact('s'));
    }
}
