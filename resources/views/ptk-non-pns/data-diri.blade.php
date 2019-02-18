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
        <td><strong>{{$s->nama_sekolah}}<strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Akreditasi</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->akreditasi}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Kurikulum</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->kurikulum}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Alamat</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->alamat}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Wilayah</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->wilayah}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">NPSN</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->npsn}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Bentuk Sekolah</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->bentuk_sekolah}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Bentuk Pendidikan</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->bentuk_pendidikan}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Status Kepemilikan</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->status_kepemilikan}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">SK Pendirian Sekolah</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->sk_pendirian_sekolah}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Tanggal SK Pendirian</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->tanggal_sk_pendirian}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">SK Izin Operasional</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->sk_izin_operasional}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Tanggal Izin Operasional</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->tanggal_sk_izin_operasional}}</strong></td>
    </tr>
</table>


@endsection
