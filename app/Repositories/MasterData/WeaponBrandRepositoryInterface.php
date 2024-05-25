<?php

namespace App\Repositories\MasterData;

use App\Models\General\ModelDelivery;
use App\Models\MasterData\WeaponBrand;
use Illuminate\Database\Eloquent\Collection;

interface WeaponBrandRepositoryInterface
{
    public function getAllData(): Collection;
    public function getDataByID(int $id): ModelDelivery;
    public function createData(WeaponBrand $data): ModelDelivery;
    public function updateData(WeaponBrand $data, $dataRequest): ModelDelivery;
    public function deleteData(WeaponBrand $data): ModelDelivery;
}
