<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Alumno::factory(10)->create();
        Alumno::create([
            'nombre'    => 'Juan',
            'edad'      => '18',
            'nc'        => '36541684',
            'sexo'      => '1'
        ]);
        Alumno::create([
            'nombre'    => 'Luis',
            'edad'      => '20',
            'nc'        => '32148148',
            'sexo'      => '1'
        ]);
    }
}
