<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

// if user id =5 // if he completes his info
        if (curr_user()->info_completed == 1) {
            return redirect()->route('home');
        }
//      show me info.index to create an info
        //else return

        return redirect()
            ->route('info.create', ['id' =>curr_user_id()]);
    }
}
