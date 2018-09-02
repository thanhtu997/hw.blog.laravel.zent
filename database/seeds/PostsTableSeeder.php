<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0;$i < 10;$i++){
        	DB::table('posts')->insert([
        		'title' => $faker->text($maxNbChars = 100),
        		'thumbnail' => $faker->imageUrl($width = 400, $height = 350),
        		'description' => $faker->text($maxNbChars = 1000),
        		'content' => $faker->text($maxNbChars = 10000),
        		'slug' => $faker->slug(),
        		'user_id' => 1,
        		'category_id' => 1,
        		'view_count' => 10
        	]);
        }
    }
}
