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

Route::group(['prefix' => 'adv'],function(){


});


Route::get('advisor/login', function() { return View::make('advisor.adv_login'); });
Route::get('advisor/manage_student', 'AdvisorController@listAllStudent');
Route::get('advisor/student_detail/{id}', 'AdvisorController@getStudentDetail');

Route::post('advisor/send_invitation','AdvisorController@sendEmailInvitation');
Route::post('advisor/login', 'AdvisorController@authenticate'); 

Route::resource('advisor','AdvisorController');
Route::resource('service_type','ServiceTypeController');
Route::resource('setting','SettingController');
Route::get('invite', function() { return View::make('advisor.advisor_invite'); });

Route::resource('student_service','StudentController');

Route::get('advisor/logout', function(){ Auth::logout() ; return View::make('advisor.adv_login');});


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
