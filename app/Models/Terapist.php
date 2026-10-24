<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terapist extends Model
{
    protected $guarded = [
        'id',
    ];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class, 'terapist_treatments');
    }
}
