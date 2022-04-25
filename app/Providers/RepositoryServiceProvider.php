<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\FuelStationInterface;
use App\Repositories\FuelStationRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FuelStationInterface::class, FuelStationRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
