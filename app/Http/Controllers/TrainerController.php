<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
use App\Http\Resources\TrainerResource;
use App\Http\Resources\TrainerResourceCollection;


class TrainerController extends Controller
{

    public function index(){
        return new TrainerResourceCollection(TrainerResource::collection(Trainer::all()));
    }

    
    public function getTrainer($id){
        return new TrainerResource(Trainer::findOrFail($id));
    }
    
}
