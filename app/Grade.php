<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'school_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'school_st_id' => 'integer',
    ];


    public function school()
    {
        return $this->belongsTo(\App\School::class);
    }


    public function materials()
    {
        return $this->belongsToMany(\App\Material::class);
    }
}
