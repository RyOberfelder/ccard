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

Route::get('/home', 'HomeController@index');
Route::get('/home/posts', 'HomeController@posts');
Route::get('/home/articles', 'HomeController@articles');
Route::get('/home/events', 'HomeController@events');
Route::get('/home/requests', 'RequestsController@home');
Route::resource('posts', 'PostsController');
Route::resource('users', 'UsersController');
Route::resource('organizations', 'OrganizationsController');
Route::resource('comments', 'CommentsController');
Route::resource('events', 'EventsController');
Route::resource('articles', 'ArticlesController');
Route::resource('requests', 'RequestsController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',

  ]);
