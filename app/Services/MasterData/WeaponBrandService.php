<?php

namespace App\Services\MasterData;

use App\Models\MasterData\WeaponBrand;
use App\Repositories\MasterData\WeaponBrandRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Helpers\GeneralHelper;
use App\Models\General\ModelDelivery;

class WeaponBrandService
{
    private $weaponBrandRepo;

    public function __construct(WeaponBrandRepositoryInterface $weaponBrandRepo)
    {
        $this->weaponBrandRepo = $weaponBrandRepo;
    }

    public function getDataTable(): Collection
    {
        return $this->weaponBrandRepo->getAllData();
    }

    public function createData(WeaponBrand $data): ModelDelivery
    {
        $data->fill([
            'code' => GeneralHelper::generateULID(),
            'created_by' => GeneralHelper::getAuthInfo(),
            'updated_by' => json_encode([]),
        ]);
        $returnData = $this->weaponBrandRepo->createData($data);
        return $returnData;
    }

    public function getData(int $id): ModelDelivery
    {
        $data = $this->weaponBrandRepo->getDataByID($id);
        return $data;
    }

    public function updateData(WeaponBrand $dataRequest, int $id): ModelDelivery
    {
        $dataRequest->fill([
            'updated_by' => GeneralHelper::getAuthInfo(),
        ]);
        $dataDB = $this->weaponBrandRepo->getDataByID($id);
        if ($dataDB['error'] == true){
            return $dataDB;
        }
        $data = $this->weaponBrandRepo->updateData($dataDB['data'], $dataRequest);
        return $data;
    }

    public function deleteData(int $id): ModelDelivery {
        $dataDB = $this->weaponBrandRepo->getDataByID($id);
        if ($dataDB['error'] == true){
            return $dataDB;
        }
        $data = $this->weaponBrandRepo->deleteData($dataDB['data']);
        return $data;
    }

}
