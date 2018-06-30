<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workout;
use App\Http\Resources\WorkoutResource;
use App\Http\Resources\WorkoutResourceCollection;

class WorkoutController extends Controller
{
    //

    public function index(){
        return new WorkoutResourceCollection(WorkoutResource::collection(Workout::all()));
    }
}
