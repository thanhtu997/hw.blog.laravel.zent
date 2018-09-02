<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'thumbnail' => $faker->imageUrl($width = 400, $height = 350),
        'description' => $faker->text($maxNbChars = 1000),
        'slug' => $faker->slug()
    ];
});
