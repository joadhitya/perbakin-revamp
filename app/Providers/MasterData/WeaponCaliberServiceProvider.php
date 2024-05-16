<?php

namespace App\Providers\MasterData;

use App\Repositories\MasterData\WeaponCaliberRepository;
use App\Repositories\MasterData\WeaponCaliberRepositoryInterface;
use App\Services\MasterData\WeaponCaliberService;
use Illuminate\Support\ServiceProvider;

class WeaponCaliberServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind(WeaponCaliberRepositoryInterface::class, WeaponCaliberRepository::class);
        $this->app->singleton(WeaponCaliberService::class, function ($app) {
            return new WeaponCaliberService(
                $app->make(WeaponCaliberRepositoryInterface::class)
            );
        });
    }

}
