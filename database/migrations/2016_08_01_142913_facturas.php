<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Facturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('odc',12);
            $table->string('numFactura', 5);
            $table->date('fechaFactura');
            $table->float('totalFact');
            $table->float('IVA');
            $table->enum('pagada',['NO', 'SI'])->default('NO');
            $table->integer('correo_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->foreign('correo_id')->references('id')->on('correosEnviados')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
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
        Schema::drop('facturas');
    }
}
