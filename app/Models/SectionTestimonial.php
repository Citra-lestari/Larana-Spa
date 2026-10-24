<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionTestimonial extends Model
{
    protected $guarded = [
        'id',
    ];

    public function testimonialDetails()
    {
        return $this->hasMany(SectionTestimonialDetail::class, 'section_testimoni_id');
    }
}
