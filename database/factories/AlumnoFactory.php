<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nc = $this->faker->randomNumber(8);
        $nombre = $this->faker->name();
        $sexo = $this->faker->boolean();
        $edad = $this->faker->numberBetWeen(18,90);

        return [
            'nombre'    => $nombre,
            'edad'      => $edad,
            'nc'        => $nc,
            'sexo'      => $sexo
        ];
    }
}
