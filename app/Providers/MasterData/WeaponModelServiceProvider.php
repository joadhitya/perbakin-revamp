<?php

namespace App\Providers\MasterData;

use App\Repositories\MasterData\WeaponModelRepository;
use App\Repositories\MasterData\WeaponModelRepositoryInterface;
use App\Services\MasterData\WeaponModelService;
use Illuminate\Support\ServiceProvider;

class WeaponModelServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind(WeaponModelRepositoryInterface::class, WeaponModelRepository::class);
        $this->app->singleton(WeaponModelService::class, function ($app) {
            return new WeaponModelService(
                $app->make(WeaponModelRepositoryInterface::class)
            );
        });
    }

}
