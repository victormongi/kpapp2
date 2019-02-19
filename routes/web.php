<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('home');
});

// OPERATOR

Route::get('operator', function () {
    return view('operator.index');
});

Route::resource('operator/data-sekolah', 'DataSekolahController');

Route::get('operator/data-sekolah-kecamatan', 'DataSekolahController@getDataSekolahByKecamatan');

Route::get('operator/data-sekolah-detail', 'DataSekolahController@getDetailSekolahByNamaSekolah');

Route::resource('operator/data-kepala-sekolah', 'DataKepalaSekolahController');

Route::get('operator/data-kepala-sekolah-kecamatan', 'DataKepalaSekolahController@getKepalaSekolahByKecamatan');

Route::get('operator/data-kepala-sekolah-detail', 'DataKepalaSekolahController@getDetailKepalaSekolahByNamaKepalaSekolah');

Route::resource('operator/data-anggota', 'DataAnggotaController');

Route::get('operator/data-anggota-kecamatan', 'DataAnggotaController@getDataAnggotaByKecamatan');

Route::get('operator/data-anggota-detail', 'DataAnggotaController@getDetailAnggotaByNamaAnggota');

Route::resource('operator/data-operator', 'DataOperatorController');

Route::get('operator/laporan', function () {
    return view('operator.laporan');
});

Route::get('operator/laporan-kecamatan', function () {
    return view('operator.laporan-kecamatan');
});

Route::get('operator/laporan-detail', function () {
    return view('operator.laporan-detail');
});

Route::get('operator/laporan-detail-anggota', function () {
    return view('operator.laporan-detail-anggota');
});

// KEPALA SEKOLAH

Route::get('kepala-sekolah', function () {
    return view('kepala-sekolah.index');
});

Route::get('kepala-sekolah/data-diri', function () {
    return view('kepala-sekolah.data-diri');
});

Route::get('kepala-sekolah/laporan', function () {
    return view('kepala-sekolah.laporan');
});

Route::get('kepala-sekolah/laporan-validasi', function () {
    return view('kepala-sekolah.laporan-validasi');
});

// PTK NON PNS

Route::get('ptk-non-pns', function () {
    return view('ptk-non-pns.index');
});

Route::get('ptk-non-pns/data-diri', function () {
    return view('ptk-non-pns.data-diri');
});

Route::get('ptk-non-pns/laporan', function () {
    return view('ptk-non-pns.laporan');
});
