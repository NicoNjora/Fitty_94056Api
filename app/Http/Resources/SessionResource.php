<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Session;


class SessionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
            return [
                'type' => 'sessions',
                'id' => $this->id,            
                'date' => $this->date,
                'gym_name' => $this->gym_name,
                'trainer_name' => $this->trainer_name,
                'workout_id' => $this->workout_id,
            ];
        
    }
}
