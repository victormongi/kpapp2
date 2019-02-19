@extends('layouts.app')

@section('title', 'PTK Non PNS')

@section('sidebar')
@include('ptk-non-pns.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Diri</h1>

<table class="table is-fullwidth">
    <tr>
        <td class="kolom-nama">Nama</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->nama_anggota}}<strong></td>
    </tr>
</table>


@endsection
