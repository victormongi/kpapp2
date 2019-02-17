@extends('layouts.app')

@section('title', 'Kepala Sekolah')

@section('sidebar')
@include('kepala-sekolah.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Data Diri</h1>

<div>
    <div class="field">
        <label class="label" for="nama_kepala_sekolah">Nama</label>
        <div class="control">
            <input class="input" type="text" id="nama_kepala_sekolah" name="nama_kepala_sekolah" value="{{ old('nama_kepala_sekolah') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="alamat">Alamat</label>
        <div class="control">
            <input class="input" type="text" id="alamat" name="alamat" value="{{ old('alamat') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="nomor_hp">Nomor HP</label>
        <div class="control">
            <input class="input" type="text" id="nomor_hp" name="nomor_hp" value="{{ old('nomor_hp') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="nama_sekolah">Nama Sekolah</label>
        <div class="select">
            <select id="nama_sekolah" name="nama_sekolah" value="{{ old('nama_sekolah') }}">
                <option>Pilih Bentuk Pendidikan</option>
                <option value="tk-paud">TK/PAUD</option>
            </select>
        </div>
    </div>

</div>

@endsection
