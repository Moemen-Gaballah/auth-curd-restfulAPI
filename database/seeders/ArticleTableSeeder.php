<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\Article::create([
    		'title' 	=> 'First Article',
            'body' 		=> 'Body for first Article',
    		'user_id' 	=> 1,

    	]);


    	$user = \App\Models\Article::create([
    		'title' 	=> 'Second Article',
            'body' 		=> 'Content for second Article',
    		'user_id' 	=> 2,
    	]);

    	$user = \App\Models\Article::create([
    		'title' 	=> 'Third Article',
            'body' 		=> 'Content for Third Article',
    		'user_id' 	=> 3,
    	]);
    }
}
