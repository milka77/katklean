<?php

namespace App\Services;

use App\Models\Booking;
use Carbon\Carbon;
use function Webmozart\Assert\Tests\StaticAnalysis\email;

class RecurringBookingService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

  public function createNextIfNeeded(Booking $booking)
  {
    // Only proceed if recurring
    if (!$booking->recurring_group_id || !$booking->recurring_active) {
      return;
    }

    $futureCount = Booking::where('recurring_group_id', $booking->recurring_group_id)
      ->where('start_at', '>', now())
      ->whereNotIn('status', ['completed', 'cancelled'])
      ->count();

    if ($futureCount >= 6) {
      return;
    }

    $frequency = $booking->frequency;

    $lastBooking = Booking::where('recurring_group_id', $booking->recurring_group_id)
      ->latest('start_at')
      ->first();


    $nextStart = match ($frequency) {
      'weekly' => $lastBooking->start_at->copy()->addWeek(),
      'fortnightly' => $lastBooking->start_at->copy()->addWeeks(2),
      'monthly' => $lastBooking->start_at->copy()->addMonth(),
      default => null,
    };


    if (!$nextStart) {
      return;
    }

    $duration = $lastBooking->duration_minutes;
    $nextEnd = $nextStart->copy()->addMinutes($duration);

    // Check availability
    $overlap = Booking::where('product_id', $booking->product_id)
      ->where('start_at', '<', $nextEnd)
      ->where('end_at', '>', $nextStart)
      ->exists();

    if ($overlap) {
      // Optionally notify admin here
      return;
    }

    Booking::create([
      'recurring_group_id' => $booking->recurring_group_id,
      'user_id' => $booking->user_id,
      'product_id' => $booking->product_id,
      'booking_date' => $nextStart->toDateString(),
      'bed' => $booking->bed,
      'bath' => $booking->bath,
      'living' => $booking->living,
      'kitchen' => $booking->kitchen,
      'other' => $booking->other,
      'extra_1' => $booking->extra_1,
      'extra_2' => $booking->extra_2,
      'extra_3' => $booking->extra_3,
      'start_at' => $nextStart,
      'end_at' => $nextEnd,
      'duration_minutes' => $duration,
      'frequency' => $frequency,
      'status' => 'pending',
      'name' => $booking->name,
      'address_line1' => $booking->address_line1,
      'postcode' => $booking->postcode,
      'town' => $booking->town,
      'email' => $booking->email,
      'phone' => $booking->phone,
      'payment_method' => $booking->payment_method,
      'payment_status' => 'pending',
      'total_price' => $booking->total_price,
      'own_equipment' => $booking->own_equipment,
      'message' => $booking->message,
      'house_access' => $booking->house_access,
      'recurring_active' => true,
    ]);
  }
}
