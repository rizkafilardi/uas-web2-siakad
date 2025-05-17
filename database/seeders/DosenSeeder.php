<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run()
    {
        Dosen::create([
            'nidn' => '12345678',
            'nama' => 'Dr. Siti Aminah',
            'email' => 'siti@kampus.ac.id',
            'prodi' => 'Informatika'
        ]);
    }
}
