<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoCliente extends Model
{
    use HasFactory;

    protected $table = 'curso_clientes';
    protected $fillable = [
        'cursos_id',
        'clientes_id',

    ] ;
    public $timestamps = false;
}
