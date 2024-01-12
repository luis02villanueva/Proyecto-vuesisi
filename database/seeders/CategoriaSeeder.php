<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'PROGRAMAS DE ESPECIALIZACION',
            'descripcion' => 'PROGRAMAS',
            'imagen' => '1702308721.jpeg',
            'estado'=>1
        ]);

        Categoria::create([
            'nombre' => 'CURSOS DE ESPECIALIZACION',
            'descripcion' => 'PROGRAMAS',
            'imagen' => '1702308721.jpeg',
            'estado'=>1
        ]);

        Categoria::create([
            'nombre' => 'CONGRESOS DE ESPECIALIZACION',
            'descripcion' => 'PROGRAMAS',
            'imagen' => '1702308721.jpeg',
            'estado'=>1
        ]);
    }
}
