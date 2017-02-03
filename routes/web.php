<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();
/*=======================================
=            Seccion de Home            =
=======================================*/

Route::get('/home', 'HomeController@index');
/*=========================================
=            Seccion deUsuario            =
=========================================*/
Route::resource('usuarios', 'usuarioController');

/*==========================================
=            Seccion de Cliente            =
==========================================*/

Route::resource('cliente', 'clienteController');

/*============================================
=            Seccion de Vehiculos            =
============================================*/

Route::resource('vehiculo', 'vehiculoController');








