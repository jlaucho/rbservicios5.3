<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('cedula', 12);
            $table->string('telefono', 15);
            $table->string('img')->default('anonimo.jpg');
            $table->string('email')->unique();
            $table->enum('type', ['superAdmin', 'admin', 'cliente', 'usuario_cliente', 'conductor'])->default('cliente');
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
