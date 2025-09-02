<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    protected $table = 'perangkats';
    protected $fillable = [
        'gambar',
        'nama',
        'tempat_tanggal_lahir',
        'jabatan',
        'histori_pendidikan',
        'hobi',
        'akun_sosmed',
    ];
}
