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
        //
    }

    public function update(FuelStation $fuelStation, $data)
    {
        //
    }

    public function delete(FuelStation $fuelStation)
    {
        //
    }
}
