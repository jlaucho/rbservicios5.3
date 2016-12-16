<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table 	= 'clientes';
    protected $fillable	=[
    	'nameCli', 'RIF_CedulaCli', 'direccionCli', 'descripcionCli', 'telefonoCli', 'created_at'
    ];
    public function facturas()
    {
    	return $this->hasMany('App\Factura','cliente_id','id');
    }
    public function usuarios()
    {
    	return $this->hasMany('App\UsuarioCliente','id_Cliente','id');
    }
}
