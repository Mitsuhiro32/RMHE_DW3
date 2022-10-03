<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public $table = 'alumnos';
    public $fillable = [
        'curso_id',
        'nombre',
        'apellido',
        'edad',
        'ci',
        'telefono',
        'direccion',
        'gmail',
        'profesion',
        'genero',
        'fecha_de_nacimiento'
    ];

    public function cursos()
    {
        return $this->belongsTo('App\Models\Curso', 'curso_id');
        //return $this->hasOne(Curso::class, 'id', 'curso_id');
    }
}
