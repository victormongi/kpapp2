@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Kepala Sekolah Detail</h1>
<table class="table is-fullwidth">
  <tr>
    <td class="kolom-nama">Nama Kepala Sekolah</td>
    <td class="kolom-nama-separator">:</td>
    <td><strong>{{$s->nama_kepala_sekolah}}<strong></td>
  </tr>
  <tr>
    <td class="kolom-nama">Nama Sekolah</td>
    <td class="kolom-nama-separator">:</td>
    <td><strong>{{$s->nama_sekolah}}</strong></td>
  </tr>
  <tr>
    <td class="kolom-nama">Alamat</td>
    <td class="kolom-nama-separator">:</td>
    <td><strong>{{$s->alamat}}</strong></td>
  </tr>
  <tr>
    <td class="kolom-nama">Nomor Hp</td>
    <td class="kolom-nama-separator">:</td>
    <td><strong>{{$s->nomor_hp}}</strong></td>
  </tr>
</table>
</table>

@endsection
