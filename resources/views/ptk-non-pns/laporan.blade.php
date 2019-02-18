@extends('layouts.app')

@section('title', 'PTK Non PNS')

@section('sidebar')
@include('ptk-non-pns.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Laporan</h1><br>

{{-- FORM INPUT LAPORAN KEGIATAN --}}

<div class="column is-5" v-show="formShow">
    <form action="/ptk-non-pns/laporan" method="POST">
        @csrf

        <div class="field">
            <label class="label" for="jumlah_rombel">Jumlah Rombel</label>
            <div class="control">
                <input class="input" type="text" id="jumlah_rombel" name="jumlah_rombel" value="{{ old('jumlah_rombel') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="jumlah_siswa">Jumlah Siswa</label>
            <div class="control">
                <input class="input" type="text" id="jumlah_siswa" name="jumlah_siswa" value="{{ old('jumlah_siswa') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="tanggal_kegiatan">Tanggal Kegiatan</label>
            <div class="control">
                <input class="input" type="date" id="tanggal_kegiatan" name="tanggal_kegiatan" value="{{ old('tanggal_kegiatan') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="jam_mulai">Jam Mulai</label>
            <div class="control">
                <input class="input" type="text" id="jam_mulai" name="jam_mulai" value="{{ old('jam_mulai') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="jam_selesai">Jam Selesai</label>
            <div class="control">
                <input class="input" type="text" id="jam_selesai" name="jam_selesai" value="{{ old('jam_selesai') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="uraian_kegiatan">Uraian Kegiatan</label>
            <div class="control">
                <textarea class="textarea" id="uraian_kegiatan" name="uraian_kegiatan">
                {{ old('uraian_kegiatan') }}
              </textarea>
            </div>
        </div>


        <div class="field">
            <label class="label" for="keterangan">Keterangan</label>
            <div class="control">
                <input class="input" type="text" id="keterangan" name="keterangan" value="{{ old('keterangan') }}">
            </div>
        </div>

        <br>

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
{{-- END FORM INPUT LAPORAN KEGIATAN --}}

<br>
<div class="tile is-ancestor">
    <div class="tile is-parent">
        <article class="tile is-child">
            <p class="subtitle">Jumat,</p>
            <p class="title">20 Februari</p>
            <div class="content">
                <p>Mo tampilkan Tanggal Hari Ini. <br>
                    Yang Uptodate.
                </p>
            </div>

            <button class="button is-primary is-large" @click="toggleShow">Tambah Laporan</button><br>
        </article>
    </div>

    <div class="tile is-parent is-8">
        <article class="tile is-child box">
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th><abbr title="Position">Tanggal Kegiatan</abbr></th>
                        <th><abbr title="Position">Status</abbr></th>
                        <th><abbr title="Position">Opsi</abbr></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($dataOperator as $operator) --}}
                    <tr>
                        <td>20 Februari 2019</td>
                        <td>Disetujui</td>
                        <td>Hapus, Ubah</td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </article>
    </div>
</div>

<div class="box">
    <p>Buat Select untuk Pilih Tahun Ajaran:</p>
    <p>Buat Select untuk Pilih Semester:</p>
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th><abbr title="Position">Bulan</abbr></th>
                <th><abbr title="Position">Selesai</abbr></th>
                <th><abbr title="Position">Belum <br> Selesai</abbr></th>
                <th><abbr title="Position">Disetujui</abbr></th>
                <th><abbr title="Position">Belum <br> Disetujui</abbr></th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($dataOperator as $operator) --}}
            <tr>
                <td>Januari</td>
                <td>... Hari</td>
                <td>... Hari</td>
                <td>... Hari</td>
                <td>... Hari</td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>

<div class="box">
    <p> <strong>Tanggal Kegiatan: </strong></p>
    <p class="title">20 Februari 2019</p>
    <p> <strong>Status Laporan: </strong></p><br>
    <p>Jumlah Rombongan Belajar:</p>
    <p>Jumlah Siswa:</p><br>
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th><abbr title="Position">Jam Mulai</abbr></th>
                <th><abbr title="Position">Jam Selesai</abbr></th>
                <th><abbr title="Position">Uraian Kegiatan</abbr></th>
                <th><abbr title="Position">Keterangan</abbr></th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($dataOperator as $operator) --}}
            <tr>
                <td>asfs</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>



@endsection