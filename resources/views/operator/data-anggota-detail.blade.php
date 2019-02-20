@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Anggota Detail</h1>
<table class="table is-fullwidth">
    <tr>
        <td class="kolom-nama">Nama</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->nama_anggota}}<strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Tempat Lahir</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->tempat_lahir}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Tanggal Lahir</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->tanggal_lahir}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Jenis Kelamin</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->jenis_kelamin}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Alamat</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->alamat}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Nomor HP</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->nomor_hp}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Pendidikan Terakhir</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->pendidikan_terakhir}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Nama Lembaga</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->lembaga_pendidikan}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">Ijazah</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->ijazah}}</strong></td>
    </tr>
    <tr>
        <td class="kolom-nama">TMT Bekerja</td>
        <td class="kolom-nama-separator">:</td>
        <td><strong>{{$s->tmt_bekerja}}</strong></td>
    </tr>
</table>
</table>
@endsection
