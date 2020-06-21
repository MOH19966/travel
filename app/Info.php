<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //
    protected $guarded=[];
    // to add Full name attribute each time tho model is callen
     protected $appends = ['full_name'];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

   // public function path()
   // {
       // return route('Rpute_name', $this->....)
    //}

     public function getFullNameAttribute()
{
       return "{$this->fname} {$this->lname}";
}


}
