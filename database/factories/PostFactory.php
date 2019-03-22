<?php

use Faker\Generator as Faker;
use App\Models\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'description' => $faker->realText(200),
        'user_id' => rand(1, 50),
    ];
});
