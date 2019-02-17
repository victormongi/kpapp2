@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Anggota Kecamatan</h1>

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
        <tr>
            <td></td>
            <td> <a href="/operator/data-anggota-detail">Nama Sekolah</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>


@endsection
