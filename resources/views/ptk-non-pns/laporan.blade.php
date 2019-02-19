@extends('layouts.app')

@section('title', 'PTK Non PNS')

@section('sidebar')
@include('ptk-non-pns.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Laporan</h1><br>


<br>
<div class="tile is-ancestor">
    <div class="tile is-parent">
        <article class="tile is-child">
            <p class="subtitle">Jumat,</p>
            <p class="title">20 Februari 2019</p>
            <div class="content">

            </div>

            <a href="http:/ptk-non-pns/laporan-hari">
                <button class="button is-primary is-large">Tambah Laporan</button><br>
            </a>
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
                    <tr>
                        <td>21 Februari 2019</td>
                        <td>Disetujui</td>
                        <td>Hapus, Ubah</td>
                    </tr>
                    <tr>
                        <td>22 Februari 2019</td>
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




@endsection
