<?php

use Illuminate\Database\Seeder;

class PostsTagsTableSeeder extends Seeder
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
        	DB::table('post_tags')->insert([
        		'post_id' => 1,
        		'tag_id' => 1
        	]);
        }
    }
}
