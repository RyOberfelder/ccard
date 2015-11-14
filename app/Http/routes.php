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
  return view('welcome.index');
});

Route::get('/home', 'HomeController@index');
Route::get('/home/posts', 'PostsController@home');
Route::get('/home/articles', 'HomeController@articles');
Route::get('/home/events', 'EventsController@home');
Route::get('/home/connections', 'ConnectRequestsController@home');
Route::get('/home/users', 'UsersController@home');
// the following are posts routes
Route::resource('posts', 'PostsController');

// the following are user routes
Route::post('home/accept-connection/{id}', 'UsersController@accept');
Route::delete('home/reject-connection/{id}', 'ConnectRequestsController@destroy');
Route::resource('users', 'UsersController');


Route::resource('organizations', 'OrganizationsController');
Route::resource('comments', 'CommentsController');
Route::resource('events', 'EventsController');
Route::resource('articles', 'ArticlesController');


// the following are the connections routes
Route::post('connections/create/{id}', 'ConnectRequestsController@store');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',

  ]);
