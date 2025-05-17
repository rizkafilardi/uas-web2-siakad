<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        Mahasiswa::create([
            'npm' => '220101001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'jurusan' => 'Informatika'
        ]);
    }
}
