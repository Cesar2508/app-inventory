<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        User::create([
          'name' => 'Cesar Laserna',
          'email' => 'cesar.laserna@pucp.pe',
          'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
          'remember_token' => str_random(10),
        ]);

        factory(User::class,5)->create();

    }
}
