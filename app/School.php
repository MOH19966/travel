<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'statistical_number',
        'name',
        'educ_stage',
        'phone',
        'address',
        'state_id',
        'city',
        'area',
        'village',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'state_id' => 'integer',
        'educ_stage' => 'array'
    ];


    public function state()
    {
        return $this->belongsTo(\App\State::class);
    }

    public function shortages()
    {
        return $this->hasMany(\App\Shortage::class);
    }
}
