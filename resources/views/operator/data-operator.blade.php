@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Operator</h1>

<form action="/operator/data-anggota" method="POST">
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

<table class="table">
    <thead>
        <tr>
            <th><abbr title="Position">No.</abbr></th>
            <th><abbr title="Position">Nama Operator</abbr></th>
            <th><abbr title="Position">Nama Pengguna</abbr></th>
            <th><abbr title="Position">Opsi</abbr></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>


@endsection
