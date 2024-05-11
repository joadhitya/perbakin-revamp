<?php

namespace App\Repositories\MasterData;

use App\Models\MasterData\ShootingField;
use Illuminate\Database\Eloquent\Collection;

class ShootingFieldRepository implements ShootingFieldRepositoryInterface{
    public function getAllData(): Collection
    {
        return ShootingField::all();
    }
}
