@extends('layouts.app')

@section('title', 'Operator')

@section('sidebar')
@include('operator.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Data Kepala Sekolah</h1>

<div class="column is-5">
    <form action="/operator/data-kepala-sekolah" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="nama_kepala_sekolah">Nama</label>
            <div class="control">
                <input class="input" type="text" id="nama_kepala_sekolah" name="nama_kepala_sekolah" value="{{ old('nama_kepala_sekolah') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="alamat">Alamat</label>
            <div class="control">
                <input class="input" type="text" id="alamat" name="alamat" value="{{ old('alamat') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="nomor_hp">Nomor HP</label>
            <div class="control">
                <input class="input" type="text" id="nomor_hp" name="nomor_hp" value="{{ old('nomor_hp') }}">
            </div>
        </div>

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
                    <option value="tk-paud">TK/PAUD</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label" for="nama_sekolah">Nama Sekolah</label>
            <div class="select">
                <select id="nama_sekolah" name="nama_sekolah" value="{{ old('nama_sekolah') }}">
                    <option>Pilih Bentuk Pendidikan</option>
                    <option value="tk-paud">TK/PAUD</option>
                </select>
            </div>
        </div>

        <hr>

        <div class="field">
            <label class="label" for="nama_pengguna">Nama Penguna/ <br> <i>Username</i> </label>
            <div class="control">
                <input class="input" type="text" id="nama_pengguna" name="nama_pengguna" value="{{ old('nama_pengguna') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="kata_sandi">Kata Sandi/ <br> <i>Password</i> </label>
            <div class="control">
                <input class="input" type="text" id="kata_sandi" name="kata_sandi" value="{{ old('kata_sandi') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="foto">Masukan Foto </label>
            <div class="file has-name is-left">
                <label class="file-label">
                    <input class="file-input" type="file" name="resume">
                    <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Masukan Foto
                        </span>
                    </span>
                    <span class="file-name">
                        Screen Shot 2017-07-29 at 15.54.25.png
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

<br><br>

<div>
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th><abbr title="Position">No.</abbr></th>
                <th><abbr title="Position">Wilayah</abbr></th>
                <th><abbr title="Position">Jumlah</abbr></th>
                <th><abbr title="Position">TK/PAUD</abbr></th>
                <th><abbr title="Position">SD</abbr></th>
                <th><abbr title="Position">SMP</abbr></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><a href="/operator/data-kepala-sekolah-kecamatan">Kec. Tomohon Utara</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="/operator/data-kepala-sekolah-kecamatan">Kec. Tomohon Selatan</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="/operator/data-kepala-sekolah-kecamatan">Kec. Tomohon Tengah</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="/operator/data-kepala-sekolah-kecamatan">Kec. Tomohon Barat</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="/operator/data-kepala-sekolah-kecamatan">Kec. Tomohon Timur</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <th>Total</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>




@endsection
