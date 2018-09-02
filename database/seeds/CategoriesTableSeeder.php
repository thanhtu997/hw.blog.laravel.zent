<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){
        	DB::table('categories')->insert([
        		'name' => $faker->name,
        		'thumbnail' => $faker->imageUrl($width = 400, $height = 350),
        		'description' => $faker->text($maxNbChars = 1000),
        		'slug' => $faker->slug(),
        	]);
        }
    }
}
