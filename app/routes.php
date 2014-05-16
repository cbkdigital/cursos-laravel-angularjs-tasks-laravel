<?php


Route::get('/task', 'TaskController@index');
Route::get('/task/save/{titulo}', 'TaskController@store');
Route::get('/task/delete/{id}', 'TaskController@destroy');