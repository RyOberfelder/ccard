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
  public function show($id){

    $organization = Organization::findOrFail($id);

    return view('organizations.show')->with('organization', $organization);
  }
  public function create(){

    return view('organizations.create');
  }
  public function store(){
    $store = Request::all();

    Organization::create($store);
    return redirect('organizations');
  }

}
