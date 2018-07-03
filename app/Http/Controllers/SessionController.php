<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\Http\Resources\SessionResource;
use App\Http\Resources\SessionResourceCollection;


class SessionController extends Controller
{
    //

    public function userSessions(){
        return new SessionResourceCollection(SessionResource::collection(Session::all()));
    }

    public function addSession(Request $request)
    {
        
        $date = $request['date'];
        $gym_id = $request['gym_id'];
        $exercise_type = $request['exercise_type'];
        $reps = $request['reps_no'];
        $sets = $request['sets_no'];
        $user_id = $request['user_id'];
        $trainer_id = $request['trainer_id'];


        $session = new Session;

        $session->date = $date;
        $session->gym_id = $gym_id;
        $session->exercise_type = $exercise_type;
        $session->reps_no = $reps;
        $session->sets_no = $sets;
        $session->user_id = $user_id;
        $session->trainer= $trainer_id;

        $session->save();

        return new SessionResource($session);
    }

    public function delete(Request $request, $id)
    {
        $session = Session::findOrFail($id);
        $session->delete();

        return 204;
    }

}
