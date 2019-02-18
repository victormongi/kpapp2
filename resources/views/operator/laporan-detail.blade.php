@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Laporan</h1>

<div class="columns">
    <div class="column">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">Nama Anggota</p>
                    </div>
                </div>

                <div class="content">
                </div>
                <button class="button is-primary is-fullwidth">Lihat Laporan</button>
            </div>
        </div>
    </div>
    <div class="column">

    </div>
    <div class="column">

    </div>
    <div class="column">

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
