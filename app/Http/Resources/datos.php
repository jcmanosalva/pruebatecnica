<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class datos extends JsonResource
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
            'id'         => $this->id,
            'valor1'       => $this->name,
            'valor2'    => $this->answers,           
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
