@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Laporan</h1>

<div>
    <table id="data-table" class="table is-fullwidth">
        <thead>
            <tr>
                <th><abbr title="Position">No.</abbr></th>
                <th><abbr title="Position">Nama Sekolah</abbr></th>
                <th><abbr title="Position">Anggota</abbr></th>
                <th><abbr title="Position">Opsi</abbr></th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td></td>
                <td></td>
                <td> <a href="/ptk-non-pns/laporan-detail?nama-anggota=">Revan Umbas</a></td>
                <td>
                    <div class="buttons">
                        <a class="button is-info is-small" href="/operator/laporan//edit">Ubah</a>
                        <form action="/operator/laporan/" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="button is-danger is-small" value="Hapus" />
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
