<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TerapistTreatment extends Model
{
    protected $guarded = [
        'id',
    ];

    public function terapist()
    {
        return $this->belongsTo(Terapist::class);
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }
}
