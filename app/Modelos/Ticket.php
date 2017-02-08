<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table	='ticket_servicio';
    protected $fillable	=[
    	'numTicket','fechaServicio','horaServicio','odc','idUser','comentarioServicio','id_usuario','created_at'
    ];

    public function usuario()
    {
    	return $this->belongsTo('App\Modelos\UsuarioCliente','id_usuario','id');
    }
    public function correo()
    {
    	return $this->hasOne('App\Modelos\Correo','id_ticket','id');
    }
}
