<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $fillable = [
        'nama_kampung',
        'sejarah',
        'alamat',
        'maps_embed',
        'facebook',
        'instagram',
        'twitter',
        'email'
    ];
}
