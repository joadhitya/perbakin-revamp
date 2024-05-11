<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShootingField extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'name'
    ];
}
