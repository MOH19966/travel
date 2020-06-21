<?php

use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!

*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//add by me

Route::group(['middleware' => 'api'], function () {
    // Fetch Contacts

    Route::get('states', function () {
        return State::all()->get();
    });

    Route::get('cities', function () {
        return City::all()->get();
    });
    Route::get('areas', function () {
        return Area::all()->get();
    });
    Route::get('villages', function () {
        return Village::all()->get();
    });

});
