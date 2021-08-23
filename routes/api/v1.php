<?php
/*
 |--------------------------------------------------------------------------
 | Notes
 |--------------------------------------------------------------------------
*/

Route::get('notes', 'NoteController@index');
Route::get('notes/{note}', 'NoteController@show');
Route::post('notes', 'NoteController@store');
Route::put('notes/{note}/update', 'NoteController@update');
Route::delete('notes/{note}', 'NoteController@destroy');
