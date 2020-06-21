<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Year;

class College extends Model
{
    //
    protected $guarded=[];



 public function years()
 {
     return $this->hasMany(Year::class);
 }

 public function YearsCount()
 {
     $this->years->map->year;

 }
}
