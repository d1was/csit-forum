<?php

Route::get('/', 'HomeController@index');

Route::get('/threads/{thread}', 'ThreadController@show');

Auth::routes();

