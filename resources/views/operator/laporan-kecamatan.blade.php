@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Laporan</h1>

<div class="box">
    <table id="data-table" class="table is-fullwidth">
        <thead>
            <tr>
                <th><abbr title="Position">No.</abbr></th>
                <th><abbr title="Position">Nama Sekolah</abbr></th>
                <th><abbr title="Position">Wilayah</abbr></th>
                <th><abbr title="Position">NPSN</abbr></th>
                <th><abbr title="Position">Status</abbr></th>
                <th><abbr title="Position">Opsi</abbr></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td><a href="/operator/laporan-detail?nama-sekolah=">sdsad</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>



@endsection
