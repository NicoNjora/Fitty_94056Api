<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\Http\Resources\SessionResource;

class SessionController extends Controller
{
    //


    public function addSession(Request $request)
	{	
		
	    $session = new Session();
	    
	    $session->user_id=request('user_id');
	    $session->date=request('date');
	    $session->gym=request('gym');
	    $session->trainer=request('trainer');
	    $session->reps=request('reps');
	    $session->sets=request('sets');
	    $session->save();
	}

	public function index(Session $session){

		// return $session->toArray();

		SessionResource::withoutWrapping();

		return new SessionResource($session);

		// return Session::all($user_id);
	}

	public function delete(Request $request, $id)
    {
        $session = Session::findOrFail($id);
        $session->delete();

        return 204;
    }
}
