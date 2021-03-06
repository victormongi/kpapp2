@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Anggota</h1>

<div class="column is-5">
    <form action="/operator/data-anggota/{{$s->id_data_anggotas}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="field">
            <label class="label" for="nama_anggota">Nama</label>
            <div class="control">
                <input class="input" type="text" id="nama_anggota" name="nama_anggota" value="{{$s->nama_anggota}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="tempat_lahir">Tempat Lahir</label>
            <div class="control">
                <input class="input" type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $s->tempat_lahir }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="tanggal_lahir">Tanggal Lahir</label>
            <div class="control">
                <input class="input" type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $s->tanggal_lahir }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="jenis_kelamin">Jenis Kelamin</label>
            <label class="radio">
                <input type="radio" name="jenis_kelamin" value="laki-laki">
                Laki-Laki
            </label>
            <label class="radio">
                <input type="radio" name="jenis_kelamin" value="perempuan">
                Perempuan
            </label>
        </div>

        <div class="field">
            <label class="label" for="alamat">Alamat</label>
            <div class="control">
                <input class="input" type="text" id="alamat" name="alamat" value="{{ $s->alamat }}">
            </div>
        </div>


        <div class="field">
            <label class="label" for="nomor_hp">Nomor HP</label>
            <div class="control">
                <input class="input" type="text" id="nomor_hp" name="nomor_hp" value="{{ $s->nomor_hp }}">
            </div>
        </div>

        <hr>

        <div class="field">
            <label class="label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <div class="select">
                <select id="pendidikan_terakhir" name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}">
                    <option>Pilih Jenjang Pendidikan</option>
                    <option value="tk">TK</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="sma">SMA</option>
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label" for="lembaga_pendidikan">Nama Lembaga Pendidikan</label>
            <div class="control">
                <input class="input" type="text" id="lembaga_pendidikan" name="lembaga_pendidikan" value="{{ $s->lembaga_pendidikan }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="ijazah">Ijazah</label>
            <label class="radio">
                <input type="radio" name="ijazah" value="ada">
                Ada
            </label>
            <label class="radio">
                <input type="radio" name="ijazah" value="tidak">
                Tidak
            </label>
        </div>

        <div class="field">
            <label class="label" for="tmt_bekerja">Tanggal Mulai Tugas <br> (TMT Bekerja)</label>
            <div class="control">
                <input class="input" type="date" id="tmt_bekerja" name="tmt_bekerja" value="{{ $s->tmt_bekerja }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="mata_pelajaran">Mata Pelajaran yang Diampuh</label>
            <div class="control">
                <input class="input" type="text" id="mata_pelajaran" name="mata_pelajaran" value="{{ $s->mata_pelajaran }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="jumlah_jam_pelajaran">Jumlah Jam Pelajaran</label>
            <div class="control">
                <input class="input" type="text" id="jumlah_jam_pelajaran" name="jumlah_jam_pelajaran" value="{{ $s->jumlah_jam_pelajaran }}">
            </div>
        </div>


        <hr>

        <div class="field">
            <label class="label" for="wilayah">Wilayah</label>
            <div class="select">
                <select id="wilayah" name="wilayah" value="{{ old('wilayah') }}">
                    <option>Pilih Wilayah</option>
                    <option value="Tomohon Utara">Kec. Tomohon Utara</option>
                    <option value="Tomohon Selatan">Kec. Tomohon Selatan</option>
                    <option value="Tomohon Tengah">Kec. Tomohon Tengah</option>
                    <option value="Tomohon Barat">Kec. Tomohon Barat</option>
                    <option value="Tomohon Timur">Kec. Tomohon Timur</option>
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label" for="bentuk_pendidikan">Bentuk Pendidikan</label>
            <div class="select">
                <select id="bentuk_pendidikan" name="bentuk_pendidikan" value="{{ old('bentuk_pendidikan') }}">
                    <option>Pilih Bentuk Pendidikan</option>
                    <option value="TK/PAUD">TK/PAUD</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label" for="nama_sekolah">Unit Kerja</label>
            <div class="select">
                <select id="nama_sekolah" name="nama_sekolah" value="{{ old('nama_sekolah') }}">
                    <option>Pilih Unit Kerja</option>
                    @foreach ($dataSekolah as $sekolah)
                    <option value="{{ $sekolah->nama_sekolah }}">{{ $sekolah->nama_sekolah }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label" for="nama_pengguna">Nama Penguna/ <br> <i>Username</i> </label>
            <div class="control">
                <input class="input" type="text" id="nama_pengguna" name="nama_pengguna" value="{{ $s->nama_pengguna }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="kata_sandi">Kata Sandi/ <br> <i>Password</i> </label>
            <div class="control">
                <input class="input" type="password" id="kata_sandi" name="kata_sandi" value="{{ $s->kata_sandi }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="foto">Masukan Foto </label>
            <div class="file has-name is-left">
                <label class="file-label">
                    <input class="file-input" type="file" name="foto_url">
                    <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Masukan Foto
                        </span>
                    </span>
                </label>
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
