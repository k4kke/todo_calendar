<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'CalendarController@show');
Route::get('/edit_calendar', 'CalendarController@edit');
Route::get('/create_calendar', 'CalendarController@create');
Route::get('todos', 'TodoController@index');
Route::get('todos/create', 'TodoController@create');
Route::post('todos', 'TodoController@store');
Route::get('todos/{id}', 'TodoController@show');
Route::get('todos/{id}/edit', 'TodoController@edit');
Route::put('todos/{id}', 'TodoController@update');
Route::delete('todos/{id}', 'TodoController@destroy');
Route::get('calendar', 'calendarController@index'); 