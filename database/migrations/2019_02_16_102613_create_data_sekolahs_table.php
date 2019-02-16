<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sekolahs', function (Blueprint $table) {
            $table->increments('id_data_sekolah');
            $table->string('nama_sekolah');
            $table->string('akreditasi');
            $table->string('kurikulum');
            $table->string('alamat');
            $table->string('wilayah');
            $table->integer('npsn');
            $table->string('bentuk_sekolah');
            $table->string('bentuk_pendidikan');
            $table->string('status_kepemilikan');
            $table->string('sk_pendirian_sekolah');
            $table->date('tanggal_sk_pendirian');
            $table->string('sk_izin_operasional');
            $table->date('tanggal_sk_izin_operasional');
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
        Schema::dropIfExists('data_sekolahs');
    }
}
