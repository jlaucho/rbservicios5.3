<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table 	= 'clientes';
    protected $fillable	=[
    	'nameCli', 'RIF_CedulaCli', 'direccionCli', 'descripcionCli', 'telefonoCli', 'created_at'
    ];
    public function facturas()
    {
    	return $this->hasMany('App\Modelos\Factura','cliente_id','id');
    }
    public function usuarios()
    {
    	return $this->hasMany('App\Modelos\UsuarioCliente','id_Cliente','id');
    }
}
