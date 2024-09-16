<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::factory()->create([
            'nama' => 'Denzel Simatupang',
            'nim' => 'D121221032',
            'alamat' => 'Toraja',
            'prodi_id' => 4
        ]);
    }
}
