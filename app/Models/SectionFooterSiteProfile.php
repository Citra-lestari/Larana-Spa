<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionFooterSiteProfile extends Model
{
    protected $guarded = [
        'id',
    ];

    public function sectionFooter()
    {
        return $this->belongsTo(SectionFooter::class, 'id_section_footer');
    }
}
