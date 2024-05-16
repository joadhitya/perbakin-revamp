<?php

namespace App\Repositories\MasterData;

use App\Models\General\ModelDelivery;
use App\Models\MasterData\ShootingField;
use Illuminate\Database\Eloquent\Collection;

interface ShootingFieldRepositoryInterface
{
    public function getAllData(): Collection;
    public function getDataByID(int $id): ModelDelivery;
    public function createData(ShootingField $data): ModelDelivery;
    public function updateData(ShootingField $data, $dataRequest): ModelDelivery;
    public function deleteData(ShootingField $data): ModelDelivery;
}
