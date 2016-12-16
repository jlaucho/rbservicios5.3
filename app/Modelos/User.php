<?php

namespace App\Modelos;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'apellido','direccion','cedula','type','email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //RELACIONES ENTRE TABLAS

    public function correos()
    {
        return $this->hasMany('App\Modelos\Correo', 'user_id','id');
    }
    public function vehiculos ()
    {
        return $this->hasMany('App\Modelos\Vehiculos','id_user','id');
    }
    public function usuario_cli ()
    {
        return $this->hasMany('App\Modelos\UsuarioCliente','id_User','id');
    }
}
