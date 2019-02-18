@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Laporan</h1>

<div>
    <table class="table is-fullwidth">
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
