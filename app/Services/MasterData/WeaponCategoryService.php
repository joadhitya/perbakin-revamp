<?php

namespace App\Services\MasterData;

use App\Models\MasterData\WeaponCategory;
use App\Repositories\MasterData\WeaponCategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Helpers\GeneralHelper;
use App\Models\General\ModelDelivery;

class WeaponCategoryService
{
    private $weaponCategoryRepo;

    public function __construct(WeaponCategoryRepositoryInterface $weaponCategoryRepo)
    {
        $this->weaponCategoryRepo = $weaponCategoryRepo;
    }

    public function getDataTable(): Collection
    {
        return $this->weaponCategoryRepo->getAllData();
    }

    public function createData(WeaponCategory $data): ModelDelivery
    {
        $data->fill([
            'code' => GeneralHelper::generateULID(),
            'created_by' => GeneralHelper::getAuthInfo(),
            'updated_by' => json_encode([]),
        ]);
        $returnData = $this->weaponCategoryRepo->createData($data);
        return $returnData;
    }

    public function getData(int $id): ModelDelivery
    {
        $data = $this->weaponCategoryRepo->getDataByID($id);
        return $data;
    }

    public function updateData(WeaponCategory $dataRequest, int $id): ModelDelivery
    {
        $dataRequest->fill([
            'updated_by' => GeneralHelper::getAuthInfo(),
        ]);
        $dataDB = $this->weaponCategoryRepo->getDataByID($id);
        if ($dataDB['error'] == true){
            return $dataDB;
        }
        $data = $this->weaponCategoryRepo->updateData($dataDB['data'], $dataRequest);
        return $data;
    }

    public function deleteData(int $id): ModelDelivery {
        $dataDB = $this->weaponCategoryRepo->getDataByID($id);
        if ($dataDB['error'] == true){
            return $dataDB;
        }
        $data = $this->weaponCategoryRepo->deleteData($dataDB['data']);
        return $data;
    }

}
