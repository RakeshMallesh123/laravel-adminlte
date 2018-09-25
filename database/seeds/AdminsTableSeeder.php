<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'firstname' => 'Rakesh',
	        'lastname' => 'Mallesh',
	        'email' => 'rakeshmallesh1@gmail.com',
	        'password' => bcrypt('123456'),
	        'remember_token' => str_random(10),
	        'type' => 1,
        ]);
    }
}
