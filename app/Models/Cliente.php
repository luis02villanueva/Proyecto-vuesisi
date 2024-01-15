<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = [
        'id',
        'nombre',
        'dni',
        'celular',
        'correo',
        'ciudad',

    ] ;

    public $timestamps = false;

    public function cursos()
    {
        return $this->belongsToMany(Curso::class,'curso_clientes','clientes_id','cursos_id');
    }
}
