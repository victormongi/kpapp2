@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Sekolah</h1>

@if ($errors->any())
<div class="notification is-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<button class="button is-primary is-large" @click="toggleShow">Tambah Data Sekolah</button>

<template v-show="formShow">
    <div class="column is-5">
        <form action="/operator/data-sekolah" method="POST">
            @csrf
            <div class="field">
                <label class="label" for="nama_sekolah">Nama Sekolah</label>
                <div class="control">
                    <input class="input" type="text" id="nama_sekolah" name="nama_sekolah" value="{{ old('nama_sekolah') }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="akreditasi">Akreditasi</label>
                <div class="control">
                    <input class="input" type="text" id="akreditasi" name="akreditasi" value="{{ old('akreditasi') }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="kurikulum">Kurikulum</label>
                <div class="control">
                    <input class="input" type="text" id="kurikulum" name="kurikulum" value="{{ old('kurikulum') }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="alamat">Alamat</label>
                <div class="control">
                    <input class="input" type="text" id="alamat" name="alamat" value="{{ old('alamat') }}">
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
                    <input class="input" type="text" id="npsn" name="npsn" value="{{ old('npsn') }}">
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
                    <select id="bentuk_pendidikan" name="bentuk_pendidikan" value="{{ old('bentuk_pendidikan') }}">
                        <option>Pilih Bentuk Pendidikan</option>
                        <option value="tk-paud">TK/PAUD</option>
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label class="label" for="status_kepemilikan">Status Kepemilikan</label>
                <div class="control">
                    <input class="input" type="text" id="status_kepemilikan" name="status_kepemilikan" value="{{ old('status_kepemilikan') }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="sk_pendirian_sekolah">SK Pendirian Sekolah</label>
                <div class="control">
                    <input class="input" type="text" id="sk_pendirian_sekolah" name="sk_pendirian_sekolah" value="{{ old('sk_pendirian_sekolah') }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="tanggal_sk_pendirian">Tanggal SK Pendirian</label>
                <div class="control">
                    <input class="input" type="date" id="tanggal_sk_pendirian" name="tanggal_sk_pendirian" value="{{ old('tanggal_sk_pendirian') }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="sk_izin_operasional">SK Izin Operasional</label>
                <div class="control">
                    <input class="input" type="text" id="sk_izin_operasional" name="sk_izin_operasional" value="{{ old('sk_izin_operasional') }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="tanggal_sk_izin_operasional">Tanggal SK Izin Operasional</label>
                <div class="control">
                    <input class="input" type="date" id="tanggal_sk_izin_operasional" name="tanggal_sk_izin_operasional"
                        value="{{ old('tanggal_sk_izin_operasional') }}">
                </div>
            </div>

            <div class="field is-grouped">
                <p class="control">
                    <input class="button is-link" type="submit" value="Submit">
                </p>
                <p class="control">
                    <a class="button is-light">
                        Cancel
                    </a>
                </p>
            </div>


        </form>
    </div>
</template>

<br><br>

<div>
    <table id="data-table" class="table is-fullwidth">
        <thead>
            <tr>
                <th><abbr title="Position">No.</abbr></th>
                <th><abbr title="Position">Wilayah</abbr></th>
                <th><abbr title="Position">Jumlah</abbr></th>
                <th><abbr title="Position">TK/PAUD</abbr></th>
                <th><abbr title="Position">SD</abbr></th>
                <th><abbr title="Position">SMP</abbr></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Kec. Tomohon Utara</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Kec. Tomohon Selatan</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Kec. Tomohon Tengah</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Kec. Tomohon Barat</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Kec. Tomohon Selatan</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <th>Total</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
