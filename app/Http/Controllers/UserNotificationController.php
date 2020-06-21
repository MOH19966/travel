<?php

namespace App\Http\Controllers;

use willvincent\Rateable\Rating;
 use App\User;

class UserNotificationController extends Controller
{
    //

    public function show()
    {
        # code...
        $x = curr_user()->notifications;
        return view('Notifications.notifications', [

            'notifications' => curr_user()->notifications,

        ]);

    }

    public function rate()
    {
        //1- create rating instance and give it ratinf and user_id
        $rating = new Rating;

        $rating->rating = request()->rate;
        $rating->user_id = curr_user_id();

        //2_ link to the  teacher we want to rate by creating instance of him
        // and save the rating instance that we created to his ratings
        $teacher=User::find(request()->teacher_id)->first();
        $teacher->ratings()->save($rating);


        //dd(request()->rate);

    }
}
