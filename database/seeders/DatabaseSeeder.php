<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\ruangan;
use App\Models\Pasien;
use App\Models\Bed;
use Database\Factories\PasienFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            RuanganSeeder::class,
            BedSeeder::class,
            VisiteSeeder::class
        ]);
        Pasien::factory(1)->create();
    }
}
