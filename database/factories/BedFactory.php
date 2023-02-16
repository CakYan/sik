<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bed>
 */
class BedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomor_bed' => $this->faker->unique(true)->numberBetween(1, 10),
            'kondisi' => $this->faker->text('Bagus'|'Rusak'|'Perlu diperbaiki'),
            'jenis' => $this->faker->unique()->numerify('######'),
            'tgl_beli' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'id_ruangan' => $this->faker->unique(true)->numberBetween(1, 10),
        ];
    }
}
