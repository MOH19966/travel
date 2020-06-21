<?php
//DB::listen(fuction($query){ var_dump($query->sql , $query->bindings)});

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/s', function () {
    return view('components.s');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




        // info

        Route::get('create', 'InfoController@create')->name('info.create');
        Route::post('store', 'InfoController@store')->name('info.store');
        //edit profile
        Route::get('{id}/edit', 'InfoController@edit')->name('info.edit');
        Route::patch('{id}/update', 'InfoController@update')->name('info.update');
        //profile
        Route::get('/profile/{id}', 'infoController@show')->name('info.profile');
        Route::get('/enroll', 'infoController@enroll')->name('enroll');




        //complete image info after selection sybjects
        Route::get('/user/{id}/complete', 'infoController@uploadImages')->name('InfoComplete');
        Route::post('/user/{id}/complete', 'infoController@storeImages')->name('InfoCompleted');






//select subject to teach
//athoriazation ://can select subjects=>(info complete)
Route::get('/user/{id}/select', 'SubjectController@create')->name('sub.select');
Route::post('/user/{id}/select', 'SubjectController@store')->name('sub.store');

//request  a teacher for   a subject
Route::get('/request', 'TeacherController@create')->name('sub.request');
Route::post('/request', 'TeacherController@index')->name('sub.index');





Route::get('notifications', 'UserNotificationController@show')->name('notification');
Route::post('notifications', 'UserNotificationController@rate')->name('rateTeacher');

//for excel
Route::get('i', 'TestController@importExport');
Route::post('import', 'TestController@import');
Route::get('export', 'TestController@export');



Route::resource('shortage', 'ShortageController');

//
//to choos materials to teach
Route::get('material', 'SchoolController@select')->name('material.select');
Route::post('material', 'SchoolController@save')->name('material.save');


Route::get('school', 'SchoolController@index')->name('school.suggest');




