<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class FuelStationResource extends JsonResource
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
            '_id' => $this->uuid,
            'rfc' => $this->rfc,
            'razonsocial' => $this->razon_social,
            'date_insert' => Carbon::parse($this->date_insert),
            'numeropermiso' => $this->numero_permiso,
            'fechaaplicacion' => Carbon::parse($this->fecha_aplicacion),
            'permisoid' => $this->whenNotNull($this->permiso_id),
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'codigopostal' => $this->codigo_postal,
            'calle' => $this->calle,
            'colonia' => $this->colonia,
            'municipio' => $this->municipality->name ?? '',
            'estado' => $this->state->name ?? '',
            'regular' => $this->regular,
            'premium' => $this->premium,
        ];
    }
}
