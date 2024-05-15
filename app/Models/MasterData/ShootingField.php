<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShootingField extends Model
{
    use HasFactory;

    protected $table = "md_shooting_fields";

    protected $fillable = [
        'code', 'name', 'created_by', 'updated_by'
    ];
}
