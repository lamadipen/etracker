<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//advisor controller
Route::get('advisor/send_invitation','AdvisorController@sendEmailInvitation');
Route::resource('advisor','AdvisorController');
Route::resource('service_type','ServiceTypeController');
Route::resource('setting','SettingController');
Route::get('invite', function() { return View::make('advisor.advisor_invite'); });


Route::resource('student_service','StudentController');




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
