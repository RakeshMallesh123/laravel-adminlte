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
        DB::table('users')->insert([
            'name' => 'Rakesh',
	        'email' => 'user@domain.com',
	        'password' => bcrypt('123456'),
	        'remember_token' => str_random(10),
	        'type' => 1,
        ]);
    }
}
