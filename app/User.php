<?php

namespace App;

use App\Info;
use Illuminate\Support\Facades\DB;
use willvincent\Rateable\Rateable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\MaterialTrait;
use Laravel\Passport\HasApiTokens;


class User extends \TCG\Voyager\Models\User
{
    use Notifiable ,SubjectTrait , MaterialTrait  ;
    use Rateable;
    // for passport
    use  HasApiTokens;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function info()
    {

        return $this->hasOne(Info::class);
    }

   // get all roles which the user have
    // public function roles()
    // {

    //     return $this->belongsToMany(Role::class);

    // }

    // // add role to roles whish the already have and accept string
    // public function assignRole($role)
    // {
    //     if (is_string($role)) {
    //         $role = Role::whereName($role)->firstOrFail();

    //     }
    //     return $this->roles()->sync($role, false);

    // }

    // public function abilities()
    // {

    //     return $this->roles()->map->abilities()
    //         ->flatten()
    //         ->pluck('name')->unique();

    // }

     public function getInfoCompletedAttribute()
     {

        return $this->info_completed;
     }
     public function setInfoCompletedAttribute($x)
     {

        return $this->info_completed=$x;
     }


}
