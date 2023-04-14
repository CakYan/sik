<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'jk' => $this->faker->title('Tn'|'Ny'|'An'),
            'nik' => $this->faker->unique()->numerify('##########'),
            'no_telp' => $this->faker->phoneNumber(),
            'tgl_masuk' => date(now()),
            'no_rm' => $this->faker->unique()->numerify('##.##.##'),
            'tgl_lahir' => $this->faker->date(),
            'status' => 'Sedang Rawat Inap',
            'id_bed' => '1'
        ];
    }
}
