<?php

namespace App\Http\Controllers;

use App\DataAnggota;
use App\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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

    public function laporan(Request $request)
    {
        $laporanHarian = Laporan::where('id_data_anggotas', 1)
            ->whereYear('tanggal_kegiatan', $request->get('tahun'))
            ->whereMonth('tanggal_kegiatan', $request->get('bulan'))
            ->get();
        // $laporanHarian = \array_unique($laporanHarian);
        // $laporanHarianGrouped = $laporanHarian->groupBy('tanggal_kegiatan');
        // $laporanHarian = $laporanHarianGrouped;
        $laporanHarian = $laporanHarian->unique('tanggal_kegiatan');
        return view('ptk-non-pns.laporan', compact('laporanHarian'));
    }

    public function laporanHarian()
    {
        $laporanHarian = Laporan::where('id_data_anggotas', 1)
            ->whereDate('tanggal_kegiatan', Carbon::today())
            ->get();
        // dd($laporanHarian);
        return view('ptk-non-pns.laporan-harian', compact('laporanHarian'));
    }

    public function buatLaporanHarian(Request $request)
    {
        // dd($request->post());

        $request->validate([
            "jumlah_rombel" => 'required',
            "jumlah_siswa" => 'required',
            "tanggal_kegiatan" => 'required|before:' . Carbon::today()->addDays(1),
            "jam_mulai" => 'required',
            "jam_selesai" => 'required',
            "uraian_kegiatan" => 'required',
            "keterangan" => 'required',
        ]);

        $dataLaporanHarian = [
            "jumlah_rombel" => $request->post('jumlah_rombel'),
            "jumlah_siswa" => $request->post('jumlah_siswa'),
            "tanggal_kegiatan" => $request->post('tanggal_kegiatan'),
            "jam_mulai" => $request->post('jam_mulai'),
            "jam_selesai" => $request->post('jam_selesai'),
            "uraian_kegiatan" => $request->post('uraian_kegiatan'),
            "keterangan" => $request->post('keterangan'),
            "id_data_anggotas" => 1,
            "id_data_sekolah" => 1,
        ];

        Laporan::create($dataLaporanHarian);
        return back()->with('message', 'Laporan Berhasil di Buat');
    }

    public function laporanHarianPerTanggal(Request $request)
    {
        $laporanHarian = Laporan::where('id_data_anggotas', 1)
            ->whereDate('tanggal_kegiatan', $request->get('tgl'))
            ->get();
        // dd($laporanHarian);
        return view('ptk-non-pns.laporan-harian-per-tanggal', compact('laporanHarian'));
    }
}
