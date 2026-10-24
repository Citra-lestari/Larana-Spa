<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionGalleryItem extends Model
{
    protected $guarded = [
        'id',
    ];

    public function sectionGallery()
    {
        return $this->belongsTo(SectionGallery::class);
    }
}
