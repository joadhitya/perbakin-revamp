<?php

namespace App\Services\MasterData;

use App\Models\MasterData\WeaponModel;
use App\Repositories\MasterData\WeaponModelRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Helpers\GeneralHelper;
use App\Models\General\ModelDelivery;

class WeaponModelService
{
    private $weaponModelRepo;

    public function __construct(WeaponModelRepositoryInterface $weaponModelRepo)
    {
        $this->weaponModelRepo = $weaponModelRepo;
    }

    public function getDataTable(): Collection
    {
        return $this->weaponModelRepo->getAllData();
    }

    public function createData(WeaponModel $data): ModelDelivery
    {
        $data->fill([
            'code' => GeneralHelper::generateULID(),
            'created_by' => GeneralHelper::getAuthInfo(),
            'updated_by' => json_encode([]),
        ]);
        $returnData = $this->weaponModelRepo->createData($data);
        return $returnData;
    }

    public function getData(int $id): ModelDelivery
    {
        $data = $this->weaponModelRepo->getDataByID($id);
        return $data;
    }

    public function updateData(WeaponModel $dataRequest, int $id): ModelDelivery
    {
        $dataRequest->fill([
            'updated_by' => GeneralHelper::getAuthInfo(),
        ]);
        $dataDB = $this->weaponModelRepo->getDataByID($id);
        if ($dataDB['error'] == true){
            return $dataDB;
        }
        $data = $this->weaponModelRepo->updateData($dataDB['data'], $dataRequest);
        return $data;
    }

    public function deleteData(int $id): ModelDelivery {
        $dataDB = $this->weaponModelRepo->getDataByID($id);
        if ($dataDB['error'] == true){
            return $dataDB;
        }
        $data = $this->weaponModelRepo->deleteData($dataDB['data']);
        return $data;
    }

}
