@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Laporan</h1>

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

<br>
<div class="box">
    <p> <strong>Tanggal Kegiatan: </strong></p>
    <p class="title">20 Februari 2019</p>

    <table>
        <tr>
            <td>Nama Anggota</td>
            <td> :</td>
            <td></td>
        </tr>
        <tr>
            <td>Nama Sekolah</td>
            <td> :</td>
            <td></td>
        </tr>
        <tr>
            <td>Jumlah Rombel</td>
            <td> :</td>
            <td></td>
        </tr>
        <tr>
            <td>Jumlah Siswa</td>
            <td> :</td>
            <td></td>
        </tr>
    </table><br>

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
