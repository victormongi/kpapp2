@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Sekolah</h1>

<div>
<table id="data-table" class="table is-fullwidth">
    <thead>
        <tr>
            <th><abbr title="Position">No.</abbr></th>
            <th><abbr title="Position">Nama Sekolah</abbr></th>
            <th><abbr title="Position">Wilayah</abbr></th>
            <th><abbr title="Position">NPSN</abbr></th>
            <th><abbr title="Position">Bentuk Pendidikan</abbr></th>
            <th><abbr title="Position">Status</abbr></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataSekolah as $sekolah)
            <tr>
                <td>{{ $sekolah->id }}</td>
                <td> <a href="/operator/data-sekolah-detail?nama-sekolah={{$sekolah->nama_sekolah}}">{{ $sekolah->nama_sekolah }}</a></td>
                <td>{{$sekolah->wilayah}}</td>
                <td>{{$sekolah->npsn}}</td>
                <td>{{$sekolah->bentuk_pendidikan}}</td>
                <td>{{$sekolah->bentuk_sekolah}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>


@endsection
