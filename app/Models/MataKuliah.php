<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    /** @use HasFactory<\Database\Factories\MataKuliahFactory> */
    use HasFactory;

        public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }

}
