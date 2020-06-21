<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shortage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_id',
        'school_name',
        'grade_id',
        'grade_name',
        'grade_type',
        'material_id',
        'material_name',
        'houres',
        'closed',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'school_id' => 'integer',
        'grade_id' => 'integer',
        'material_id' => 'integer',
        'closed' => 'boolean',
    ];


    public function school()
    {
        return $this->belongsTo(\App\School::class);
    }

    public function grade()
    {
        return $this->belongsTo(\App\Grade::class);
    }

    public function material()
    {
        return $this->belongsTo(\App\Material::class);
    }
}
