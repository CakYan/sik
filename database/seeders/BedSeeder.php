<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bed;
use Illuminate\Database\Seeder;

class BedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bed::create([
            'nomor_bed' => '001',
            'kondisi' => 'baik',
            'jenis' => 'asiyaap',
            'tgl_beli' => '2002-10-10',
            'id_ruangan' => '1'
        ]);
        Bed::create([
            'nomor_bed' => '002',
            'kondisi' => 'baik',
            'jenis' => 'asiyaap',
            'tgl_beli' => '2002-10-10',
            'id_ruangan' => '2'
        ]);
        Bed::create([
            'nomor_bed' => '003',
            'kondisi' => 'baik',
            'jenis' => 'asiyaap',
            'tgl_beli' => '2002-10-10',
            'id_ruangan' => '3'
        ]);
        Bed::create([
            'nomor_bed' => '004',
            'kondisi' => 'baik',
            'jenis' => 'asiyaap',
            'tgl_beli' => '2002-10-10',
            'id_ruangan' => '4'
        ]);
        Bed::create([
            'nomor_bed' => '005',
            'kondisi' => 'baik',
            'jenis' => 'asiyaap',
            'tgl_beli' => '2002-10-10',
            'id_ruangan' => '5'
        ]);
        Bed::create([
            'nomor_bed' => '006',
            'kondisi' => 'baik',
            'jenis' => 'asiyaap',
            'tgl_beli' => '2002-10-10',
            'id_ruangan' => '6'
        ]);
        Bed::create([
            'nomor_bed' => '007',
            'kondisi' => 'baik',
            'jenis' => 'asiyaap',
            'tgl_beli' => '2002-10-10',
            'id_ruangan' => '7'
        ]);
        Bed::create([
            'nomor_bed' => '008',
            'kondisi' => 'baik',
            'jenis' => 'asiyaap',
            'tgl_beli' => '2002-10-10',
            'id_ruangan' => '8'
        ]);
        Bed::create([
            'nomor_bed' => '009',
            'kondisi' => 'baik',
            'jenis' => 'asiyaap',
            'tgl_beli' => '2002-10-10',
            'id_ruangan' => '7'
        ]);
        Bed::create([
            'nomor_bed' => '010',
            'kondisi' => 'baik',
            'jenis' => 'asiyaap',
            'tgl_beli' => '2002-10-10',
            'id_ruangan' => '8'
        ]);
    }
}
