<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Info;
use Faker\Generator as Faker;

$factory->define(Info::class, function (Faker $faker) {
    return [


         'fname' => $faker->firstNameMale,
         'lname' => $faker->lastName,
         'user_id'=> factory(\App\User::class) ,
         'college' =>$faker-> randomElement($array = array ('it','civil','tcc')),
         'university'=>$faker->randomElement($array = array ('damascus','tishreen','alsham')),
         'year'=>$faker->randomElement($array = array ('1','2','3','4','5','6','graduate')),
         'state'=>$faker->randomElement($array = array ('aleppo','damas','homs')),
         'gender'=>$faker->randomElement($array = array ('male','female')),
         'city'=>$faker->city,
         'village'=>$faker->city,
         'user_image'=>$faker->name,
         'college_card_image'=>$faker->name,


        //


    ];
});
