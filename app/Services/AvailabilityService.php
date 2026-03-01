<?php

namespace App\Services;

use App\Models\Booking;
use App\Models\Product;
use Carbon\Carbon;

class AvailabilityService
{
    protected int $bufferMinutes = 0;

    public function getAvailableSlots(
        string $date,
        int $durationMinutes,
        int $productId
    ): array {

        $date = Carbon::parse($date);
        $duration = (int) $durationMinutes;

        // ✅ Rule 1: Must be at least 24h in advance
        if ($date->startOfDay()->diffInHours(now(), false) > -24) {
            return [];
        }

        $product = Product::findOrFail($productId);

        // ✅ Rule 2: Sunday special hours + no deep clean
        if ($date->isSunday()) {
            return [];

        // ✅ Rule 3: Saturday opening time 9-14
        } elseif ($date->isSaturday()) {

            $openTime  = $date->copy()->setTime(9, 0);
            $closeTime = $date->copy()->setTime(14, 0);

        } else {

            $openTime  = $date->copy()->setTime(7, 0);
            $closeTime = $date->copy()->setTime(19, 0);
        }

        $slots = [];

        while (
            $openTime->copy()
                ->addMinutes($duration + $this->bufferMinutes)
                ->lte($closeTime)
        ) {
            $start = $openTime->copy();
            $end   = $openTime->copy()
                ->addMinutes($duration + $this->bufferMinutes);

            // 24h rule must also block specific time slots
            if ($start->lt(now()->addHours(24))) {
                $openTime->addMinutes(30);
                continue;
            }

            $overlap = Booking::where('product_id', $productId)
                ->where('start_at', '<', $end)
                ->where('end_at', '>', $start)
                ->exists();

            if (! $overlap) {
                $slots[] = $start->format('H:i');
            }

            $openTime->addMinutes(30);
        }

        return $slots;
    }
}
