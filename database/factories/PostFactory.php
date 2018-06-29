<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'contact' => $faker->phoneNumber,
        'location' => $faker->streetAddress . ' ' . $faker->city . ', ' . $faker->country,
        'email' => $faker->email,
        'url' => $faker->url,
        'body' => $faker->paragraph,
        'status' => array_rand([0, 1, -1])
    ];
});
