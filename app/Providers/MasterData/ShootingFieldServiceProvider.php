<?php

namespace App\Providers\MasterData;

use App\Repositories\MasterData\ShootingFieldRepository;
use App\Repositories\MasterData\ShootingFieldRepositoryInterface;
use App\Services\MasterData\ShootingFieldService;
use Illuminate\Support\ServiceProvider;

class ShootingFieldServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind(ShootingFieldRepositoryInterface::class, ShootingFieldRepository::class);
        $this->app->singleton(ShootingFieldService::class, function ($app) {
            return new ShootingFieldService(
                $app->make(ShootingFieldRepositoryInterface::class)
            );
        });
    }

}
