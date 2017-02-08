<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class UsuarioCliente extends Model
{
    protected $table	= 'usuarios_cliente';
    protected $fillable	= [
    	'id_User', 'id_Cliente'
    ];

    public function cliente()
    {
    	return $this->belongsTo('App\Modelos\Cliente', 'id_Cliente','id');
    }
    public function tickets()
    {
    	return $this->hasMany('App\Modelos\Ticket','id_usuario','id');
    }
    public function usuario()
    {
        return $this->belongsTo('App\Modelos\User','id_User','id');
    }
}
