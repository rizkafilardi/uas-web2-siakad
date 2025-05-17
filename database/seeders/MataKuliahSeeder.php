<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;
use App\Models\Dosen;

class MataKuliahSeeder extends Seeder
{
    public function run()
    {
        $dosen = Dosen::first();
        MataKuliah::create([
            'kode_mk' => 'IF101',
            'nama_mk' => 'Pemrograman Web',
            'sks' => 3,
            'dosen_id' => $dosen->id
        ]);
    }
}