<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Darurat extends Model
{
    protected $table = 'darurats';
    protected $fillable = ['nama_instansi', 'kontak'];
}
