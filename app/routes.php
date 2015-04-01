<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'BlogController@index');

// TODO: implement all the routes
Route::get('/post/new',array(
	'uses' => 'BlogController@newPost',
	'as' => 'newPost'
));

Route::post('/post/new',array(
	'uses' => 'BlogController@createPost',
	'as' => 'createPost'
));

Route::get('/post/{id}',array(
	'uses' => 'BlogController@viewPost',
	'as' => 'viewPost'
));

Route::post('/post/{id}/comment', array(
	'uses' => 'BlogController@createComment',
	'as' => 'createComment'
));
