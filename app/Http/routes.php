<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#user

Route::get('/new', function () {
    return ('welcome');
});

Route::get('/welcome', function () {
    return redirect('/');
});

Route::get('/','HomeController@index');

#admin
Route::group(['prefix' => 'admin'],function(){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/new', function () {
        return ('admin welcome');
    });

    Route::get('/welcome', function () {
        return redirect('/');
    });
});
