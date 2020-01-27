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

    if(Auth::check()){
        return view('home');
    }
    else{
        return view('auth.login');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/schedule', 'ScheduleController@index');

Route::get('/schedule/c', 'ScheduleController@create');

Route::get('/tracks', 'TracksController@show');

Route::get('/tracks/c', 'TracksController@create');

Route::post('/tracks', 'TracksController@store');

Route::get('/employees', 'EmployeeController@ShowEmployees');