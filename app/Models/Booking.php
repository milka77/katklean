<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'bed',
        'bath',
        'living',
        'kitchen',
        'other',
        'extra_1',
        'extra_2',
        'extra_3',
        'message',
        'house_access',
        'duration_minutes',
        'booking_date',
        'start_at',
        'end_at',
        'name',
        'address_line1',
        'postcode',
        'town',
        'email',
        'phone',
        'payment_method',
        'payment_status',
        'total_price',
        'own_equipment',
        'frequency',
        'status',
        'reference',
        'recurring_group_id'
    ];

    // Generating a Booking reference
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($booking) {

            $latest = Booking::latest('id')->first();
            $number = $latest ? $latest->id + 1 : 1;

            $booking->reference = 'BK-' . str_pad($number, 6, '0', STR_PAD_LEFT);
        });
    }

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

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}