<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'service_id',
        'bed',
        'bath',
        'living',
        'kitchen',
        'other',
        'windows',
        'inside_fridge',
        'make_beds',
        'message',
        'house_access',
        'duration_minutes',
        'start_at',
        'end_at',
        'name',
        'address_line1',
        'postcode',
        'town',
        'email',
        'phone',
        'payment_type',
        'own_equipment',
        'frequency',
        'status'
    ];

    // User relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Service relationship
    public function service()
    {
        return $this->belongsTo(Product::class);
    }
}