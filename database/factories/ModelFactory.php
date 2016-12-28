<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Modelos\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->firstName,
        'apellido'	=> $faker->lastName,
        'direccion'	=> $faker->address,
        'cedula'	=> $faker->randomNumber($nbDigits = 8),
        'email' => $faker->unique()->safeEmail,
        'type'		=> $faker->randomElement(['superAdmin', 'admin', 'cliente', 'usuario_cliente', 'conductor']),
        'password' => bcrypt('12345678'),
        'remember_token' => str_random(10),
    ];
});
