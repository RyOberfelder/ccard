<?php namespace App\Http\Controllers;

use App\Organization;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class OrganizationsController extends Controller {

//	public function __construct()
//	{
//		$this->middleware('organization', ['except' => 'create']);
//	}

	public function index(){

    $organizations = Organization::all();


    return view('organizations.index')->with('organizations', $organizations);
  }

	public function home(){

			$egos = $this->getAuthUser()->leadsOrgs;
			$organizations = $this->getAuthUser()->organizations;
			return view('home.organizations')->with('organizations', $organizations)->with('egos', $egos);

	}

	public function toAssume($id){
			$organization = Organization::findOrFail($id);
			if(session('organization') == null){
				\Session::put('organization',$organization);
				return redirect('/home/organizations/home');
			}
			else{
				\Session::forget('organization');
				return 'you have forgotten the organization';
			}
	}

	public function organizationHome(){
			return view('organizations.home.home')->with('organization', session('organization'));

	}
	public function toRemove(){
		if(session('organization')==null){
			return redirect('/home/organizations/home');
		}else{
			\Session::forget('organization');
			return redirect('/home/organizations');
		}
	}

	public function accept($id){

		Organization::findOrFail($id)->addUser($this->getAuthUser());

		return redirect('/home/organizations');
	}

	public function posts(){
		$posts = session('organization')->posts;
		if(empty($posts)){
			return view('organizations.home.posts')->with('posts', array());
		}else{
			return view('organizations.home.posts')->with('posts', $posts);
		}
	}

	public function events(){
		$events = session('organization')->events;
		if(empty($events)){
			return view('organizations.home.events')->with('events', array());
		}else{
			return view('organizations.home.events')->with('events', $events);
		}
	}
  public function show($id){

    $organization = Organization::findOrFail($id);

		$theVal = empty($this->getAuthUser()->organizations()->where('id', $id));
		if(!$theVal){
			return view('organizations.protectedShow')->with('organization', $organization);
		}else{
    	return view('organizations.show')->with('organization', $organization);
		}
  }
  public function create(){

    return view('organizations.create');
  }
  public function store(){

    $store = Request::all();
		//return $store;

    $organization = Organization::create($store);
		$organization->addUser($this->getAuthUser());
		$this->getAuthUser()->leadsOrgs()->save($organization);
    return redirect('/home/organizations');
  }

	function getAuthUser(){
		return \Auth::user();
	}

}
