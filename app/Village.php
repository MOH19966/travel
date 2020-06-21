<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'area_id',
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
        'area_id' => 'integer',
        'city_id' => 'integer',
        'state_id' => 'integer',
    ];


    public function area()
    {
        return $this->belongsTo(\App\Area::class);
    }




    
}
