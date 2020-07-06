<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'post_id' => factory(\App\Post::class),
        'content' => $faker->paragraphs(3, true),
        'bestAnswer' => $faker->boolean,
        'published_at' => $faker->dateTime(),
    ];
});
