<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = \Auth::user();

		return view('home', compact('user'));
	}
	public function posts(){
		$user = \Auth::user();
		return view('home.posts', compact('user'));
	}

	public function articles(){
		$user = \Auth::user();

		return view('home.articles', compact('user'));
	}

	public function events(){
		$user = \Auth::user();

		return view('home.events', compact('user'));

	}

}
