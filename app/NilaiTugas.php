<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiTugas extends Model
{
    protected $fillable = [
        'user_id', 'mapel_id', 'nilai'
    ];

    public function mapel() {
        return $this->hasOne(Mapel::class, 'id', 'mapel_id');
    }
}
