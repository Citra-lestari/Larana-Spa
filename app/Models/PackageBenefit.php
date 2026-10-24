<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageBenefit extends Model
{
    protected $guarded = [
        'id',
    ];

    public function benefitpackage()
    {
        return $this->belongsTo(Package::class);
    }
}
