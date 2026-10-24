<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionWhyChooseUsItem extends Model
{
    protected $guarded = [
        'id',
    ];

    public function sectionWhyChooseUs()
    {
        return $this->belongsTo(SectionWhyChooseUs::class);
    }
}
