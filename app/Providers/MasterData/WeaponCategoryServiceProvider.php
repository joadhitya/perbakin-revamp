<?php

namespace App\Providers\MasterData;

use App\Repositories\MasterData\WeaponCategoryRepository;
use App\Repositories\MasterData\WeaponCategoryRepositoryInterface;
use App\Services\MasterData\WeaponCategoryService;
use Illuminate\Support\ServiceProvider;

class WeaponCategoryServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind(WeaponCategoryRepositoryInterface::class, WeaponCategoryRepository::class);
        $this->app->singleton(WeaponCategoryService::class, function ($app) {
            return new WeaponCategoryService(
                $app->make(WeaponCategoryRepositoryInterface::class)
            );
        });
    }

}
