<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Qualification extends JsonResource
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
                'certificate' => $this->certificate,
                'body' => $this->body,
                'time' => $this->time,
                'passrate' => $this->passrate,
                'class' => $this->class,
          ];
    }
}
