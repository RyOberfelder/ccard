<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnectRequest extends Model {

	public function user()
	{
			return $this->hasOne('App\User');
	}
	protected $fillable = [
			'authuser_id',
		];

}
