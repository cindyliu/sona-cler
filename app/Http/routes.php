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

Route::get('/', function () {
    return view('index');
});

Route::get('home/{user_type}', 'PagesController@home');
Route::get('users/{user_type}', 'PagesController@users');
Route::get('studies/{user_type}', 'PagesController@studies');
Route::get('receipts/{user_type}', 'PagesController@receipts');
