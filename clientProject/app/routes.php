<?php

// A universal URL parser, throwing it to the HomeController

//Route::any('{all}', ['uses'=>'HomeController@index'])->where('all', '.*');

	Route::post('signin', 'userController@signin');
	Route::post('user/{id?}', 'userController@home');
	Route::controller('/', 'HomeController');
