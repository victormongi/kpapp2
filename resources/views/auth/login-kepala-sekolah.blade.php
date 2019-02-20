@extends('layouts.app-login')

@section('content')

<section class="hero is-full">

    <div class="has-text-centered">
        <div class="column is-4 is-offset-4">
            <h3 class="title has-text-grey">Halaman Masuk</h3>

            <nav class="breadcrumb is-centered" aria-label="breadcrumbs">
                <ul>
                    <li><a href="#">Operator</a></li>
                    <li><a href="#">PTK Non PNS</a></li>
                    <li class="is-active"><a href="#" aria-current="page">Kepala Sekolah</a></li>
                </ul>
            </nav>

            <div class="box">
                @if ($errors->any())
                <div class="notification is-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('kepalaSekolah.login.submit') }}">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <input class="input is-large" type="text" name="email" placeholder="Nama Pengguna" autofocus="">
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <input name="password" class="input is-large" type="password" placeholder="Kata Sandi">
                        </div>
                    </div>

                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox">
                            Ingat saya
                        </label>
                    </div>
                    <button type="submit" class="button is-block is-info is-large is-fullwidth">Masuk</button>
                </form>
            </div>
            {{-- <p class="has-text-grey">
                <a href="../">Lupa Password</a> &nbsp;·&nbsp;
            </p> --}}
        </div>
    </div>

</section>






@endsection
