<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    protected $fillable = ['weight_date', 'weight', 'note'];

    protected $casts = [
        'weight_date' => 'date',
    ];
}