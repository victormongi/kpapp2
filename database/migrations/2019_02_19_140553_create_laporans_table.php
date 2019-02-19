<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id_laporans');
            $table->integer('id_data_anggotas');
            $table->integer('id_data_sekolah');
            $table->integer('jumlah_rombel');
            $table->date('tanggal_kegiatan');
            $table->integer('jumlah_siswa');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->text('uraian_kegiatan');
            $table->string('keterangan');
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
        Schema::dropIfExists('laporans');
    }
}
