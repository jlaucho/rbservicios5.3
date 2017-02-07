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
        'telefono'  => '0261'.$faker->randomNumber($nbDigits = 7),
        'type'		=> $faker->randomElement(['superAdmin', 'admin', 'cliente', 'usuario_cliente', 'conductor']),
        'password' => bcrypt('14460484'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Modelos\Vehiculos::class, function (Faker\Generator $faker) {

    return [
        'marca' => $faker->randomElement(['Chevrolet', 'Toyota', 'Hyundai', 'Ford', 'Mitsubishi']),
        'modelo'  => $faker->randomElement(['Aveo', 'Terios', 'Tucson', 'Elantra', 'Tahoe']),
        'placa' => $faker->regexify('[0-9A-Z]{7}'),
        'responsabilidadCivil'  => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'id_user' => function () {
            return factory(App\Modelos\User::class)->create()->id;
        }
    ];
});

$factory->define(App\Modelos\Cliente::class, function (Faker\Generator $faker) {

    return [
        'nameCli' => $faker->catchPhrase,
        'RIF_CedulaCli'  => $faker->regexify('([jJ])-([0-9A-Z]{8})-([0-9]{1})'),
        'direccionCli' => $faker->address,
        'telefonoCli'  => $faker->regexify('([02|04])([1,2,4,6]{2})([0-9]{8})'),
        'descripcionCli' => $faker->text,
    ];
});

/*$factory->define(App\Modelos\UsuarioCliente::class, function (Faker\Generator $faker) {

    return [
        'id_user' => function () {
            return factory(App\Modelos\User::class)->create()->id;
        },
        'id_Cliente' => function () {
            return factory(App\Modelos\Cliente::class)->create()->id;
        },
        
    ];
});*/
