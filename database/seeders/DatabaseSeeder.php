<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin Cerdashukum',
            'email' => 'admin@cerdashukum.com',
            'password' => bcrypt('admincerdashukum2024'),
        ]);

        //call the PengacaraSeeder
        $this->call([
            // PengacaraSeeder::class,
            // KeahlianSeeder::class,
        ]);

    }
}
