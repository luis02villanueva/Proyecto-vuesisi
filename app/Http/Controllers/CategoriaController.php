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


    public function show($id)
    {
        $data = Categoria::findOrFail($id);
        return response()->json($data);
    }

    public function edit(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->nombre =      $request->input('nombre');
        $categoria->descripcion =  $request->input('descripcion');

        if ($request->hasfile('imagen')) {
            if (Storage::exists($categoria->imagen)) {
                Storage::delete($categoria->imagen);
            }
            $path = Storage::putFile("categorias", $request->file('imagen'));
            $categoria->imagen =  $path;
            $categoria->save();
            return  response()->json('La imagen se actualizo correctamente');
        } else {
            return 'no existe imagen';
        }
    }



    public function destroy($id)
    {

        $categoria = Categoria::find($id);
        if (Storage::exists($categoria->imagen)) {

            Storage::delete($categoria->imagen);
        }
        $categoria->delete();
        $data = [
            'message' => 'Categoria se elemino satisfactoriamente',
            'categoria' => $categoria,
            'status' => 200,
        ];
        return response()->json($data);
    }
}
