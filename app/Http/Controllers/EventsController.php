<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Event;
use App\Organization;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EventsController extends Controller {


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
			$events = Event::all();

				return view('events.index')
					->with('events', $events);
	}
	public function home(){
		$events = $this->getAuthUser()->events;
		$users = $this->getAuthUser()->connections;
		$organizations = $this->getAuthUser()->organizations;
		foreach ($users as $user)
			$uevents = $user->events;
			if(!empty($uevents)){
				foreach($uevents as $event)
					$events[] = $event;
			}
		foreach ($organizations as $organization)
			$uevents = $organization->events;
			if(!empty($uevents)){
				foreach($uevents as $event)
					$events[] = $event;
			}


		return view('home.events')
		->with('events', $events)
		->with('user', $this->getAuthUser())
		->with('egos', $this->getAuthUser()->leadsOrgs);
	}

	public function Ostore(Request $request ,$id){

		$this->validate($request, [
		'title' => 'required',
		'event_due' => 'required',
		]);

		$event = new Event($request->all());

		Organization::findOrFail($id)->events()->save($event);

		return redirect('/home/events');
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
	 public function store(Request $request)
 	{
 		$this->validate($request, [
 		'title' => 'required',
		'event_due' => 'required',
 		]);

 		$event = new Event($request->all());

 		$this->getAuthUser()->events()->save($event);

 		return redirect('/home/events');
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
		//
	}

	function getAuthUser(){
		return \Auth::user();
	}

}
