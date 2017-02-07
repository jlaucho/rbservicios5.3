<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_servicio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numTicket',10);
            $table->date('fechaServicio');
            $table->enum('encomienda',['SI','NO']);
            $table->enum('odc',['SI','NO']);
            $table->integer('idUser')->comments('Este es el ID de el usuario que creo el Ticket');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios_cliente')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('ticket_servicio');
    }
}
