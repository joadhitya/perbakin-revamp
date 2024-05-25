<?php

namespace App\Providers\MasterData;

use App\Repositories\MasterData\WeaponBrandRepository;
use App\Repositories\MasterData\WeaponBrandRepositoryInterface;
use App\Services\MasterData\WeaponBrandService;
use Illuminate\Support\ServiceProvider;

class WeaponBrandServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind(WeaponBrandRepositoryInterface::class, WeaponBrandRepository::class);
        $this->app->singleton(WeaponBrandService::class, function ($app) {
            return new WeaponBrandService(
                $app->make(WeaponBrandRepositoryInterface::class)
            );
        });
    }
}
