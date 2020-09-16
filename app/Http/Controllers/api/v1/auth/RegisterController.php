<?php

namespace App\Http\Controllers\Api\v1\auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        //1-get the the cached num
        //2-retrive vcode from user
        //3_ check if user vcode is identical to ours
        //4-create user
        //5_create token

//1
        $v = Cache::get($request->phone_number);
        $c = strval(Str::of($v)->after(',')); #validation_code
        $p = Str::of($v)->before(',');
//2
        $vcode = $request->code;
        //dd($c);

//3
//         if ($vcode != $c) {
//             return 'code is not matched';
//         } //
// //4
        $user = User::create([
            'phone_number' => request('phone_number'),
            'password' => Hash::make($p),
        ]);

        //get_user_id
        $u =User::findOrFail($user->id);
// //5
$accessToken = $u->createToken('authToken')->accessToken;


        User::Where('id', $user->id)->update([

            'remember_token'=>$accessToken

        ]

        );


//         $u->remember_token=$accessToken;
//         $u->save();

        return response(
            [
                'user' => $u,
                'accessToken' => $accessToken,

            ], 200);

    }

    public function validateNumber(Request $request)
    {  // dd('vava');
        $n = request()->phone_number;
        $p = request()->password;

        // $this->validate($request, [
        //     'password' => 'required|min:6',
        //     'phone_number' => ['required', 'numeric', 'min:10', 'unique:users'],
        // ]);

        //generate rand number
        $vcode = rand(1000, 9999);
        //echo  dechex($code);
        //dd('');

        // delete o from 09555335r
        $num_format = ltrim($n, $n[0]);

        // dd($code);
        //http request to send number
        // $response = Http::withHeaders([
        //     'User-Agent' => 'hca111',
        // ])->get('https://services.mtnsyr.com:7443/general/MTNSERVICES/ConcatenatedSender.aspx', [
        //     'User' => 'hca111', 'Pass' => 'nrae410', 'From' => 'Teach-Learn',
        //     'Gsm' => '963' . $num_format,
        //     'Msg' => 'your vertification code is :' . $vcode,
        //     'Lang' => '1',
        // ]);

        //store num and pass in cache until we vertificate his number
        //$p . ',' . $vcode is password and vcode
        $v = Cache::put($n, $p . ',' . $vcode, 50000);
        //$v = Cache::get($n);

        //dd($v);

        return 'we have sent code to your number';

    }
}
