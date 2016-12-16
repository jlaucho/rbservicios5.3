<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Recorrido extends Model
{
    protected $table = 'recorridos';
    protected $fillable = [
    	'origen', 'destino', 'Km', 'bono_nocturno', 'correo_id','vacio'
    ];

    public function correo()
    {
    	return $this->belongsTo('App\Modelos\Correo','correo_id','id');
    }
}
