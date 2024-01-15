<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'nombre' => 'PROGRAMAS DE ESPECIALIZACION',
            'imagen_curso' => '1702308721.jpeg',
            'fecha_inicio' => '2023-09-08',
            'fecha_fin' => '2023-10-08',
            'horas_lectivas' => 120,
            'categoria_id' => 1,
            'estado'=>1
        ]);

        Curso::create([
            'nombre' => 'CURSOS DE ESPECIALIZACION',
            'imagen_curso' => '1702308721.jpeg',
            'fecha_inicio' => '2023-09-08',
            'fecha_fin' => '2023-10-08',
            'horas_lectivas' => 120,
            'categoria_id' => 1,
            'estado'=>1
        ]);


        Curso::create([
            'nombre' => 'CONGRESOS DE ESPECIALIZACION',
            'imagen_curso' => '1702308721.jpeg',
            'fecha_inicio' => '2023-09-08',
            'fecha_fin' => '2023-10-08',
            'horas_lectivas' => 120,
            'categoria_id' => 1,
            'estado'=>1
        ]);


    }
}
