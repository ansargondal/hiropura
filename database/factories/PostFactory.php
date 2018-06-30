<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

    $status = ['pending', 'approved', 'rejected'];
    return [
        'title' => $faker->sentence,
        'contact' => $faker->phoneNumber,
        'location' => $faker->streetAddress . ' ' . $faker->city . ', ' . $faker->country,
        'email' => $faker->email,
        'url' => $faker->url,
        'body' => $faker->paragraph,
        'status' => $status[array_rand($status)]
    ];
});
