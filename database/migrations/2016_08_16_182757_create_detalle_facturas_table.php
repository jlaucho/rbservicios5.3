<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 6);
            $table->string('descripcionFactura');
            $table->float('precioUnidad');
            $table->float('totalUnidad');
            $table->integer('cantUnidad');
            $table->integer('id_factura')->unsigned();
            $table->foreign('id_factura')->references('id')->on('facturas')
                ->onDeleted('cascade')->onUpdate('cascade');
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
        Schema::drop('detalle_facturas');
    }
}
