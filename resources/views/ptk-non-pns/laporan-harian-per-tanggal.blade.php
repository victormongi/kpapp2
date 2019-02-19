@extends('layouts.app')

@section('title', 'PTK Non PNS')

@section('sidebar')
@include('ptk-non-pns.sidebar')
@endsection

@section('content')
<h1 class="title is-1">Laporan</h1><br>

{{-- FORM INPUT LAPORAN KEGIATAN --}}

<div class="column is-5" v-show="formShow">
    <form action="/ptk-non-pns/buat-laporan-harian" method="POST">
        @csrf

        <div class="field">
            <label class="label" for="jumlah_rombel">Jumlah Rombel</label>
            <div class="control">
                <input class="input" type="text" id="jumlah_rombel" name="jumlah_rombel" value="{{ old('jumlah_rombel') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="jumlah_siswa">Jumlah Siswa</label>
            <div class="control">
                <input class="input" type="text" id="jumlah_siswa" name="jumlah_siswa" value="{{ old('jumlah_siswa') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="tanggal_kegiatan">Tanggal Kegiatan</label>
            <div class="control">
                <input class="input" type="hidden" id="tanggal_kegiatan" name="tanggal_kegiatan" value="{{ request()->get('tgl') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="jam_mulai">Jam Mulai</label>
            <div class="control">
                <input class="input" type="time" id="jam_mulai" name="jam_mulai" value="{{ old('jam_mulai') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="jam_selesai">Jam Selesai</label>
            <div class="control">
                <input class="input" type="time" id="jam_selesai" name="jam_selesai" value="{{ old('jam_selesai') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="uraian_kegiatan">Uraian Kegiatan</label>
            <div class="control">
                <textarea class="textarea" id="uraian_kegiatan" name="uraian_kegiatan">
                {{ old('uraian_kegiatan') }}
              </textarea>
            </div>
        </div>


        <div class="field">
            <label class="label" for="keterangan">Keterangan</label>
            <div class="control">
                <input class="input" type="text" id="keterangan" name="keterangan" value="{{ old('keterangan') }}">
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
{{-- END FORM INPUT LAPORAN KEGIATAN --}}

<div>
    <p> <strong>Tanggal Kegiatan: </strong></p>
<p class="title">{{ \Carbon\Carbon::parse(request()->get('tgl'))->format('d, M Y') }}</p>
    <p> <strong>Status Laporan: </strong></p><br>
    <p>Jumlah Rombongan Belajar:</p>
    <p>Jumlah Siswa:</p><br>
    <div class="box">
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th><abbr title="Position">Jam Mulai</abbr></th>
                    <th><abbr title="Position">Jam Selesai</abbr></th>
                    <th><abbr title="Position">Uraian Kegiatan</abbr></th>
                    <th><abbr title="Position">Keterangan</abbr></th>
                    <th><abbr title="Position">Opsi</abbr></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporanHarian as $laporan)

                <tr>
                    <td>{{$laporan->jam_mulai}}</td>
                    <td>{{$laporan->jam_selesai}}</td>
                    <td>{{$laporan->uraian_kegiatan}}</td>
                    <td>{{$laporan->keterangan}}</td>
                    <td>
                        <div class="buttons">
                            <input type="submit" class="button is-danger is-small" value="Hapus" />
                        </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    <button class="button is-primary is-small" @click="toggleShow">Tambah Laporan</button>
</div>



@endsection
