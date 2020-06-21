<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\College;
use Faker\Generator as Faker;

$factory->define(College::class, function (Faker $faker) {
    return [

        'name' =>$faker-> randomElement($array = array ('it','civil','tcc')),
         'university_id'=>factory(\App\University::class),
         'years'=>$faker->randomElement($array = array ('2','3','4','5','6',)),



        //
    ];
});
