@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Anggota Kecamatan</h1>

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
            @foreach ($dataAnggota as $key=> $anggota)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{$anggota->nama_sekolah}}</td>
                <td> <a href="/operator/data-anggota-detail?nama-anggota={{$anggota->nama_anggota}}">{{
                        $anggota->nama_anggota }}</a></td>
                <td>


                    <div class="buttons">
                        <a class="button is-info is-small" href="/operator/data-anggota/{{$anggota->id_data_anggotas}}/edit">Edit</a>
                        <form action="/operator/data-anggota/{{$anggota->id_data_anggotas}}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="button is-danger is-small" value="Hapus" />
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
