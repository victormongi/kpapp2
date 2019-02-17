@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Operator</h1>

<button class="button is-primary is-large" @click="toggleShow">Tambah Data Anggota</button>

<div class="column is-5" v-show="formShow">
    <form action="/operator/data-operator" method="post">
        @csrf
        <div class="field">
            <label class="label" for="nama_operator">Nama Operator</label>
            <div class="control">
                <input class="input" type="text" id="nama_operator" name="nama_operator" value="{{ old('nama_operator') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="nama_pengguna">Nama Penguna</label>
            <div class="control">
                <input class="input" type="text" id="nama_pengguna" name="nama_pengguna" value="{{ old('nama_pengguna') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="kata_sandi">Kata Sandi</label>
            <div class="control">
                <input class="input" type="text" id="kata_sandi" name="kata_sandi" value="{{ old('kata_sandi') }}">
            </div>
        </div>

        <br>

        <div class="field is-grouped">
            <p class="control">
                <input class="button is-link" type="submit" value="Submit">
            </p>
            <p class="control">
                <a class="button is-light">
                    Cancel
                </a>
            </p>
        </div>

    </form>
</div>

<br><br>

<table class="table is-fullwidth">
    <thead>
        <tr>
            <th><abbr title="Position">No.</abbr></th>
            <th><abbr title="Position">Nama Operator</abbr></th>
            <th><abbr title="Position">Nama Pengguna</abbr></th>
            <th><abbr title="Position">Opsi</abbr></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataOperator as $operator)
            <tr>
                <td></td>
                <td>{{$operator->nama_operator}}</td>
                <td>{{$operator->nama_pengguna}}</td>
                <td>


                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
