<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class UsersController extends Controller {

	public function index(){

		$users = User::all();
		$authuser = \Auth::user();

		return view('users.index')->with('users', $users)->with('authuser', $authuser);
	}
	public function show($id){

		$user = User::findOrFail($id);

		return view('users.show')->with('user', $user);
	}
	public function create(){

		return view('users.create');
	}
	public function store(){
		$store = Request::all();

		User::create($store);
		return redirect('users');
	}
	public function destroy($id)
	{
		$user = User::findOrFail($id);

	$user->delete();

	return redirect('/');
	}

}
