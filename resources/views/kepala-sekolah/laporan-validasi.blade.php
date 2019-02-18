@extends('layouts.app')

@section('title', 'Kepala Sekolah')

@section('sidebar')
@include('kepala-sekolah.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Laporan</h1>
<p class="title">Nama Anggota: </p>

<div class="columns">
    <div class="column">
        <table class="table is-fullwidth box">
            <thead>
                <tr>
                    <th><abbr title="Position">Bulan</abbr></th>
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
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
    <div class="column">
        <table class="table is-fullwidth box">
            <thead>
                <tr>
                    <th><abbr title="Position">Tanggal Kegiatan</abbr></th>
                    <th><abbr title="Position">Status</abbr></th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($dataOperator as $operator) --}}
                <tr>
                    <td>20 Februari 2019</td>
                    <td>Disetujui</td>
                </tr>
                <tr>
                    <td>21 Februari 2019</td>
                    <td>Disetujui</td>
                </tr>
                <tr>
                    <td>22 Februari 2019</td>
                    <td>Disetujui</td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</div>

<div class="box">
    <p> <strong>Tanggal Kegiatan: </strong></p>
    <p class="title">20 Februari 2019</p>
    <p> <strong>Nama Anggota: </strong></p><br>
    <p>Jumlah Rombongan Belajar:</p>
    <p>Jumlah Siswa:</p><br>
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th><abbr title="Position">No.</abbr></th>
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

    <div class="field is-grouped">
            <p class="control">
                <a class="button is-link">
                    Setujui
                </a>
            </p>
        </div>
</div>

@endsection
