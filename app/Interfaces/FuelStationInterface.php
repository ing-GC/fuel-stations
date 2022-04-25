<?php

namespace App\Interfaces;

use App\Models\FuelStation;

interface FuelStationInterface 
{
    public function all();
    public function show(FuelStation $fuelStation);
    public function create(array $data);
    public function update(FuelStation $fuelStation, array $data);
    public function delete(FuelStation $fuelStation);
}