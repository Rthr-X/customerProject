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

Route::get('/{route?}', ['as'=>'home', 'uses'=>'homeController@index']);


// Final catch-all routine, throw to a 404 page
Route::any('{all}', function($page) { return View::make('error404'); })->where('all', '.*');