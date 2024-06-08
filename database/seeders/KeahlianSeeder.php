<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = 
        [
            [
                'pengacarable_id' => 1,
                'pengacarable_type' => 'App\Models\Pengacara',
                'keahlian' => 'Hukum Pidana',
            ],
            [
                'pengacarable_id' => 1,
                'pengacarable_type' => 'App\Models\Pengacara',
                'keahlian' => 'Hukum Perdata',
            ],
            [
                'pengacarable_id' => 2,
                'pengacarable_type' => 'App\Models\Pengacara',
                'keahlian' => 'Hukum Pidana',
            ],
            [
                'pengacarable_id' => 2,
                'pengacarable_type' => 'App\Models\Pengacara',
                'keahlian' => 'Hukum Perdata',
            ],
            [
                'pengacarable_id' => 3,
                'pengacarable_type' => 'App\Models\Pengacara',
                'keahlian' => 'Hukum Pidana',
            ],
            [
                'pengacarable_id' => 3,
                'pengacarable_type' => 'App\Models\Pengacara',
                'keahlian' => 'Hukum Perdata',
            ],
        ];

        foreach ($data as $keahlian) {
            \App\Models\Keahlian::create($keahlian);
        }
    }
}
