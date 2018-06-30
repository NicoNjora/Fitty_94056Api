<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    //
    public function gym(){
		return $this->belongsTo('App\Gym');

	}
}
