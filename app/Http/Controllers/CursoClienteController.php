<?php

namespace App\Http\Controllers;

use App\Models\CursoCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $cursos_cliente = DB::table('curso_clientes')
            ->select('clientes.nombre as nombre del curso','dni', 'cursos.nombre as nombre del cliente')
            ->join('clientes', 'clientes.id', '=', 'curso_clientes.clientes_id')
            ->join('cursos', 'cursos.id', '=', 'curso_clientes.cursos_id')
            ->get();
        return response()->json($cursos_cliente);
    }


    public function create()
    {
        //

    }

    public function store(Request $request)
    {
        //

        $cursocliente = new CursoCliente;
        $cursocliente->clientes_id = $request->input('cliente');
        $cursocliente->cursos_id = $request->input('curso');
        $cursocliente->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
