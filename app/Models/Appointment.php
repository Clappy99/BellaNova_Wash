<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name', 'surname', 'modelcar', 'description', 'data', 'ora'];

    protected function casts(): array
    {
        return [
            'data' => 'datetime',
        ];
    }
}
