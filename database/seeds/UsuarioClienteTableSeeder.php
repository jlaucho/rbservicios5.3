<?php

use Illuminate\Database\Seeder;

class UsuarioClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Modelos\UsuarioCliente::class, 5)->create()->each(function ($u) {
			$u->vehiculos()->save(factory(App\Modelos\Cliente::class)->make());
			$u->vehiculos()->save(factory(App\Modelos\User::class)->make());
		});
    }
}
