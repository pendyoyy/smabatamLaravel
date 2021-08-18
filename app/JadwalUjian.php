<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalUjian extends Model
{
    protected $fillable = [
        'kode_jadwal_ujian','nama_jadwal_ujian','file_pdf',
    ];
}
