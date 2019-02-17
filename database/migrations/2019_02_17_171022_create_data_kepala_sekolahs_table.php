<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKepalaSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kepala_sekolahs', function (Blueprint $table) {
            $table->increments('id_data_sekolah');
            $table->string('nama_kepala_sekolah');
            $table->string('alamat');
            $table->string('nomor_hp');
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
        Schema::dropIfExists('data_kepala_sekolahs');
    }
}
