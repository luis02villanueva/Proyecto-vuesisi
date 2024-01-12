<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{

    public function index()
    {
        //

        $categoria = DB::table('categorias')->get();

        return response()->json([
            "categoria" => $categoria,
        ]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {


        $categoria = new Categoria;
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        if ($request->hasfile('imagen')) {
           $path = Storage::putFile("categorias", $request->file('imagen'));
           $categoria->imagen =  $path;
        }
        $categoria->save();
        $data = [
            'message' => 'Categoria creado satisfactoriamente',
            'categoria' => $categoria,
            'status' => 200,
        ];
        return response()->json($data);
    }


    public function show(Categoria $categoria)
    {
        //
    }

    public function edit(Categoria $categoria)
    {
        //
    }


    public function update(Request $request, Categoria $categoria)
    {
        //
    }


    public function destroy(Categoria $categoria)
    {
        //
    }
}