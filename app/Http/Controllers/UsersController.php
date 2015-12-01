<?php namespace App\Http\Controllers;

use App\User;
use App\ConnectRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class UsersController extends Controller {

	public function __construct()
	{
		$this->middleware('userMiddleware', ['only' => [ 'destroy']]);
		$this->middleware('connectMiddleware', ['only' => ['accept']]);
	}

	public function index(){

		$users = User::all();

		return view('users.index')
			->with('users', $users)
			->with('authuser', $this->getAuthUser());
	}

	public function userNameSearch(){
		$name = \Input::get('name');
		$users = User::where('uname',  'LIKE', '%'.$name.'%')->get();

		return view('search.uname')
			->with('users', $users)
			->with('authuser', $this->getAuthUser());
	}
	public function home(){

			$users = $this->getAuthUser()->connections;
			$connectRequests = $this->getAuthUser()->connectRequests;
			$connections = array();
			foreach ($connectRequests as $connectRequest){
				$connections[] = User::findOrFail($connectRequest->authuser_id);
			}



			return view('home.users')->with('users', $users)->with('connections', $connections);

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
		$this->getAuthUser()->addConnection(User::findOrFail($id));

		\DB::table('connect_requests')
			->where('user_id', $this->getAuthUser()->id)
			->where('authuser_id', $id)->delete();

		return redirect('/home/users');
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
