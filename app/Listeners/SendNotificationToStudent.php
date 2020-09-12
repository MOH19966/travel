<?php

namespace App\Listeners;


use App\Notifications\RateTeacher;
use App\Events\EnrollTeacherNumber;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;


class SendNotificationToStudent
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EnrollTeacherNumber  $event
     * @return void
     */
    public function handle(EnrollTeacherNumber $event)
    {

        //delay
        $when = now()->addMinutes(10);
        request()->user()
        ->notify(
            (new RateTeacher($event->teacher_id,
                                $event->teacher_full_name ,
                                $event->user_id)
                                )->delay($when));
    }
}
