<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioCliente extends Model
{
    protected $table	= 'usuarios_cliente';
    protected $fillable	= [
    	'id_User', 'id_Cliente'
    ];

    public function cliente()
    {
    	return $this->belongsTo('App\Cliente', 'id_Cliente','id');
    }
    public function tickets()
    {
    	return $this->hasMany('App\User','id_User','id');
    }
    public function usuario ()
    {
        return $this->belongsTo('App\User','id_User','id');
    }
}
