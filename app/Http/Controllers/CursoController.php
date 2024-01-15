<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{

    public function index()
    {
        $cursos = DB::table('cursos')->get();
        return response()->json($cursos);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Curso $curso)
    {
        //
    }


    public function edit(Curso $curso)
    {
        //
    }


    public function update(Request $request, Curso $curso)
    {
        //
    }

    public function destroy(Curso $curso)
    {
        //
    }
}
