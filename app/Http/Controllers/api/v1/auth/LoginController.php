<?php

namespace App\Http\Controllers\api\v1\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        # code...
        //dd('ff');

        $attempt = $request->validate(
            [
                'phone_number' => 'required|string'
                , 'password' => 'required|string',

            ]);

        if (!Auth::attempt($attempt))
         {
            return response([
                'message' => 'hello u are fucked',
            ]);
         }

        $accessToken = curr_user()->createToken('authToken')->accessToken;

        return response([

            'user' =>curr_user()->info ,
            'access_token' => $accessToken,
        ]);

    }

     public function getusers(Request $request)
    {
        # code...

        return response(
        [
            'SSS'=>User::all()

        ]);
    }

}
