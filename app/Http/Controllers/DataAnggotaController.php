<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataAnggota;
use App\DataSekolah;
use Illuminate\Support\Facades\Input;

class DataAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSekolah = DataSekolah::all();
        // dd($dataSekolah);

        $dataAnggota = collect([
            "jumlahAnggotaTomohonUtara" => DataAnggota::where('wilayah', 'Tomohon Utara')->count(),
            "jumlahAnggotaTomohonSelatan" => DataAnggota::where('wilayah', 'Tomohon Selatan')->count(),
            "jumlahAnggotaTomohonTengah" => DataAnggota::where('wilayah', 'Tomohon Tengah')->count(),
            "jumlahAnggotaTomohonBarat" => DataAnggota::where('wilayah', 'Tomohon Barat')->count(),
            "jumlahAnggotaTomohonTimur" => DataAnggota::where('wilayah', 'Tomohon Timur')->count(),
            "jumlahTKTomohonUtara" => DataAnggota::where('wilayah', 'Tomohon Utara')->where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "jumlahTKTomohonSelatan" => DataAnggota::where('wilayah', 'Tomohon Selatan')->where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "jumlahTKTomohonTengah" => DataAnggota::where('wilayah', 'Tomohon Tengah')->where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "jumlahTKTomohonBarat" => DataAnggota::where('wilayah', 'Tomohon Barat')->where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "jumlahTKTomohonTimur" => DataAnggota::where('wilayah', 'Tomohon Timur')->where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "jumlahSDTomohonUtara" => DataAnggota::where('wilayah', 'Tomohon Utara')->where('bentuk_pendidikan', 'SD')->count(),
            "jumlahSDTomohonSelatan" => DataAnggota::where('wilayah', 'Tomohon Selatan')->where('bentuk_pendidikan', 'SD')->count(),
            "jumlahSDTomohonTengah" => DataAnggota::where('wilayah', 'Tomohon Tengah')->where('bentuk_pendidikan', 'SD')->count(),
            "jumlahSDTomohonBarat" => DataAnggota::where('wilayah', 'Tomohon Barat')->where('bentuk_pendidikan', 'SD')->count(),
            "jumlahSDTomohonTimur" => DataAnggota::where('wilayah', 'Tomohon Timur')->where('bentuk_pendidikan', 'SD')->count(),
            "jumlahSMPTomohonUtara" => DataAnggota::where('wilayah', 'Tomohon Utara')->where('bentuk_pendidikan', 'SMP')->count(),
            "jumlahSMPTomohonSelatan" => DataAnggota::where('wilayah', 'Tomohon Selatan')->where('bentuk_pendidikan', 'SMP')->count(),
            "jumlahSMPTomohonTengah" => DataAnggota::where('wilayah', 'Tomohon Tengah')->where('bentuk_pendidikan', 'SMP')->count(),
            "jumlahSMPTomohonBarat" => DataAnggota::where('wilayah', 'Tomohon Barat')->where('bentuk_pendidikan', 'SMP')->count(),
            "jumlahSMPTomohonTimur" => DataAnggota::where('wilayah', 'Tomohon Timur')->where('bentuk_pendidikan', 'SMP')->count(),
            "totalAnggota" => DataAnggota::all()->count(),
            "totalTK" => DataAnggota::where('bentuk_pendidikan', 'TK/PAUD')->count(),
            "totalSMP" => DataAnggota::where('bentuk_pendidikan', 'SMP')->count(),
            "totalSD" => DataAnggota::where('bentuk_pendidikan', 'SD')->count(),
        ]);
        $dataAnggota2 = json_decode($dataAnggota->toJson());

        return view('operator.data-anggota', compact('dataSekolah', 'dataAnggota2'));
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
        // dd($request->post());
        $image = $request->file('foto_url');
        if ($image){
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images');

            $image->move($destinationPath, $filename);
        }
        
        $data_anggota = $request->validate([
            "nama_anggota" => "required",
            "tempat_lahir" => "required",
            "jenis_kelamin" => "required",
            "tanggal_lahir" => "required",
            "alamat" => "required",
            "nomor_hp" => "required",
            "pendidikan_terakhir" => "required",
            "lembaga_pendidikan" => "required",
            "ijazah" => "required",
            "tmt_bekerja" => "required",
            "mata_pelajaran" => "required",
            "jumlah_jam_pelajaran" => "required",
            "wilayah" => "required",
            "bentuk_pendidikan" => "required",
            "nama_sekolah" => "required",
            "nama_pengguna" => "required",
            "kata_sandi" => "required",
            "foto_url" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        DataAnggota::create(
            [
            "nama_anggota" =>$request->post("nama_anggota"),
            "tempat_lahir" =>$request->post("tempat_lahir"),
            "tanggal_lahir" =>$request->post("tanggal_lahir"),
            "jenis_kelamin" =>$request->post("jenis_kelamin"),
            "alamat" =>$request->post("alamat"),
            "nomor_hp" =>$request->post("nomor_hp"),
            "pendidikan_terakhir" =>$request->post("pendidikan_terakhir"),
            "lembaga_pendidikan" =>$request->post("lembaga_pendidikan"),
            "ijazah" =>$request->post("ijazah"),
            "tmt_bekerja" =>$request->post("tmt_bekerja"),
            "mata_pelajaran" =>$request->post("mata_pelajaran"),
            "jumlah_jam_pelajaran" =>$request->post("jumlah_jam_pelajaran"),
            "wilayah" =>$request->post("wilayah"),
            "bentuk_pendidikan" =>$request->post("bentuk_pendidikan"),
            "nama_sekolah" =>$request->post("nama_sekolah"),
            "nama_pengguna" =>$request->post("nama_pengguna"),
            "kata_sandi" =>$request->post("kata_sandi"),
            "foto_url" =>$filename ?? '',
            ]
        );
        // dd($data_anggota);
        return back()->with('sukses berhasil dimasukkan');
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
        $dataSekolah = DataSekolah::all();

        $s = DataAnggota::where('id_data_anggotas', $id)->firstOrFail();
        // dd($dataAnggota);
        return view('operator.data-anggota-edit', compact('s', 'dataSekolah'));
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
        // dd($request->post());
        $image = $request->file('foto_url');

        if ($image) {
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images');

            $image->move($destinationPath, $filename);
        }

        $data = $request->validate([
            "nama_anggota" => "required",
            "tempat_lahir" => "required",
            "jenis_kelamin" => "required",
            "tanggal_lahir" => "required",
            "alamat" => "required",
            "nomor_hp" => "required",
            "pendidikan_terakhir" => "required",
            "lembaga_pendidikan" => "required",
            "ijazah" => "required",
            "tmt_bekerja" => "required",
            "mata_pelajaran" => "required",
            "jumlah_jam_pelajaran" => "required",
            "wilayah" => "required",
            "bentuk_pendidikan" => "required",
            "nama_sekolah" => "required",
            "nama_pengguna" => "required",
            "kata_sandi" => "required",
            "foto_url" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        DataAnggota::findOrFail($id)->update($data);
        return back()->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('destroy');
        $dataAnggota = DataAnggota::where('id_data_anggotas', $id)->firstOrFail();
        $dataAnggota->delete();

        return back();
    }

    public function getDataAnggotaByKecamatan(Request $request)
    {
        $req = $request->get('kec');
        $dataAnggota = DataAnggota::where('wilayah', $req)->get();
        // dd($dataAnggota);
        return view('operator.data-anggota-kecamatan', compact('dataAnggota'));
    }
}
