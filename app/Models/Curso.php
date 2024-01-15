<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $fillable = [
        'id',
        'nombre',
        'imagen_curso',
        'fecha_inicio',
        'fecha_fin',
        'horas_lectivas',
        'estado',
        'categoria_id',

    ] ;

    public $timestamps = false;

    public function Categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id','id');
    }

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class,'curso_clientes','cursos_id',);
    }
}
