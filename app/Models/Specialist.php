<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $guarded = [
        'id',
    ];

    public function terapists()
    {
        return $this->hasMany(Terapist::class);
    }
}
