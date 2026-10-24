<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionHero extends Model
{
    protected $guarded = [
        'id',
    ];

    public function profileImages()
    {
        return $this->hasMany(SectionHeroProfileImage::class);
    }
}
