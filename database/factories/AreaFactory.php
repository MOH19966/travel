<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Area;
use Faker\Generator as Faker;

$factory->define(Area::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'city_id' => factory(\App\City::class),
        'state_id' => factory(\App\State::class),
    ];
});
