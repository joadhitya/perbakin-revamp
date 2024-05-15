<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDelivery extends Model
{
    protected $fillable = [
        'data',
        'errorMessage',
        'error',
    ];

    protected $casts = [
        'errorMessage' => 'string',
        'error' => 'boolean'
    ];
}
