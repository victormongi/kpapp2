@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Operator</h1>

<div class="column is-5">
    <form action="/operator/data-operator/{{$s->id_data_operators}}" method="post">
        @csrf
        @method('PATCH')    
        <div class="field">
            <label class="label" for="nama_operator">Nama Operator</label>
            <div class="control">
                <input class="input" type="text" id="nama_operator" name="nama_operator" value="{{$s->nama_operator}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="nama_pengguna">Nama Penguna</label>
            <div class="control">
                <input class="input" type="text" id="nama_pengguna" name="nama_pengguna" value="{{$s->nama_pengguna}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="kata_sandi">Kata Sandi</label>
            <div class="control">
                <input class="input" type="password" id="kata_sandi" name="kata_sandi" value="{{$s->kata_sandi}}">
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



@endsection
