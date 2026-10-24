<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavbarItem extends Model
{
    protected $guarded = [
        'id',
    ];

    public function navbar()
    {
        return $this->belongsTo(Navbar::class);
    }
}
