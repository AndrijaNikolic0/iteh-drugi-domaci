<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursSkupstina extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID Skupštine : ' => $this->resource->id,
            'Grad : ' => $this->resource->grad,
            'Drzava : ' => $this->resource->drzava,
            'Broj poslanika : ' => $this->resource->brojPoslanika
        ];
    }
}
