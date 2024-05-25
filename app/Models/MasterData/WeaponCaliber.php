<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponCaliber extends Model
{
    use HasFactory;

    protected $table = "md_weapon_calibers";

    protected $fillable = [
        'code', 'name', 'created_by', 'updated_by'
    ];
}
