<?php

namespace App\Http\Controllers\Api\v1\auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        //get the the cached num
        // $v = Cache::get($request->phone_number);
        // $c = strval(Str::of($v)->after(',')); #validation_code
        // $p = Str::of($v)->before(',');

        // $code = $request->code;
        // //  dd($c);
        // if (!$code === $c) {
        //     return 'code is not matched';
        // } //

        $user = User::create([
            //'name' => request('name'),
            // 'email' => request('email'),
            'phone_number' => request('phone_number'),
            //'password' => Hash::make($p),
          'password' => Hash::make(request('password')),
            ]);
        //get_user_id
        $u = User::findOrFail($user->id);

        $accessToken = $u->createToken('authToken')->accessToken;
        //dd( $accessToken);

        return response(
            [
                'user' => $u,
                'accessToken' => $accessToken,

            ]);

    }

    public function validateNumber(Request $request)
    {
        $n = request()->phone_number;
        $p = request()->password;



        // $this->validate($request, [
        //     'password' => 'required|min:6',
        //     'phone_number' => ['required', 'numeric', 'min:10', 'unique:users'],
        // ]);

        //generate rand number
        $code = rand(1000, 9999);
        //echo  dechex($code);
            //dd('');

        // delete o from 09555335r
        $num_format=ltrim($n, $n[0]);
        // dd(
        //     $num_format
        // );


        //http request to send number
        $response = Http::withHeaders([
            'User-Agent' => 'hca111',
        ])->get('https://services.mtnsyr.com:7443/general/MTNSERVICES/ConcatenatedSender.aspx', [
            'User' =>'hca111','Pass'=>'nrae410','From'=>'Teach-Learn',
            'Gsm' =>'963'.$num_format,
            'Msg' =>$code,
            'Lang' =>'1',
        ]);

        //
        //
        //
        //
        //
        //

        //store num and pass in cache until we vertificate his number
        $v = Cache::put($n, $p . ',' . $code, 60000);
        //$v = Cache::get($n);

        //dd($v);




        return 'we have sent code to your number';

    }
}
