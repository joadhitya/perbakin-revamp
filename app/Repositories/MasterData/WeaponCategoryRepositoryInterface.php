<?php

namespace App\Repositories\MasterData;

use App\Models\General\ModelDelivery;
use App\Models\MasterData\WeaponCategory;
use Illuminate\Database\Eloquent\Collection;

interface WeaponCategoryRepositoryInterface
{
    public function getAllData(): Collection;
    public function getDataByID(int $id): ModelDelivery;
    public function createData(WeaponCategory $data): ModelDelivery;
    public function updateData(WeaponCategory $data, $dataRequest): ModelDelivery;
    public function deleteData(WeaponCategory $data): ModelDelivery;
}
