<?php

namespace App\Repositories\MasterData;

use App\Models\General\ModelDelivery;
use App\Models\MasterData\ShootingField;
use Illuminate\Database\Eloquent\Collection;

interface ShootingFieldRepositoryInterface
{
    public function getAllData(): Collection;
    public function getDataByID(int $id): ShootingField;
    public function createData(ShootingField $data): ShootingField;
    public function updateData(ShootingField $data, $dataRequest): ShootingField;
    public function deleteData(ShootingField $data): ModelDelivery;
}
