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

Route::get('kepala-sekolah', 'KepalaSekolahController@index');

Route::get('kepala-sekolah/data-diri', 'KepalaSekolahController@dataDiri');

Route::get('kepala-sekolah/laporan', 'KepalaSekolahController@lihatSemuaPtk');
Route::get('kepala-sekolah/detail-laporan', 'KepalaSekolahController@detailLaporan');

Route::get('kepala-sekolah/laporan-validasi', function () {
    return view('kepala-sekolah.laporan-validasi');
});

// PTK NON PNS

Route::get('ptk-non-pns', 'PtkNonPnsController@index');
Route::get('ptk-non-pns/data-diri', 'PtkNonPnsController@dataDiri');
Route::get('ptk-non-pns/laporan', 'PtkNonPnsController@laporan');
Route::get('ptk-non-pns/laporan-harian', 'PtkNonPnsController@laporanHarian');
Route::post('ptk-non-pns/buat-laporan-harian', 'PtkNonPnsController@buatLaporanHarian');
Route::get('ptk-non-pns/laporan-harian-per-tanggal', 'PtkNonPnsController@laporanHarianPerTanggal');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login-kepala-sekolah', 'Auth\KepalaSekolahLoginController@showLoginForm')->name('kepalaSekolah.login');
Route::get('/logout-kepala-sekolah', 'Auth\KepalaSekolahLoginController@logout')->name('kepalaSekolah.logout');
Route::post('/login-kepala-sekolah', 'Auth\KepalaSekolahLoginController@login')->name('kepalaSekolah.login.submit');
