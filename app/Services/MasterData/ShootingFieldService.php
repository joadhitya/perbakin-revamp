<?php

namespace App\Services\MasterData;

use App\Repositories\MasterData\ShootingFieldRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ShootingFieldService
{
    private $shootingFieldRepo;

    public function __construct(ShootingFieldRepositoryInterface $shootingFieldRepo){
        $this->shootingFieldRepo = $shootingFieldRepo;
    }

    public function getDataTable(): Collection
    {
        return $this->shootingFieldRepo->getAllData();
    }

}
