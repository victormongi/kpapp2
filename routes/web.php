<?php

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

Route::get('operator/data-sekolah', function () {
    return view('operator.data-sekolah');
});

Route::get('operator/data-kepala-sekolah', function () {
    return view('operator.data-kepala-sekolah');
});

Route::get('operator/data-anggota', function () {
    return view('operator.data-anggota');
});

Route::get('operator/data-operator', function () {
    return view('operator.data-operator');
});

Route::get('operator/laporan', function () {
    return view('operator.laporan');
});

// KEPALA SEKOLAH

Route::get('kepala-sekolah', function () {
    return view('kepala-sekolah.index');
});

// PTK NON PNS

Route::get('ptk-non-pns', function () {
    return view('ptk-non-pns.index');
});
