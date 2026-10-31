<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contactFilter extends Model
{
    protected $fillable = [
        'email',
        'text',
        'reason',
        'is_active',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
