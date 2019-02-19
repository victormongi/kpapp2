<?php

namespace App\Http\Controllers;

use App\DataKepalaSekolah;
use Illuminate\Http\Request;
use App\DataSekolah;

class DataKepalaSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSekolah = DataSekolah::all();

        $s = collect([
            "jumlahKepalaSekolahTomohonUtara" => DataKepalaSekolah::where('wilayah', 'Tomohon Utara')->count(),
            "jumlahKepalaSekolahTomohonSelatan" => DataKepalaSekolah::where('wilayah', 'Tomohon Selatan')->count(),
            "jumlahKepalaSekolahTomohonTengah" => DataKepalaSekolah::where('wilayah', 'Tomohon Tengah')->count(),
            "jumlahKepalaSekolahTomohonBarat" => DataKepalaSekolah::where('wilayah', 'Tomohon Barat')->count(),
            "jumlahKepalaSekolahTomohonTimur" => DataKepalaSekolah::where('wilayah', 'Tomohon Timur')->count(),
            "totalKepalaSekolah" => DataKepalaSekolah::all()->count(),
        ]);

        $dataSekolah2 = json_decode($s->toJson());

        return view('operator.data-kepala-sekolah', compact('dataSekolah', 'dataSekolah2'));
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
        $image = $request->file('foto_url');
        if ($image){
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images');

            $image->move($destinationPath, $filename);
        }
        

        $data_kepala_sekolah = $request->validate([
            "nama_kepala_sekolah" => "required",
            "alamat" => "required",
            "nomor_hp" => "required",
            "wilayah" => "required",
            "bentuk_pendidikan" => "required",
            "nama_sekolah" => "required",
            "nama_pengguna" => "required",
            "kata_sandi" => "required",
            "foto_url" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);



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
                "foto_url" => $filename ?? '',
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
        $dataSekolah=DataSekolah::all();

        $s = DataKepalaSekolah::where('id_data_kepala_sekolah', $id)->firstOrFail();
        // dd($s);
        return view('operator.data-kepala-sekolah-edit', compact('s', 'dataSekolah'));
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

        $image = $request->file('foto_url');

        if ($image) {
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images');

            $image->move($destinationPath, $filename);
        }

        $dataKepalaSekolah = $request->validate([
            "nama_kepala_sekolah" => "required",
            "alamat" => "required",
            "nomor_hp" => "required",
            "wilayah" => "required",
            "bentuk_pendidikan" => "required",
            "nama_sekolah" => "required",
            "nama_pengguna" => "required",
            "kata_sandi" => "required",
            "foto_url" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        DataKepalaSekolah::findOrFail($id)->update($dataKepalaSekolah);
        return back()->with('message', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $s = DataKepalaSekolah::where('id_data_kepala_sekolah', $id)->firstOrFail();
        $s->delete();

        return back();
    }

    public function getKepalaSekolahByKecamatan(Request $request)
    {

        $req = $request->get('kec');
        $kepalaSekolah = DataKepalaSekolah::where('wilayah', $req)->get();
        // dd($kepalaSekolah);
        return view('operator.data-kepala-sekolah-kecamatan', compact('kepalaSekolah'));
    }

    public function getDetailKepalaSekolahByNamaKepalaSekolah(Request $request)
    {
        $req = $request->get('nama-kepala-sekolah');
        $s = DataKepalaSekolah::where('nama_kepala_sekolah', $req)->first();
        // dd($s);
        return view('operator.data-kepala-sekolah-detail', compact('s'));
    }
}
