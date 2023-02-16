<?php

namespace Database\Seeders;

use App\Models\Visite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visite::create([
            'tgl_visite' => date(now()),
            'nama_ppa' => 'Dr. Bruce Banner',
            'visite' => 'Pasien memiliki perkembangan yang bagus ...',
            'pasien_id' => '1',
            'id_ppa' => '1'
        ]);

    }
}
