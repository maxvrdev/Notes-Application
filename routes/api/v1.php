<?php
/*
 |--------------------------------------------------------------------------
 | Notes
 |--------------------------------------------------------------------------
*/

Route::get('notes', 'NoteController@index');
Route::get('notes/{note}', 'NoteController@show');
