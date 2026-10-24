<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionFooter extends Model
{
    protected $guarded = [
        'id',
    ];

    public function siteProfiles()
    {
        return $this->hasMany(SectionFooterSiteProfile::class, 'id_section_footer');
    }
}
