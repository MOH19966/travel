<?php

namespace App\Listeners;

use App\Events\EnrollTeacherNumber;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNumber
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
        //
    }
}
