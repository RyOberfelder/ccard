<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\ConnectRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ConnectRequestsController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$connectRequests = $this->getAuthUser()->connectRequests;
		$users = array();
		foreach ($connectRequests as $connectRequest)
			$users[] = User::findOrFail($connectRequest->authuser_id);

		return view('connections.index')->with('users', $users);
	}

	public function home()
	{

		$connectRequests = $this->getAuthUser()->connectRequests;
		$users = array();
		foreach ($connectRequests as $connectRequest)
			$users[] = User::findOrFail($connectRequest->authuser_id);

		return view('home.connections')->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id, Request $request)
	{
		$this->validate($request, [
		'authuser_id' => 'required',
		]);

		$connectRequest = new ConnectRequest($request->all());

		User::findOrFail($id)->connectRequests()->save($connectRequest);

		return redirect('/home/connections');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\DB::table('connect_requests')
			->where('user_id', $this->getAuthUser()->id)
			->where('authuser_id', $id)->delete();

			return redirect('home/connections');
	}

	public function getAuthUser(){
		return \Auth::user();


	}

}
