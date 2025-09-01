<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    protected $table = 'perangkats';
    protected $fillable = ['nama', 'jabatan', 'mulai_kerja', 'gambar', 'deskripsi', 'facebook', 'instagram', 'twitter', 'linkedin'];
}
