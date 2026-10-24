<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionTestimonialDetail extends Model
{
    protected $guarded = [
        'id',
    ];

    public function sectionTestimonial()
    {
        return $this->belongsTo(SectionTestimonial::class, 'section_testimoni_id');
    }
}
