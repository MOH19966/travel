<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shortage;
use Faker\Generator as Faker;

$factory->define(Shortage::class, function (Faker $faker) {
    return [
        'school_id' => factory(\App\School::class),
        'school_name' => $faker->word,
        'grade_id' => factory(\App\Grade::class),
        'grade_name' => $faker->word,
        'grade_type' => $faker->word,
        'material_id' => factory(\App\Material::class),
        'material_name' => $faker->word,
        'houres' => $faker->randomNumber(),
        'closed' => $faker->boolean,
    ];
});
