<?php

use Faker\Generator as Faker;
use App\Models\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->realText(100),
        'post_id' => rand(1, 100),
        'user_id' => rand(1, 50),
    ];
});
