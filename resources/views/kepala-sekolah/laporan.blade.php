@extends('layouts.app')

@section('title', 'Kepala Sekolah')

@section('sidebar')
@include('kepala-sekolah.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Laporan</h1>

<div class="columns">
    <div class="column">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">Nama Anggota</p>
                    </div>
                </div>

                <div class="content">
                </div>
                <button class="button is-primary is-fullwidth">Lihat Laporan</button>
            </div>
        </div>
    </div>
    <div class="column">
    
    </div>
    <div class="column">
    
    </div>
    <div class="column">
    
    </div>
</div>



@endsection
