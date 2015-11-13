<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['fname','lname','uname', 'email', 'password', 'city', 'state', 'country', 'description'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function posts()
	{
		return $this->hasMany('App\Post');
	}

	public function isAnOrganization(){
		return false;
	}
	public function comments(){
		return $this->morphMany('App\Comment', 'creator');
	}
	public function connectRequests()
	{
			return $this->hasMany('App\ConnectRequest');
	}
	public function connections()
	{
			return $this->belongsToMany('App\User', 'connections_users', 'user_id', 'connection_id');
	}

	public function addConnection(User $user)
		{
			$this->connections()->attach($user->id);
		}

		public function removeConnection(User $user)
		{
			$this->connections()->detach($user->id);
		}
		public function events()
	{
			return $this->morphMany('App\Event', 'eventable');
	}

}
