<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table 	= 'facturas';
    protected $fillable = [
    	'odc', 'numFactura', 'fechaFactura','totalFact', 'IVA', 'pagada', 'correo_id', 'cliente_id'
    ];
    public function Cliente()
    {
    	return $this->belongsTo('App\Modelos\Cliente','cliente_id','id');
    }
    public function correo()
    {
    	return $this->belongsTo('App\Modelos\Correo','correo_id','id');
    }
    public function detalles()
    {
        return $this->hasMany('App\Modelos\detalleFactura','id_factura','id');
    }
}
