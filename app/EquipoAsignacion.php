<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipoAsignacion extends Model
{
     protected $table = 'equipo_asignacion';

    protected $fillable = [
         'aula_id', 'equipo_id', 'cantidad',
    ];

    public function equipo()
    {
        return $this->belongsTo('App\Equipo');
    }
}
