@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Laporan</h1>

<div class="box">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th><abbr title="Position">No.</abbr></th>
                <th><abbr title="Position">Wilayah</abbr></th>
                <th><abbr title="Position">Jumlah</abbr></th>
                <th><abbr title="Position">TK/PAUD</abbr></th>
                <th><abbr title="Position">SD</abbr></th>
                <th><abbr title="Position">SMP</abbr></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><a href="/operator/laporan-kecamatan?kec=Tomohon%20Utara">Kec. Tomohon Utara</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="/operator/laporan-kecamatan?kec=Tomohon%20Selatan">Kec. Tomohon Selatan</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="/operator/laporan-kecamatan?kec=Tomohon%20Tengah">Kec. Tomohon Tengah</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="/operator/laporan-kecamatan?kec=Tomohon%20Barat">Kec. Tomohon Barat</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="/operator/laporan-kecamatan?kec=Tomohon%20Timur">Kec. Tomohon Timur</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <th>Total</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>



@endsection
