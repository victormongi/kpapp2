@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Kepala Sekolah</h1>

<div>
<table id="data-table" class="table is-fullwidth">
    <thead>
        <tr>
            <th><abbr title="Position">No.</abbr></th>
            <th><abbr title="Position">Nama</abbr></th>
            <th><abbr title="Position">Nama Sekolah</abbr></th>
            <th><abbr title="Position">Alamat</abbr></th>
            <th><abbr title="Position">Nomor HP</abbr></th>
            <th><abbr title="Position">Opsi</abbr></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td> <a href="/operator/data-kepala-sekolah-detail">Nama Sekolah</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>


@endsection
