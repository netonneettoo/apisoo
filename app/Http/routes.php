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

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/registration/{courseId?}', 'HomeController@registration20161');
Route::post('/registration', 'HomeController@postRegistration20161');
Route::get('/history', 'HomeController@getHistory');
