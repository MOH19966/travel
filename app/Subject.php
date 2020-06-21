<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $guarded=[];


    public function college()
    {
        return $this->belongsTo(App\College::class);
    }


}
