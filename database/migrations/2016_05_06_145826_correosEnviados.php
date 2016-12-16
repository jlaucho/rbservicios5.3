<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorreosEnviados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correosEnviados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mensaje');
            $table->integer('cantHoras');
            $table->integer('cantDesvInter');
            $table->integer('cantDesvExter');
            $table->integer('cantPernocta');
            $table->float('totalMonto');
            $table->enum('bonoFinSemana',['SI','NO'])->default('NO');
            $table->enum('pagadoConductor',['SI','NO'])->default('NO');

            $table->integer('id_ticket')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('id_ticket')->references('id')->on('ticket_servicio')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::drop('correosEnviados');
    }
}
