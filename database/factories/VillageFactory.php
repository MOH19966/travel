<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Village;
use Faker\Generator as Faker;

$factory->define(Village::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'area_id' => factory(\App\Area::class),
        'city_id' => factory(\App\City::class),
        'state_id' => factory(\App\State::class),
    ];
});
