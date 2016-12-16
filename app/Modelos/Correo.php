<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
	protected $table 	= 'correosEnviados';
    protected $fillable = [
    	'mensaje', 'cantHoras', 'cantDesvInter', 'cantDesvExter', 'cantPernocta', 'totalMonto', 'bonoFinSemana', 'user_id','pagadoConductor', 'id_ticket'
    ];

    //SE ARMAN LA RELACIONES
    //de muchos a uno con la tabla Users

    public function user()
    {
    	return $this->belongsTo('App\Modelos\User','user_id','id');
    }
    public function recorridos()
    {
        return $this->hasMany('App\Modelos\Recorrido','correo_id', 'id'); 
    }
    public function factura()
    {
        return $this->hasOne('App\Modelos\Factura','correo_id','id');
    }
    public function ticket()
    {
        return $this->belongsTo('App\Modelos\Ticket','id_ticket','id');
    }
}
