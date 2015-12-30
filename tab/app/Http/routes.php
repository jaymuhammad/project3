<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'TheoryController@index');
	
Route::get('/explore', 'TheoryController@create');
Route::get('/tabhub', 'TheoryController@tabhub');

Route::post('/explore', ['as' => 'explore_store', 'uses' => 'TheoryController@store']);
