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

}
