<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\College;
use App\Subject;
use App\University;
use Faker\Generator as Faker;

$factory->define(Subject::class, function (Faker $faker) {
    return [

        'name' => $faker->word ,
        'university_id' =>factory(University::class),
        'college_id' =>factory(College::class),
        'year' =>$faker->randomElement($array = array ('1','2','3','4','5','6','graduate')),

        //
    ];
});
