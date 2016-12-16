<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recorridos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recorridos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('origen',60);
            $table->string('destino', 60);
            $table->integer('Km');
            $table->enum('bono_nocturno', ['SI', 'NO'])->default('NO');
            $table->enum('vacio',['SI','NO'])->default('NO');
            $table->integer('correo_id')->unsigned();
            $table->foreign('correo_id')->references('id')->on('correosEnviados')->onDelete('cascade');
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
        Schema::drop('recorridos');
    }
}
