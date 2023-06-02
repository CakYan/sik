<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
            'username' => 'Admin',
            'password' => bcrypt('admin'),
        ]);

        User::create([
            'id' => '2',
            'username' => 'Dokter',
            'password' => bcrypt('dokter'),
        ]);

        User::create([
            'id' => '3',
            'username' => 'Perawat',
            'password' => bcrypt('perawat'),
        ]);

        User::create([
            'id' => '4',
            'username' => 'Farmasi',
            'password' => bcrypt('farmasi'),
        ]);

        User::create([
            'id' => '5',
            'username' => 'Gizi',
            'password' => bcrypt('gizi'),
        ]);
    }
}
