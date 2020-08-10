<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grade;
use Faker\Generator as Faker;

$factory->define(Grade::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'type' => $faker->randomElement(["s","l","c"]),
        'school_id' => factory(\App\School::class),
    ];
});