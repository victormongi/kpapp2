@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Kepala Sekolah</h1>

<div>
    <table id="data-table" class="table is-fullwidth">
        <thead>
            <tr>
                <th><abbr title="Position">No.</abbr></th>
                <th><abbr title="Position">Nama</abbr></th>
                <th><abbr title="Position">Nama Sekolah</abbr></th>
                <th><abbr title="Position">Alamat</abbr></th>
                <th><abbr title="Position">Nomor HP</abbr></th>
                <th><abbr title="Position">Opsi</abbr></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kepalaSekolah as $key => $s)

            <tr>
                <td>{{++$key}}</td>
                <td> <a href="/operator/data-kepala-sekolah-detail?nama-kepala-sekolah={{$s->nama_kepala_sekolah}}">{{
                        $s->nama_kepala_sekolah }}</a></td>
                <td>{{$s->nama_sekolah}}</td>
                <td>{{$s->alamat}}</td>
                <td>{{$s->nomor_hp}}</td>
                <td>
                    <div class="buttons">
                        <a class="button is-info is-small" href="/operator/data-kepala-sekolah/{{$s->id_data_kepala_sekolah}}/edit">Edit</a>

                        <form action="/operator/data-kepala-sekolah/{{$s->id_data_kepala_sekolah}}" method="post">
                            {{method_field('DELETE')}}
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
