<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	//


	public function creator(){
			return $this->morphTo();
	}

	public function environment(){
			return $this->morphTo();
	}

}
