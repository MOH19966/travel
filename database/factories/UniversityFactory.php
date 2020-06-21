<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\University;
use Faker\Generator as Faker;

$factory->define(University::class, function (Faker $faker) {
    return [
                'name'=>$faker->randomElement($array = array ('damascus','tishreen','alsham')),
                'state_id'=>factory(\App\State::class ) ,


        //
    ];
});
