<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gym;
use App\Http\Resources\GymResource;
use App\Http\Resources\GymResourceCollection;

class GymController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gym $gym)
    {
        //
        return new GymResource(Gym::findOrFail($id));
    }

    public function index(){
        return new GymResourceCollection(GymResource::collection(Gym::all()));
    }
    
}
