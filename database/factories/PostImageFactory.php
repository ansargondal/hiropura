<?php

use App\PostImage;
use Faker\Generator as Faker;

$factory->define(PostImage::class, function (Faker $faker) {
    return [
        'path' => $faker->image('public/faker/images', 600, 600, null, false)
    ];
});

