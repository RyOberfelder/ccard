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

Route::get('/faq', function(){
  return view('faq');
});
Route::get('/', function(){
  return view('welcome.index');
});

Route::post('/search/username', 'UsersController@userNameSearch');



//the following are protected routes
Route::get('posts-protected/{id}', 'PostsController@protected_show');

//the following are organisation Routes
Route::post('/posts/organizations/{id}', 'PostsController@Ostore');
Route::post('/events/organizations/{id}', 'EventsController@Ostore');
Route::get('/home/organizations/logout', 'OrganizationsController@toRemove');
Route::get('/home/organizations/home', 'OrganizationsController@organizationHome');
Route::get('/home/organizations/posts', 'OrganizationsController@posts');
Route::get('/home/organizationsarticles', 'OrganizationsController@articles');
Route::get('/home/organizations/events', 'OrganizationsController@events');
Route::get('/home/organizations/connections', 'OrganizationsController@connections');
Route::get('/home/organizations/users', 'OrganizationsController@users');
Route::get('/home/organization/{id}', 'OrganizationsController@toAssume');
Route::post('/home/accept-organization/{id}', 'OrganizationsController@accept');

// the following are normal home routes
Route::get('/home', 'HomeController@index');
Route::get('/home/posts', 'PostsController@home');
Route::get('/home/articles', 'HomeController@articles');
Route::get('/home/events', 'EventsController@home');
Route::get('/home/connections', 'ConnectRequestsController@home');
Route::get('/home/organizations', 'OrganizationsController@home');
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
Route::post('articles', 'ArticlesController@store');


// the following are the connections routes
Route::post('connections/create/{id}', 'ConnectRequestsController@store');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',

  ]);
