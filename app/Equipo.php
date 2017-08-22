<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'nombre',
    ];

    public function equiposAsignaciones()
    {
        return $this->hasMany('App\EquipoAsignacion');
    }
}
