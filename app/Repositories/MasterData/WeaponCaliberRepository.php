<?php

namespace App\Repositories\MasterData;

use App\Models\General\ModelDelivery;
use App\Models\MasterData\WeaponCaliber;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class WeaponCaliberRepository implements WeaponCaliberRepositoryInterface
{
    public function getAllData(): Collection
    {
        return WeaponCaliber::all();
    }

    public function getDataByID(int $id): ModelDelivery
    {
        $modelDelivery = new ModelDelivery();
        try{
            $data = WeaponCaliber::findOrFail($id);
            $modelDelivery->fill(
                [
                    'error' => false,
                    'data' => $data,
                ]
            );
            return $modelDelivery;
        }catch(Exception $exception){
            $modelDelivery->fill(
                [
                    'error' => true,
                    'errorMessage' => $exception->getMessage(),
                ]
            );
            return $modelDelivery;
        }
    }

    public function createData(WeaponCaliber $data): ModelDelivery
    {
        $modelDelivery = new ModelDelivery();
        try{
            $dataSaved = WeaponCaliber::create($data->toArray());
            $modelDelivery->fill(
                [
                    'error' => false,
                    'data' => $dataSaved,
                ]
            );
            return $modelDelivery;
        }catch(Exception $exception){
            $modelDelivery->fill(
                [
                    'error' => true,
                    'errorMessage' => $exception->getMessage(),
                ]
            );
            return $modelDelivery;
        }
    }

    public function updateData(WeaponCaliber $data, $dataRequest): ModelDelivery
    {
        $modelDelivery = new ModelDelivery();
        try {
            $data->update($dataRequest->toArray());
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

    public function deleteData(WeaponCaliber $data): ModelDelivery
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
