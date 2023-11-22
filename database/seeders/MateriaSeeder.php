<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Materia::factory(5)->create();
        Materia::create([
            'nombre'    => 'Calculo integral',
            'semestre'      => '5',
            'especialidad'        => 'Programacion'
        ]);
        Materia::create([
            'nombre'    => 'Calculo diferencial',
            'semestre'      => '4',
            'especialidad'        => 'Contabilidad'
        ]);
    }
}
