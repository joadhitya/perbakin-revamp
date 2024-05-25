<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    use HasFactory;
    protected $table = "md_item_categories";

    protected $fillable = [
        'code', 'name', 'created_by', 'updated_by'
    ];
}
