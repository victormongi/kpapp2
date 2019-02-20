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
                    <th><abbr title="Position">Jam Mulai</abbr></th>
                    <th><abbr title="Position">Jam Selesai</abbr></th>
                    <th><abbr title="Position">Uraian Kegiatan</abbr></th>
                    <th><abbr title="Position">Keterangan</abbr></th>
                    <th><abbr title="Position">Opsi</abbr></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporanHarian as $laporan)

                <tr>
                    <td>{{$laporan->jam_mulai}}</td>
                    <td>{{$laporan->jam_selesai}}</td>
                    <td>{{$laporan->uraian_kegiatan}}</td>
                    <td>{{$laporan->keterangan}}</td>
                    <td>
                        <div class="buttons">
                            <input type="submit" class="button is-success is-small" value="Verifikasi" />
                        </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
    </table>
</div>



@endsection
