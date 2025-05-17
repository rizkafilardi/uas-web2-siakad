<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;
use App\Models\MataKuliah;

class JadwalSeeder extends Seeder
{
    public function run()
    {
        $mk = MataKuliah::first();
        Jadwal::create([
            'mata_kuliah_id' => $mk->id,
            'hari' => 'Senin',
            'jam' => '08:00 - 10:00',
            'ruang' => 'Ruang 101'
        ]);
    }
}