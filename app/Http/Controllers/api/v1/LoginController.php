<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        # code...

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

            'user' => Auth::user(),
            'access_token' => $accessToken,
        ]);

    }

}
