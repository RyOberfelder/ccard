<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = [
			'subject',
			'body'
		];
		
	//
	public function comments(){
		return $this->morphMany('App\Comment', 'environment');
	}
}
