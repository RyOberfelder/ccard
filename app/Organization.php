<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model {

	//
	public function comments(){
		return $this->morphMany('App\Comment', 'creator');
	}

	public function events()
{
		return $this->morphMany('App\Event', 'eventable');
}
}
