<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\FuelStationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::apiResource('fuel-stations', FuelStationController::class)
        ->parameter('fuel-stations', 'fuelStation');
});
