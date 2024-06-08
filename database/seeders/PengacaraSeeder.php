<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengacaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Pengacara 1',
                'latitude' => '-6.1753924',
                'longitude' => '106.8271528',
                'deskripsi' => 'Deskripsi Pengacara 1',
                'foto' => 'foto1.jpg',
                'no_hp' => '081234567890',
                'alamat' => 'Alamat Pengacara 1',
            ],
            [
                'nama' => 'Pengacara 2',
                'latitude' => '-6.1753924',
                'longitude' => '106.8271528',
                'deskripsi' => 'Deskripsi Pengacara 2',
                'foto' => 'foto2.jpg',
                'no_hp' => '081234567890',
                'alamat' => 'Alamat Pengacara 2',
            ],
            [
                'nama' => 'Pengacara 3',
                'latitude' => '-6.1753924',
                'longitude' => '106.8271528',
                'deskripsi' => 'Deskripsi Pengacara 3',
                'foto' => 'foto3.jpg',
                'no_hp' => '081234567890',
                'alamat' => 'Alamat Pengacara 3',
            ],
        ];

        foreach ($data as $pengacara) {
            \App\Models\Pengacara::create($pengacara);
        }
    }
}