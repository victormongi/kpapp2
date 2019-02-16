<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<div class="container is-fullhd">
  <section class="hero is-warning">
      <div class="hero-body">
          <div class="container">
            <div class="columns">
              <div class="column is-one-fifth">
                  <img src="{{asset('images/logo-dikbud.PNG')}}" alt="" class="logo-image is-pulled-right">
              </div>
              <div class="column">

                <h1 class="title">
                    APLIKASI <i>ONLINE</i> PENDATAAN DAN PELAPORAN <br>
                    KEGIATAN PENDIDIK DAN TENAGA KEPENDIDIKAN <br>
                    NON PEGAWAI NEGERI SIPIL
                </h1>
                <h2 class="subtitle">
                    DINAS PENDIDIKAN DAN KEBUDAYAAN DAERAH KOTA TOMOHON
                </h2>
              </div>
            </div>
          </div>
      </div>
  </section>
</div>


<div class="container is-fullhd">
  <div class="columns">

    <div class="sidebar column is-2">
      @yield('sidebar')
    </div>

    <div class="column is-10 main-content mt-4">
      @yield('content')
    </div>

  </div>
</div>

</body>
</html>