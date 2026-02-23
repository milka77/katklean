<?php

namespace App\Observers;

use App\Models\Booking;
use App\Models\Product;
use App\Mail\BookingConfirmedMail;
use App\Mail\AdminNewBookingMail;
use App\Services\RecurringBookingService;
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
      if ($booking->wasChanged('status')) {

        $this->handleStatusChange($booking);
      }
    }

    // Handling the status change of the bookings
    private function handleStatusChange(Booking $booking): void
    {
      if ($booking->status === 'confirmed') {
        $this->sendConfirmationMail($booking);
      }

      if ($booking->status === 'completed') {
        app(RecurringBookingService::class)
          ->createNextIfNeeded($booking);
      }

//      if ($booking->status === 'completed' && $booking->start_at <= now()) {
//        app(RecurringBookingService::class)
//          ->createNextIfNeeded($booking);
//      }
    }

    // Sending confirmation email after the booking has been confirmed
    private function sendConfirmationMail(Booking $booking): void
    {
      Mail::to($booking->email)
        ->cc('info@katklean.co.uk')
        ->send(new BookingConfirmedMail($booking->load('product')));
    }

    // Adding new recurring booking after the first are paid and completed
    private function handleRecurring(Booking $booking): void
    {
      app(RecurringBookingService::class)
        ->createNextIfNeeded($booking);
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
