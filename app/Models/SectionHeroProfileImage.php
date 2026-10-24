<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionHeroProfileImage extends Model
{
    protected $guarded = [
        'id',
    ];

    public function sectionHero()
    {
        return $this->belongsTo(SectionHero::class);
    }
}
