<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $guarded = [
        'id',
    ];

    public function items()
    {
        return $this->hasMany(NavbarItem::class);
    }
}
