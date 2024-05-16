<?php

namespace App\Services\MasterData;

use App\Models\MasterData\WeaponCaliber;
use App\Repositories\MasterData\WeaponCaliberRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Helpers\GeneralHelper;
use App\Models\General\ModelDelivery;

class WeaponCaliberService
{
    private $weaponCaliberRepo;

    public function __construct(WeaponCaliberRepositoryInterface $weaponCaliberRepo)
    {
        $this->weaponCaliberRepo = $weaponCaliberRepo;
    }

    public function getDataTable(): Collection
    {
        return $this->weaponCaliberRepo->getAllData();
    }

    public function createData(WeaponCaliber $data): ModelDelivery
    {
        $data->fill([
            'code' => GeneralHelper::generateULID(),
            'created_by' => GeneralHelper::getAuthInfo(),
            'updated_by' => json_encode([]),
        ]);
        $returnData = $this->weaponCaliberRepo->createData($data);
        return $returnData;
    }

    public function getData(int $id): ModelDelivery
    {
        $data = $this->weaponCaliberRepo->getDataByID($id);
        return $data;
    }

    public function updateData(WeaponCaliber $dataRequest, int $id): ModelDelivery
    {
        $dataRequest->fill([
            'updated_by' => GeneralHelper::getAuthInfo(),
        ]);
        $dataDB = $this->weaponCaliberRepo->getDataByID($id);
        if ($dataDB['error'] == true){
            return $dataDB;
        }
        $data = $this->weaponCaliberRepo->updateData($dataDB['data'], $dataRequest);
        return $data;
    }

    public function deleteData(int $id): ModelDelivery {
        $dataDB = $this->weaponCaliberRepo->getDataByID($id);
        if ($dataDB['error'] == true){
            return $dataDB;
        }
        $data = $this->weaponCaliberRepo->deleteData($dataDB['data']);
        return $data;
    }

}
