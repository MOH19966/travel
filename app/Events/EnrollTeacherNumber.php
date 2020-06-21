<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EnrollTeacherNumber
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

        public  $teacher_id ;
        public  $teacher_full_name;
        public  $user_id ;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct( $teacher_id, $teacher_full_name , $user_id )
    {
        //
        $this->teacher_full_name=$teacher_full_name;
        $this->teacher_id=$teacher_id;
        $this->user_id=$user_id;
    }


}
