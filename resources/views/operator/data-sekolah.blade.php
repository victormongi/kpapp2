@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Sekolah</h1>


<form action="">
    <div class="field">
        <label class="label" for="nama_sekolah">Nama Sekolah</label>
        <div class="control">
            <input class="input" type="text" id="nama_sekolah" name="nama_sekolah">
        </div>
    </div>

    <div class="field">
        <label class="label" for="akreditasi">Akreditasi</label>
        <div class="control">
            <input class="input" type="text" id="akreditasi" name="akreditasi">
        </div>
    </div>

    <div class="field">
        <label class="label" for="kurikulum">Kurikulum</label>
        <div class="control">
            <input class="input" type="text" id="kurikulum" name="kurikulum">
        </div>
    </div>

    <div class="field">
        <label class="label" for="alamat">Alamat</label>
        <div class="control">
            <input class="input" type="text" id="alamat" name="alamat">
        </div>
    </div>

    <div class="field">
        <label class="label" for="wilayah">Wilayah</label>
        <div class="select">
            <select id="wilayah" name="wilayah">
                <option>Pilih Wilayah</option>
                <option>Kec. Tomohon Utara</option>
                <option>Kec. Tomohon Selatan</option>
                <option>Kec. Tomohon Tengah</option>
                <option>Kec. Tomohon Barat</option>
                <option>Kec. Tomohon Timur</option>
            </select>
        </div>
    </div>

    <div class="field">
        <label class="label" for="npsn">NPSN</label>
        <div class="control">
            <input class="input" type="text" id="npsn" name="npsn">
        </div>
    </div>

    <div class="field">
        <label class="label" for="bentuk_sekolah">Bentuk Sekolah</label>
        <div class="select">
            <select id="bentuk_sekolah" name="bentuk_sekolah">
                <option>Pilih Bentuk Sekolah</option>
                <option>Negeri</option>
                <option>Swasta</option>
            </select>
        </div>
    </div>

    <div class="field">
        <label class="label" for="bentuk_pendidikan">Bentuk Pendidikan</label>
        <div class="select">
            <select id="bentuk_pendidikan" name="bentuk_pendidikan">
                <option>Pilih Bentuk Pendidikan</option>
                <option>TK/PAUD</option>
                <option>SD</option>
                <option>SMP</option>
            </select>
        </div>
    </div>

    <div class="field">
        <label class="label" for="status_kepemilikan">Status Kepemilikan</label>
        <div class="control">
            <input class="input" type="text" id="status_kepemilikan" name="status_kepemilikan">
        </div>
    </div>

    <div class="field">
        <label class="label" for="sk_pendirian_sekolah">SK Pendirian Sekolah</label>
        <div class="control">
            <input class="input" type="text" id="sk_pendirian_sekolah" name="sk_pendirian_sekolah">
        </div>
    </div>

    <div class="field">
        <label class="label" for="tanggal_sk_pendirian">Tanggal SK Pendirian</label>
        <div class="control">
            <input class="input" type="date" id="tanggal_sk_pendirian" name="tanggal_sk_pendirian">
        </div>
    </div>

    <div class="field">
        <label class="label" for="sk_izin_operasional">SK Izin Operasional</label>
        <div class="control">
            <input class="input" type="text" id="sk_izin_operasional" name="sk_izin_operasional">
        </div>
    </div>

    <div class="field">
        <label class="label" for="tanggal_sk_izin_operasional">Tanggal SK Izin Operasional</label>
        <div class="control">
            <input class="input" type="date" id="tanggal_sk_izin_operasional" name="tanggal_sk_izin_operasional">
        </div>
    </div>

    <div class="field is-grouped">
        <p class="control">
            <a class="button is-link">
                Submit
            </a>
        </p>
        <p class="control">
            <a class="button is-light">
                Cancel
            </a>
        </p>
    </div>


</form>



@endsection
