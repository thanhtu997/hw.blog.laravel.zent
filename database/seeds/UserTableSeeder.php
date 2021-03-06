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
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){
        	DB::table('users')->insert([
        		'name' => $faker->name,
        		'email' => $faker->unique()->email,
        		'password' => bcrypt('123456')
        	]);
        }
    }
}
