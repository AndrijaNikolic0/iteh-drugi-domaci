<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursPartija extends JsonResource
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
            'ID Partije : ' => $this->resource->id,
            'Naziv partije : ' => $this->resource->nazivPartije,
            'Godina osnivanja :' => $this->resource->godinaOsnivanja,
            'Predsednik : ' => $this->resource->predsednik,
            'Broj članova : ' => $this->resource->brojClanova,
            'Skupština : ' => new ResursSkupstina($this->resource->skupstina)
        ];
    }
}
