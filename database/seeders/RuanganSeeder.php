<?php

namespace Database\Seeders;

use App\Models\Ruangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ruangan::create([
            'kategori' => 'VIP',
            'nama_ruangan' => 'Marwah 1'
        ]);
        Ruangan::create([
            'kategori' => 'NonVIP',
            'nama_ruangan' => 'Marwah 2'
        ]);
        Ruangan::create([
            'kategori' => 'NonVIP',
            'nama_ruangan' => 'Marwah 3'
        ]);
        Ruangan::create([
            'kategori' => 'NonVIP',
            'nama_ruangan' => 'Marwah 4'
        ]);
        Ruangan::create([
            'kategori' => 'NonVIP',
            'nama_ruangan' => 'Shafa 1'
        ]);
        Ruangan::create([
            'kategori' => 'NonVIP',
            'nama_ruangan' => 'Shafa 2'
        ]);
        Ruangan::create([
            'kategori' => 'NonVIP',
            'nama_ruangan' => 'Shafa 3'
        ]);
        Ruangan::create([
            'kategori' => 'NonVIP',
            'nama_ruangan' => 'Shafa 4'
        ]);
    }
}
