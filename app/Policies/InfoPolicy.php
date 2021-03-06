<?php

namespace App\Policies;

use App\Info;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InfoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Info  $info
     * @return mixed
     */
    public function view(User $user, Info $info)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Info  $info
     * @return mixed
     */
    public function update(User $user, Info $info)
    {
        //
       // dd('policy');
        return $user->id === $info->user_id;

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Info  $info
     * @return mixed
     */
    public function delete(User $user, Info $info)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Info  $info
     * @return mixed
     */
    public function restore(User $user, Info $info)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Info  $info
     * @return mixed
     */
    public function forceDelete(User $user, Info $info)
    {
        //
    }
}
