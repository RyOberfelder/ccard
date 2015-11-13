<?php namespace App\Http\Controllers;

use App\User;
use App\ConnectRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class UsersController extends Controller {

	public function index(){

		$users = User::all();

		return view('users.index')
			->with('users', $users)
			->with('authuser', $this->getAuthUser());
	}
	public function show($id){

		$user = User::findOrFail($id);
		$authuser = $this->getAuthUser();

		return view('users.show')->with('user', $user)->with('authuser', $authuser);
	}
	public function create(){

		return view('users.create');
	}
	public function store(){
		$store = Request::all();

		User::create($store);
		return redirect('users');
	}

	public function accept($id){

		User::findOrFail($id)->addConnection($this->getAuthUser());

		\DB::table('connect_requests')
			->where('user_id', $this->getAuthUser()->id)
			->where('authuser_id', $id)->delete();

		return redirect('/home/connections');
	}
	public function destroy($id)
	{
		$user = User::findOrFail($id);

	$user->delete();

	return redirect('/');
	}

	function getAuthUser(){
		return \Auth::user();
	}

	function getConnectionRequests(){
		return $this->getAuthUser()->connectrequests();
	}

}
