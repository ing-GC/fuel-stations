<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\FuelStation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Interfaces\FuelStationInterface;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FuelStation  $fuelStation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FuelStation $fuelStation)
    {
        //
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
