<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GymResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'opening_hrs' => $this->opening_hrs,
            'closing_hrs' => $this->closing_hrs,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude
        ];
    }
}
