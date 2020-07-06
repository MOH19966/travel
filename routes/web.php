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
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
    });
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/s', function () {
    return view('components.s');
});
Route::get('/test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Info

Route::prefix('info')->group(function () {

    Route::get('create', 'InfoController@create')->name('info.create');
    Route::post('store', 'InfoController@store')->name('info.store');
    //edit profile
    Route::get('{id}/edit', 'InfoController@edit')->name('info.edit');
    Route::patch('{id}/update', 'InfoController@update')->name('info.update');
    //profile
    Route::get('profile/{id}', 'infoController@show')->name('info.profile');
    Route::get('enroll', 'infoController@enroll')->name('enroll');

    //complete image info after selection sybjects
    Route::get('complete', 'infoController@uploadImages')->name('InfoComplete');
    Route::post('complete', 'infoController@storeImages')->name('InfoCompleted');

});




Route::prefix('subject')->group(function () {
//select subject to teach
//athoriazation ://can select subjects=>(info complete)
Route::get('select', 'SubjectController@create')->name('sub.select');
Route::post('select', 'SubjectController@store')->name('sub.store');
});



Route::prefix('teacher')->group(function () {
//request  a teacher for   a subject
Route::get('request', 'TeacherController@create')->name('sub.request');
Route::post('request', 'TeacherController@index')->name('sub.index');

});





Route::get('notifications', 'UserNotificationController@show')->name('notification');
Route::post('notifications', 'UserNotificationController@rate')->name('rateTeacher');



Route::resource('shortage', 'ShortageController');

//
//to choose materials to teach
Route::prefix('schools')->group(function () {
    Route::get('material/select', 'SchoolController@select')->name('material.select');
    Route::post('material/select', 'SchoolController@save')->name('material.save');
    Route::get('schools', 'SchoolController@index')->name('school.suggest');
});


//post commetn
Route::resource('post', 'PostController');
Route::get('post/choose-best-comment', 'PostController@chooseBestComment');
Route::resource('comment', 'CommentController');

//admin panel routes




//for excel
Route::get('i', 'TestController@importExport');
Route::post('import', 'TestController@import');
Route::get('export', 'TestController@export');
