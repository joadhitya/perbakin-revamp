<?php

namespace App\Repositories\MasterData;

use App\Models\General\ModelDelivery;
use App\Models\MasterData\WeaponCaliber;
use Illuminate\Database\Eloquent\Collection;

interface WeaponCaliberRepositoryInterface
{
    public function getAllData(): Collection;
    public function getDataByID(int $id): ModelDelivery;
    public function createData(WeaponCaliber $data): ModelDelivery;
    public function updateData(WeaponCaliber $data, $dataRequest): ModelDelivery;
    public function deleteData(WeaponCaliber $data): ModelDelivery;
}
