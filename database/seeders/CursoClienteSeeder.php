<?php

namespace Database\Seeders;

use App\Models\CursoCliente;
use Illuminate\Database\Seeder;

class CursoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CursoCliente::create([
            'cursos_id' => 1,
            'clientes_id' => 1,

        ]);

        CursoCliente::create([
            'cursos_id' => 2,
            'clientes_id' => 1,

        ]);

        CursoCliente::create([
            'cursos_id' => 3,
            'clientes_id' => 1,

        ]);
    }
}
