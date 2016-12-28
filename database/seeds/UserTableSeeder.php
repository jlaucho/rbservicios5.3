<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//factory(App\Modelos\User::class, 50)->create();
		factory(App\Modelos\User::class, 50)->create()->each(function ($u) {
			$u->vehiculos()->save(factory(App\Modelos\Vehiculos::class)->make());
		});
    }
}
