<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address_line1',
        'city',
        'postcode',
        'user_id',
    ];


    public function users()
    {
        return $this->hasMany(User::class);
    }
}
