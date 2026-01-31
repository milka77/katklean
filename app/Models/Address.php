<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address_line1',
        'city',
        'postcode',
    ];


    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
