<?php


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index');

Route::get('/post', 'PostsController@show');


