<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignaciones';

    protected $fillable = [
        'materia_id', 'aula_id', 'tiempo_id','dia_id',
    ];

    public function materia()
    {
        return $this->belongsTo('App\Materia');
    }
}
