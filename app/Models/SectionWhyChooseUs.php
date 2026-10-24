<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionWhyChooseUs extends Model
{
    protected $guarded = [
        'id',
    ];

    public function items()
    {
        return $this->hasMany(SectionWhyChooseUsItem::class);
    }
}
