<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionGallery extends Model
{
    protected $guarded = [
        'id',
    ];

    public function items()
    {
        return $this->hasMany(SectionGalleryItem::class);
    }
}
