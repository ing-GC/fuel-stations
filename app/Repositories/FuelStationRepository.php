<?php

namespace App\Repositories;

use App\Models\FuelStation;
use App\Interfaces\FuelStationInterface;
use App\Http\Resources\FuelStationResource;
use App\Http\Resources\FuelStationCollection;

class FuelStationRepository implements FuelStationInterface
{
    private $pagination = 25;

    public function all()
    {
        return new FuelStationCollection(FuelStation::paginate($this->pagination));
    }

    public function show(FuelStation $fuelStation)
    {
        return FuelStationResource::make($fuelStation);
    }

    public function create($data)
    {
        $fuelStation = FuelStation::create([
            'uuid' => $data->uuid,
            'rfc' => $data->rfc,
            'razon_social' => $data->razonsocial,
            'date_insert' => $data->date_insert,
            'numero_permiso' => $data->numeropermiso,
            'fecha_aplicacion' => $data->fechaaplicacion,
            'permiso_id' => $data->permisoid,
            'longitude' => $data->longitude,
            'latitude' => $data->latitude,
            'codigo_postal' => $data->codigopostal,
            'calle' => $data->calle,
            'colonia' => $data->colonia,
            'municipio' => $data->municipio,
            'estado' => $data->estado,
            'regular' => $data->regular,
            'premium' => $data->premium,
        ]);

        return FuelStationResource::make($fuelStation);
    }

    public function update(FuelStation $fuelStation, $data)
    {
        $fuelStation->update((array) $data);

        return FuelStationResource::make($fuelStation);
    }

    public function delete(FuelStation $fuelStation)
    {
        //
    }
}
