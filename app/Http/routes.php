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

Route::get('/', function(){
  return view('welcome');
});
Route::resource('posts', 'PostsController');
Route::resource('users', 'UsersController');
Route::resource('organizations', 'OrganizationsController');
Route::resource('comments', 'CommentsController');
Route::resource('events', 'EventsController');
Route::resource('articles', 'ArticlesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',

  ]);
