<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class DataKepalaSekolah extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_data_kepala_sekolah';
    protected $fillable = ['username', 'password', 'nama_kepala_sekolah', 'alamat', 'wilayah', 'bentuk_pendidikan', 'nama_sekolah', 'foto_url', 'nomor_hp'];

    protected $guard = 'dataKepalaSekolah';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
