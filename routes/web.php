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

Route::get('operator', function () {
    return view('operator.index');
});

Route::get('kepala-sekolah', function () {
    return view('kepala_sekolah.index');
});

Route::get('ptk-non-pns', function () {
    return view('ptk_nonpns.index');
});
