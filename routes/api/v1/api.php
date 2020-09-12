<?php

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
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
// header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-
// Request-With');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();

// });
Route::get('/test', function () {
    return view('test');
});

//api/v1/Auth/user/>>
Route::prefix('user')->group(function () {
    Route::post('validate', 'api\v1\auth\RegisterController@validateNumber');

    //regiser
    Route::post('register', 'api\v1\auth\RegisterController@register');
    //login
    Route::post('login', 'api\v1\auth\LoginController@login');
    //testing
    Route::middleware('auth:api')->get('/all', 'api\v1\auth\LoginController@getusers');
});

Route::middleware('auth:api')->prefix('info')->group(function () {

    Route::get('/create', 'api\v1\InfoController@create')->name('info.create');
    Route::post('/store', 'api\v1\InfoController@store');
    //edit profile
    Route::get('{id}/edit', 'api\v1\InfoController@edit')->name('info.edit');
    Route::patch('{id}/update', 'api\v1\InfoController@update')->name('info.update');
    //profile
    Route::get('profile/{id}', 'api\v1\infoController@show')->name('info.profile');
    Route::get('enroll', 'api\v1\infoController@enroll')->name('enroll');
    // notification
    Route::get('notifications', 'api\v1\UserNotificationController@show')->name('notification');
    //rate
    Route::post('notifications', 'api\v1\UserNotificationController@rate')->name('rateTeacher');

    //complete image info after selection sybjects
    Route::get('complete', 'api\v1\infoController@uploadImages')->name('InfoComplete');
    Route::post('complete', 'api\v1\infoController@storeImages')->name('InfoCompleted');

});

Route::middleware('auth:api')->prefix('subject')->group(function () {
//select subject to teach
    //athoriazation ://can select subjects=>(info complete)
    Route::get('select', 'api\v1\SubjectController@create')->name('sub.select');
    Route::post('select', 'api\v1\SubjectController@store')->name('sub.store');
});

Route::middleware('auth:api')->prefix('teacher')->group(function () {
//request  a teacher for   a subject
    Route::get('request', 'api\v1\TeacherController@create')->name('sub.request');
    Route::post('request', 'api\v1\TeacherController@index')->name('sub.index');

});

Route::middleware('auth:api')->prefix('data')->group(function () {
//request  a teacher for   a subject
    Route::get('alluniversities', 'api\v1\InfoController@alluniversities');
    Route::post('collegesInThisUniversity', 'api\v1\InfoController@collegesInThisUniversity');
    Route::post('subjectsInThiscollege', 'api\v1\InfoController@subjectsInThiscollege');

});

//to choose materials to teach
Route::middleware('auth:api')->prefix('schools')->group(function () {
    Route::get('material/select', 'api\v1\SchoolController@select');
    Route::post('material/select', 'api\v1\SchoolController@save');
    Route::get('schools', 'api\v1\SchoolController@index');
});


Route::resource('shortage', 'api\v1\ShortageController');


//Route::group(['prefix' => 'admin'], function () {Voyager::routes();});
