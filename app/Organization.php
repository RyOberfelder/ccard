<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model {

protected $fillable = ['title', 'password', 'city', 'state', 'country', 'description', 'type'];

	public function comments(){
		return $this->morphMany('App\Comment', 'creator');
	}

	public function posts()
	{
		return $this->morphMany('App\Post', 'writer');
	}

	public function events()
{
		return $this->morphMany('App\Event', 'eventable');
}

public function users()
{
	return $this->belongsToMany('App\User', 'organizations_users', 'organization_id', 'user_id');
}

public function addUser(User $user)
	{
		$this->users()->attach($user->id);
	}

public function removeUser(User $user)
{
	$this->users()->detach($user->id);
}
}
