<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Event;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EventsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
	public function home(){
		$events = $this->getAuthUser()->events;
		$users = $this->getAuthUser()->connections;
		foreach ($users as $user)
			$uevents = $user->events;
			if(!empty($uevents)){
				foreach($uevents as $event)
					$events[] = $event;
			}

		return view('home.events')->with('events', $events);
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
