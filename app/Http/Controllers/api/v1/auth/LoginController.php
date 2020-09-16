<?php

namespace App\Http\Controllers\api\v1\auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request)
     {
        //  1- validate inputs
    //     2_ valid credintals
    //     3_get user ID BY HIS NUMBER
    //     4_ GET USER OBJECT
    //     5_
    //     # code...
        // dd('ff');

        $attempt = $request->validate(
            [
                'phone_number' => 'required'
                , 'password' => 'required',

            ]);
        //auth if the send data is valid as auth request
        // test if passowrd and phone_number are a valid user
        //dd(!Auth::attempt($attempt));
        // if (!Auth::attempt($attempt))
        //  {
        //     return response([
        //         'message' => 'hello u are fucked',
        //     ]);
        //  }
        // dd('');

        $z = User::Where('phone_number', $request->phone_number)->first()->id;
        $u = User::findOrFail($z);

        $accessToken = $u->remember_token;
        //dd($u);

        return response([

            'user' => $u,
            'access_token' => $accessToken,
        ]);

    }

    public function getusers(Request $request)
    {
        # code...

        return response(
            [
                'SSS' => User::all(),

            ]);
    }

}
