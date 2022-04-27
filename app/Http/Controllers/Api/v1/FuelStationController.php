<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\FuelStation;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Interfaces\FuelStationInterface;
use App\Http\Requests\StoreFuelStationRequest;
use App\Http\Requests\UpdateFuelStationRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FuelStationController extends Controller
{
    private FuelStationInterface $fuelStationRepository;

    public function __construct(FuelStationInterface $fuelStationRepository)
    {
        $this->fuelStationRepository = $fuelStationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return rescue(function () {
            return $this->fuelStationRepository->all();
        }, function ($e) {
            throw new HttpResponseException(
                response([
                    'errors' => [
                        'message' => $e->getMessage(),
                    ]
                ], Response::HTTP_INTERNAL_SERVER_ERROR)
            );
        });
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFuelStationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFuelStationRequest $request)
    {
        $data = $request->after();

        return rescue(function () use ($data) {
            $fuelStation = $this->fuelStationRepository->create($data);

            return response([
                'message' => 'Fuel station created succesfully',
                'data' => $fuelStation,
            ], Response::HTTP_CREATED);
        }, function ($e) {
            throw new HttpResponseException(
                response([
                    'errors' => [
                        'message' => $e->getMessage(),
                    ]
                ], Response::HTTP_INTERNAL_SERVER_ERROR)
            );
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FuelStation  $fuelStation
     * @return \Illuminate\Http\Response
     */
    public function show(FuelStation $fuelStation)
    {
        return $this->fuelStationRepository->show($fuelStation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFuelStationRequest  $request
     * @param  \App\Models\FuelStation  $fuelStation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFuelStationRequest $request, FuelStation $fuelStation)
    {
        $data = $request->after();

        return rescue(function () use ($fuelStation, $data) {
            $fuelStation = $this->fuelStationRepository->update($fuelStation, $data);

            return response([
                'message' => 'Fuel station updated succesfully',
                'data' => $fuelStation,
            ], Response::HTTP_OK);
        }, function ($e) {
            throw new HttpResponseException(
                response([
                    'errors' => [
                        'message' => $e->getMessage(),
                    ]
                ], Response::HTTP_INTERNAL_SERVER_ERROR)
            );
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FuelStation  $fuelStation
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuelStation $fuelStation)
    {
        //
    }
}
