<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
      'date',
      'type',
      'description',
      'amount',
      'user_id',
      'booking_reference',
      'address',
      'exp_shop',
      'exp_product',
      'service',
      'distance',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Booking model
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    // Define the relationship with the Product model
    public function service()
    {
        return $this->belongsTo(Product::class);
    }
}
