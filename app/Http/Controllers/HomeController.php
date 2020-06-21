<?php

namespace App\Http\Controllers;

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
        if (auth()->user()->info_completed == 1) {
            return view('home');
        }
//      show me info.index to create an info
        //else return

        return redirect()
            ->route('info.create', ['id' =>curr_user_id()]);
    }
}
