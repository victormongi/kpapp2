@extends('layouts.app')

@section('title', 'Kepala Sekolah')

@section('sidebar')
@include('kepala-sekolah.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Laporan</h1>

<div class="box">
    <table id="data-table" class="table is-fullwidth">
        <thead>
            <tr>
                <th><abbr title="Position">No.</abbr></th>
                <th><abbr title="Position">Anggota</abbr></th>
                <th><abbr title="Position">Opsi</abbr></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataAnggota as $key=> $anggota)
            <tr>
                <td>{{++$key}}</td>
                <td> <a href="/operator/data-anggota-detail?nama-anggota=">{{$anggota->nama_anggota}}</a></td>
                <td>
                    <div class="buttons">
                        <a class="button is-info is-small" href="/kepala-sekolah/detail-laporan?id_anggota={{$anggota->id_data_anggotas}}">Lihat
                            Laporan</a>
                    </div>
                </td>
            </tr>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection
