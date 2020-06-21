<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        'statistical_number' => $faker->randomNumber(),
        'name' => $faker->name,
        'educ_stage' => $faker->text,
        'phone' => $faker->phoneNumber,
        'address' => $faker->word,
        'state_id' => factory(\App\State::class),
        'city' => $faker->city,
        'area' => $faker->word,
        'village' => $faker->word,
    ];
});
