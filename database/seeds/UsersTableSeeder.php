<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(config('auth.providers.users.model'))->create([
            'name' => 'Demo',
            'email' => 'demo@demo.com',
            'password' => bcrypt('demo'),
            'remember_token' => str_random(10),
        ]);

        factory(config('auth.providers.users.model'), 30)->create();
    }
}
