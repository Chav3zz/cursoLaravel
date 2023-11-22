<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materia>
 */
class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $semestre = $this->faker->randomBetween(1,6);
        $nombre = $this->faker->name();
        $especialidad = $this->faker->name();

        return [
            'nombre'    => $nombre,
            'semestre'  => $semestre,
            'especialidad' => $especialidad
        ];
    }
}
