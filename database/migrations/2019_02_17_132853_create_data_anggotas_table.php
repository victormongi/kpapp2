<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anggotas', function (Blueprint $table) {
            $table->increments('id_data_anggotas');
            $table->string('nama_anggota');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('nomor_hp');
            $table->string('pendidikan_terakhir');
            $table->string('lembaga_pendidikan');
            $table->string('ijazah');
            $table->date('tmt_bekerja');
            $table->string('mata_pelajaran');
            $table->integer('jumlah_jam_pelajaran');
            $table->string('wilayah');
            $table->string('bentuk_pendidikan');
            $table->string('nama_sekolah');
            $table->string('nama_pengguna');
            $table->string('kata_sandi');
            $table->string('foto_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_anggotas');
    }
}
