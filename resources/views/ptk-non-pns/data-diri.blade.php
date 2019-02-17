@extends('layouts.app')

@section('title', 'PTK Non PNS')

@section('sidebar')
@include('ptk-non-pns.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Diri</h1>

<div>
    <div class="field">
        <label class="label" for="nama_anggota">Nama</label>
        <div class="control">
            <input class="input" type="text" id="nama_anggota" name="nama_anggota" value="{{ old('nama_anggota') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="nama_sekolah">Unit Kerja </label>
        <div class="select">
            <select id="nama_sekolah" name="nama_sekolah" value="{{ old('nama_sekolah') }}">
                <option>Pilih Unit Kerja</option>
                <option value=""></option>
            </select>
        </div>
    </div>

    <div class="field">
        <label class="label" for="tempat_lahir">Tempat Lahir</label>
        <div class="control">
            <input class="input" type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="tanggal_lahir">Tanggal Lahir</label>
        <div class="control">
            <input class="input" type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="jenis_kelamin">Jenis Kelamin</label>
        <label class="radio">
            <input type="radio" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
            Laki-Laki
        </label>
        <label class="radio">
            <input type="radio" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
            Perempuan
        </label>
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

    <hr>

    <div class="field">
        <label class="label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
        <div class="select">
            <select id="pendidikan_terakhir" name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}">
                <option>Pilih Jenjang Pendidikan</option>
                <option value="tk">TK</option>
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA</option>
                <option value="s1">S1</option>
                <option value="s2">S2</option>
                <option value="s3">S3</option>
            </select>
        </div>
    </div>

    <div class="field">
        <label class="label" for="lembaga_pendidikan">Nama Lembaga Pendidikan</label>
        <div class="control">
            <input class="input" type="text" id="lembaga_pendidikan" name="lembaga_pendidikan" value="{{ old('lembaga_pendidikan') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="ijazah">Ijazah</label>
        <label class="radio">
            <input type="radio" name="ijazah" value="{{ old('ijazah') }}">
            Ada
        </label>
        <label class="radio">
            <input type="radio" name="ijazah" value="{{ old('ijazah') }}">
            Tidak
        </label>
    </div>

    <div class="field">
        <label class="label" for="tmt_bekerja">Tanggal Mulai Tugas <br> (TMT Bekerja)</label>
        <div class="control">
            <input class="input" type="date" id="tmt_bekerja" name="tmt_bekerja" value="{{ old('tmt_bekerja') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="mata_pelajaran">Mata Pelajaran yang Diampuh</label>
        <div class="control">
            <input class="input" type="text" id="mata_pelajaran" name="mata_pelajaran" value="{{ old('mata_pelajaran') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="jumlah_jam_pelajaran">Jumlah Jam Pelajaran</label>
        <div class="control">
            <input class="input" type="text" id="jumlah_jam_pelajaran" name="jumlah_jam_pelajaran" value="{{ old('jumlah_jam_pelajaran') }}">
        </div>
    </div>

</div>


@endsection
