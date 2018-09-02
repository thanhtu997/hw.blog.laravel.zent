<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text($maxNbChars = 100),
        'thumbnail' => $faker->imageUrl($width = 400, $height = 350),
        'description' => $faker->text($maxNbChars = 1000),
        'content' => $faker->text($maxNbChars = 10000),
        'slug' => $faker->slug(),
        'user_id' => 2,
        'category_id' => 2,
        'view_count' => 5
    ];
});
