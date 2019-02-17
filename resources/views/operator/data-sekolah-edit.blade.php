@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Sekolah</h1>

    <div class="column is-5">
        <form action="/operator/data-sekolah/{{$s->id_data_sekolah}}" method="post">
            @csrf
            @method('PATCH')
            <div class="field">
                <label class="label" for="nama_sekolah">Nama Sekolah</label>
                <div class="control">
                    <input class="input" type="text" id="nama_sekolah" name="nama_sekolah" value="{{$s->nama_sekolah}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="akreditasi">Akreditasi</label>
                <div class="control">
                    <input class="input" type="text" id="akreditasi" name="akreditasi" value="{{$s->akreditasi}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="kurikulum">Kurikulum</label>
                <div class="control">
                    <input class="input" type="text" id="kurikulum" name="kurikulum" value="{{$s->kurikulum}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="alamat">Alamat</label>
                <div class="control">
                    <input class="input" type="text" id="alamat" name="alamat" value="{{$s->alamat}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="wilayah">Wilayah</label>
                <div class="select">
                    <select id="wilayah" name="wilayah" value="{{ old('wilayah') }}">
                        <option>Pilih Wilayah</option>
                        <option value="Tomohon Utara">Kec. Tomohon Utara</option>
                        <option value="Tomohon Selatan">Kec. Tomohon Selatan</option>
                        <option value="Tomohon Tengah">Kec. Tomohon Tengah</option>
                        <option value="Tomohon Barat">Kec. Tomohon Barat</option>
                        <option value="Tomohon Timur">Kec. Tomohon Timur</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label class="label" for="npsn">NPSN</label>
                <div class="control">
                    <input class="input" type="text" id="npsn" name="npsn" value="{{$s->npsn}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="bentuk_sekolah">Bentuk Sekolah</label>
                <div class="select">
                    <select id="bentuk_sekolah" name="bentuk_sekolah" value="{{ old('bentuk_sekolah') }}">
                        <option>Pilih Bentuk Sekolah</option>
                        <option value="negeri">Negeri</option>
                        <option value="swasta">Swasta</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label class="label" for="bentuk_pendidikan">Bentuk Pendidikan</label>
                <div class="select">
                    <select id="bentuk_pendidikan" name="bentuk_pendidikan" value="{{$s->bentuk_pendidikan}}">
                        <option>Pilih Bentuk Pendidikan</option>
                        <option value="TK/PAUD">TK/PAUD</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label class="label" for="status_kepemilikan">Status Kepemilikan</label>
                <div class="control">
                    <input class="input" type="text" id="status_kepemilikan" name="status_kepemilikan" value="{{$s->status_kepemilikan}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="sk_pendirian_sekolah">SK Pendirian Sekolah</label>
                <div class="control">
                    <input class="input" type="text" id="sk_pendirian_sekolah" name="sk_pendirian_sekolah" value="{{$s->sk_pendirian_sekolah}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="tanggal_sk_pendirian">Tanggal SK Pendirian</label>
                <div class="control">
                    <input class="input" type="date" id="tanggal_sk_pendirian" name="tanggal_sk_pendirian" value="{{$s->tanggal_sk_pendirian}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="sk_izin_operasional">SK Izin Operasional</label>
                <div class="control">
                    <input class="input" type="text" id="sk_izin_operasional" name="sk_izin_operasional" value="{{$s->sk_izin_operasional}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="tanggal_sk_izin_operasional">Tanggal SK Izin Operasional</label>
                <div class="control">
                    <input class="input" type="date" id="tanggal_sk_izin_operasional" name="tanggal_sk_izin_operasional"
                        value="{{$s->tanggal_sk_izin_operasional}}">
                </div>
            </div>

            <div class="field is-grouped">
                <p class="control">
                    <input class="button is-link" type="submit" value="Submit">
                </p>
            </div>


        </form>
    </div>


@endsection
