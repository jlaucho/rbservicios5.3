<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Tabulador extends Model
{
    protected $table	='tabulador';
    protected $fillable	=[
    	'presKM','presHoras','presDesvInternos','presDesvExternos','presPernocta','presAeropuerto','porBonoNocturno','porBonoFinSemana','porFeriado','fechaInicio','fechaFin'
    ];
}
