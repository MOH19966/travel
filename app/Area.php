<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'city_id',
        'state_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'city_id' => 'integer',
        'state_id' => 'integer',
    ];


    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }

   

    public function state()
    {
        return $this->belongsTo(\App\State::class);
    }

    public function villages()
    {
        return $this->hasMany(\App\Village::class);
    }
}
