<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trainer;

class Gym extends Model
{
    //
    public function trainer(){

		return $this->hasMany('App\Trainer');

	}

	public function session(){
		return $this->hasMany('App\Session');

	}

}
