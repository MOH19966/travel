<?php

namespace App\Listeners;

use App\Events\EnrollTeacherNumber;
use App\User;

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
        $student_number = User::where('id', $event->user_id)->first()->phone_number;
        $teacher_number = User::where('id', $event->teacher_id)->first()->phone_number;
        $message="إن رقم الأستاذ/ة اللي طلبته هو:"."/n".$event->$teacher_full_name.'/n'.$teacher_number;
        // delete o from 09555335r
            $student_num_format = ltrim($n, $n[0]);

//http request to send number
        $response =sendMessageToPhoneNumber($student_num_format,$message);
        //  Http::withHeaders([
        //     'User-Agent' => 'hca111',
        // ])->get('https://services.mtnsyr.com:7443/general/MTNSERVICES/ConcatenatedSender.aspx', [
        //     'User' => 'hca111', 'Pass' => 'nrae410', 'From' => 'Teach-Learn',
        //     'Gsm' => '963' . $student_num_format,
        //     'Msg' => $event->teacher_full_name . '/n' . $teacher_number,
        //     'Lang' => '1',
        // ]);

    }
}
