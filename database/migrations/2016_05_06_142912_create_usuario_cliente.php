<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_User')->unsigned();
            $table->integer('id_Cliente')->unsigned();
            $table->foreign('id_User')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_Cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios_cliente');
    }
}
