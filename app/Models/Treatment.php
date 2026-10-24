<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $guarded = [
        'id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function terapists()
    {
        return $this->belongsToMany(Terapist::class, 'terapist_treatments');
    }
}
