<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GymController extends Controller
{
    //
	public function showGym(){

		$gym=Gym::all($user_id);
 
	}

}
