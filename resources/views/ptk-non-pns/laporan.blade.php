@extends('layouts.app')

@section('title', 'PTK Non PNS')

@section('sidebar')
@include('ptk-non-pns.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Laporan</h1><br>


<br>
<div class="tile is-ancestor">
    <div class="tile is-parent">
        <article class="tile is-child">
            <p class="subtitle">Jumat,</p>
            <p class="title">20 Februari 2019</p>
            <div class="content">

            </div>

            <a href="/ptk-non-pns/laporan-harian">
                <button class="button is-primary is-large">Tambah Laporan</button><br>
            </a>
        </article>
    </div>


</div>

<div class="box">
    <div class="table-container">
        <article class="tile is-child">
            <form action="/ptk-non-pns/laporan" method="get">

                <div class="field has-addons">
                    <div class="control is-expanded">
                        <div class="select is-fullwidth">
                            <select name="tahun">
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="control is-expanded">
                        <div class="select is-fullwidth">
                            <select name="bulan">
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                            </select>
                        </div>
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-primary">Sort</button>
                    </div>
                </div>


            </form>


            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th><abbr title="Position">Tanggal Kegiatan</abbr></th>
                        <th><abbr title="Position">Status</abbr></th>
                        <th><abbr title="Position">Opsi</abbr></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporanHarian as $laporan)

                    <tr>
                        <td>{{$laporan->tanggal_kegiatan}}</td>
                        <td>Disetujui</td>
                        <td>
                            <div class="buttons">
                                <a class="button is-info is-small" href="/ptk-non-pns/laporan-harian-per-tanggal?tgl={{$laporan->tanggal_kegiatan}}">Ubah</a>
                            </div>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </article>

    </div>
</div>



    @endsection
