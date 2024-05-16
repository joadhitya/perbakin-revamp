<?php

namespace App\Repositories\MasterData;

use App\Models\General\ModelDelivery;
use App\Models\MasterData\WeaponCategory;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class WeaponCategoryRepository implements WeaponCategoryRepositoryInterface
{
    public function getAllData(): Collection
    {
        return WeaponCategory::all();
    }

    public function getDataByID(int $id): ModelDelivery
    {
        $modelDelivery = new ModelDelivery();
        try{
            $data = WeaponCategory::findOrFail($id);
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

    public function createData(WeaponCategory $data): ModelDelivery
    {
        $modelDelivery = new ModelDelivery();
        try{
            $dataSaved = WeaponCategory::create($data->toArray());
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

    public function updateData(WeaponCategory $data, $dataRequest): ModelDelivery
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

    public function deleteData(WeaponCategory $data): ModelDelivery
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
