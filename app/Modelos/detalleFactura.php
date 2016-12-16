<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleFactura extends Model
{
    protected $table	= 'detalle_facturas';
    protected $fillable = [
    	'codigo','descripcionFactura','precioUnidad','totalUnidad','cantidadUnidad','id_factura'
    ];
    public function factura()
    {
    	return $this->belongsTo('App\Factura','id_factura','id');
    }
}
