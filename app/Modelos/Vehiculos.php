<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    protected $table	='vehiculos';
    protected $fillable	=[
    	'marca','modelo','placa','responsablilidadCivil','id_user'
    ];

    public function conductor()
    {
    	return $this->belongsTo('App\User','id_user','id');
    }
}
