<?php

// A universal URL parser, throwing it to the HomeController
Route::any('{all}', ['uses'=>'HomeController@index'])->where('all', '.*');