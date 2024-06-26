<?php

namespace App\Services\MasterData;

use App\Models\MasterData\ShootingField;
use App\Repositories\MasterData\ShootingFieldRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Helpers\GeneralHelper;
use App\Models\General\ModelDelivery;

class ShootingFieldService
{
    private $shootingFieldRepo;

    public function __construct(ShootingFieldRepositoryInterface $shootingFieldRepo)
    {
        $this->shootingFieldRepo = $shootingFieldRepo;
    }

    public function getDataTable(): Collection
    {
        return $this->shootingFieldRepo->getAllData();
    }

    public function createData(ShootingField $data): ModelDelivery
    {
        $data->fill([
            'code' => GeneralHelper::generateULID(),
            'created_by' => GeneralHelper::getAuthInfo(),
            'updated_by' => json_encode([]),
        ]);
        $returnData = $this->shootingFieldRepo->createData($data);
        return $returnData;
    }

    public function getData(int $id): ModelDelivery
    {
        $data = $this->shootingFieldRepo->getDataByID($id);
        return $data;
    }

    public function updateData(ShootingField $dataRequest, int $id): ModelDelivery
    {
        $dataRequest->fill([
            'updated_by' => GeneralHelper::getAuthInfo(),
        ]);
        $dataDB = $this->shootingFieldRepo->getDataByID($id);
        if ($dataDB['error'] == true){
            return $dataDB;
        }
        $data = $this->shootingFieldRepo->updateData($dataDB['data'], $dataRequest);
        return $data;
    }

    public function deleteData(int $id): ModelDelivery {
        $dataDB = $this->shootingFieldRepo->getDataByID($id);
        if ($dataDB['error'] == true){
            return $dataDB;
        }
        $data = $this->shootingFieldRepo->deleteData($dataDB['data']);
        return $data;
    }

}
