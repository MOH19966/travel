<?php

namespace App\Http\Controllers\Api\v1\auth;

use App\User;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{




    public function register(Request $request){


           // dd('dd');
//
        $this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6' ,
            'phone_number' => ['required', 'numeric', 'min:10', 'unique:users'],
    	]);

    	$user = User::create([
    		'name' => request('name'),
            'email' => request('email'),
            'phone_number'=>request('phone_number'),
            'password'=>Hash::make(request('password'))
        ]);




       $u=User::findOrFail($user->id);

        $accessToken = $u->createToken('authToken')->accessToken;
        //dd( $accessToken);

    	 return response(
    [
        'user' =>$u,
        'accessToken'=>$accessToken

    ]);


    }
}
