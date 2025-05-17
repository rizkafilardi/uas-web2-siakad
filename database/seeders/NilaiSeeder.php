<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;

class NilaiSeeder extends Seeder
{
    public function run()
    {
        $mhs = Mahasiswa::first();
        $mk = MataKuliah::first();
        Nilai::create([
            'mahasiswa_id' => $mhs->id,
            'mata_kuliah_id' => $mk->id,
            'nilai' => 87.5
        ]);
    }
}
