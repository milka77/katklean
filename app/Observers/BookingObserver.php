<?php

namespace App\Observers;

use App\Models\Booking;
use App\Models\Product;
use App\Mail\BookingConfirmedMail;
use App\Mail\AdminNewBookingMail;
use Illuminate\Support\Facades\Mail;

class BookingObserver
{
    /**
     * Handle the Booking "created" event.
     */
    public function created(Booking $booking): void
    {
        Mail::to(config('mail.admin_address'))
            ->send(new AdminNewBookingMail($booking->load('product')));
    }

    /**
     * Handle the Booking "updated" event.
     */
    public function updated(Booking $booking): void
    {
        if ($booking->wasChanged('status') && $booking->status === 'confirmed') {
            Mail::to($booking->email)
                ->cc('info@katklean.co.uk')
                ->send(new BookingConfirmedMail($booking->load('product')));
        }
    }

    /**
     * Handle the Booking "deleted" event.
     */
    public function deleted(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "restored" event.
     */
    public function restored(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "force deleted" event.
     */
    public function forceDeleted(Booking $booking): void
    {
        //
    }
}
