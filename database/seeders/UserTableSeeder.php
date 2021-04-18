<?php

namespace Database\Seeders;

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
        $user = \App\Models\User::create([
    		'name' => 'admin',
            'email' => 'admin@gmail.com',
    		'password' => bcrypt('12345678'),
    		'type' => 1
    	]);

    	$user = \App\Models\User::create([
    		'name' => 'moemen',
            'email' => 'moemengaballa@gmail.com',
    		'password' => bcrypt('12345678'),
    		'type' => 1
    	]);

    	$user = \App\Models\User::create([
    		'name' => 'user',
            'email' => 'user@gmail.com',
    		'password' => bcrypt('12345678'),
    		'type' => 0
    	]);
    }
}
