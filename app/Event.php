<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

	protected $fillable = [
			'title',
			'description',
			'event_due',
			'event_time'
		];


	public function comments(){
		return $this->morphMany('App\Comment', 'environment');
	}

	public function eventable()
	{
		return $this->morphTo();
	}
}
