<?php

// A universal URL parser, throwing it to the HomeController

//Route::any('{all}', ['uses'=>'HomeController@index'])->where('all', '.*');

	Route::post('signin', 'userController@signin');
	Route::get('register/{email?}', 'userController@registration');
	Route::post('loggedin', 'userController@loggedin');
	Route::post('user/{id?}', 'userController@home');
	Route::controller('/', 'HomeController');
