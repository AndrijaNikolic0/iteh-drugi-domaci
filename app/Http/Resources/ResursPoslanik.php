<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursPoslanik extends JsonResource
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
            'ID Poslanika :' => $this->resource->id,
            'Ime i prezime : ' => $this->resource->imePrezime,
            'Adresa : ' => $this->resource->adresa,
            'Email : ' => $this->resource->email,
            'Partija : ' => new ResursPartija($this->resource->partija),
        ];
    }
}
