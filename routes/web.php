<?php

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

Route::get('login', 'HomeController@login');

Route::post('loginstore', 'HomeController@loginstore');

Route::group(['middleware' => 'checkloggedin'],function(){
  Route::get('home', 'HomeController@home');
  Route::get('timeline', 'HomeController@timeline');

  Route::group(['middleware' => 'IsStudent'],function(){
    Route::get('student','StudentController@student');
  });
  Route::group(['middleware' => 'IsTeacher'],function(){
    Route::get('teacher','TeacherController@teacher');
  });

});

Route::get('unauthorized','HomeController@unauthorized');

Route::get('logout','HomeController@logout');
