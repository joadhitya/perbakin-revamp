<?php

namespace App\Repositories\MasterData;

use App\Models\General\ModelDelivery;
use App\Models\MasterData\WeaponModel;
use Illuminate\Database\Eloquent\Collection;

interface WeaponModelRepositoryInterface
{
    public function getAllData(): Collection;
    public function getDataByID(int $id): ModelDelivery;
    public function createData(WeaponModel $data): ModelDelivery;
    public function updateData(WeaponModel $data, $dataRequest): ModelDelivery;
    public function deleteData(WeaponModel $data): ModelDelivery;
}
