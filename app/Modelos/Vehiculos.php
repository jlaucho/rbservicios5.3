<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    protected $table	='vehiculos';
    protected $fillable	=[
    	'marca','modelo','placa','responsabilidadCivil','anio','tipo','id_user'
    ];

    public function conductor()
    {
    	return $this->belongsTo('App\Modelos\User','id_user','id');
    }
}
