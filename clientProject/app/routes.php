<?php

// A universal URL parser, throwing it to the HomeController

//Route::any('{all}', ['uses'=>'HomeController@index'])->where('all', '.*');

	Route::controller('/', 'HomeController');
	Route::get('signin', 'userController@signin');
	Route::get('user/{id?}', 'userController@home');