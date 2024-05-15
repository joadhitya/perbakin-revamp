<?php

namespace App\Repositories\MasterData;

use App\Models\General\ModelDelivery;
use App\Models\MasterData\ShootingField;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class ShootingFieldRepository implements ShootingFieldRepositoryInterface
{
    public function getAllData(): Collection
    {
        return ShootingField::all();
    }

    public function getDataByID(int $id): ShootingField
    {
        $data = ShootingField::findOrFail($id);
        return $data;
    }

    public function createData(ShootingField $data): ShootingField
    {
        $dataSaved = ShootingField::create($data->toArray());
        return $dataSaved;
    }

    public function updateData(ShootingField $data, $dataRequest): ShootingField
    {
        $data->update($dataRequest->toArray());
        return $data;
    }

    public function deleteData(ShootingField $data): ModelDelivery
    {
        $modelDelivery = new ModelDelivery();
        try {
            $data->delete();
            $modelDelivery->fill(
                [
                    'error' => false,
                    'data' => $data,
                ]
            );
            return $modelDelivery;
        } catch (Exception $exception) {
            $modelDelivery->fill(
                [
                    'error' => true,
                    'errorMessage' => $exception->getMessage(),
                ]
            );
            return $modelDelivery;
        }
    }
}
