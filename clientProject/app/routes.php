<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

#Route::get('/', function() {
#	return View::make('homePage');
#});

Route::get('/', ['as'=>'home', 'uses'=>'homeController@index']);



Route::get('/{something}', ['as'=>'404', 'uses'=>'errorController@error404']);

