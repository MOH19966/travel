<?php

use App\Area;
use App\City;
use App\Info;
use App\User;
use App\Grade;
use App\State;
use App\School;
use App\College;
use App\Subject;
use App\Village;
use App\Material;
use App\University;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(User::class)->create();
       // factory(Info::class)->create();
        factory(State::class)->create();
        factory(City::class)->create();
        factory(Area::class)->create();
        factory(Village::class)->create();
        factory(Material::class)->create();
        factory(School::class)->create();

        factory(Grade::class)->create();








        //factory(University::class,1)->create();
       // factory(College::class,1)->create();
      //  factory(Subject::class,1)->create(['university_id'=>1 , 'college_id'=>1,'year'=>1]);







    }
}
