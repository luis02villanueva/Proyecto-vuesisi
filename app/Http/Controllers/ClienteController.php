<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = DB::table('clientes')->get();
        return response()->json($clientes);
    }

    public function detalleClientes()
    {
        $clientes = DB::table("curso_clientes")
            ->select(
                'clientes.id',
                'nombre',
                'dni',
                'ciudad',
            )
            ->join('clientes', 'curso_clientes.clientes_id', '=', 'clientes.id')
            ->groupBy('clientes.id', 'nombre', 'dni', 'ciudad')

            ->get();
        foreach ($clientes as $cliente) {
            $cursos = DB::table("curso_clientes")
                ->select(
                    'cursos.id',
                    'nombre'

                )
                ->join('cursos', 'curso_clientes.cursos_id', '=', 'cursos.id')
                ->groupBy(
                    'cursos.id',

                )
                ->where('curso_clientes.clientes_id', $cliente->id)
                ->get();
            $cliente->cursos = $cursos;
        }
        return response()->json($clientes);
    }



    public function store(Request $request)
    {
        $clientes = new Cliente;
        $clientes->nombre = $request->input('nombre');
        $clientes->dni = $request->input('dni');
        $clientes->celular = $request->input('celular');
        $clientes->correo = $request->input('correo');
        $clientes->ciudad = $request->input('ciudad');
        $clientes->save();

        return response()->json([
            'msg' => ' El cliente se creo correctamente',
            'clientes' => $clientes,
        ]);
    }
    public function show(Cliente $cliente)
    {
        //
    }
    public function edit(Cliente $cliente)
    {
        //
    }


    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    public function destroy(Cliente $cliente)
    {
        //
    }
}
