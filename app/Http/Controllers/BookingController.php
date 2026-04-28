<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Product;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Mail\BookingConfirmedMail;
use App\Services\AvailabilityService;
use Flasher\Toastr\Prime\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use function Flasher\Prime\flash;
use function Flasher\Toastr\Prime\toastr;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function booking(){
        $services = Product::where('is_extra', false)->get();
        return view('components.site.booking', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        // Foreign
        'product_id' => ['required', 'exists:products,id'],

        // Rooms
        'property_size' => ['required', 'integer'],
        'bed'     => ['required', 'integer'],
        'bath'    => ['required', 'integer'],
        'living'  => ['required', 'integer'],
        'kitchen' => ['required', 'integer'],
        'other'   => ['nullable', 'integer'],
        'hallway'   => ['nullable', 'integer'],
        'flight_of_stairs'   => ['nullable', 'integer'],

        // Extras
        'extra_1' => ['nullable', 'boolean'],
        'extra_2' => ['nullable', 'boolean'],
        'extra_3' => ['nullable', 'boolean'],

        // Booking timing
        'duration_minutes' => ['required', 'integer'],
        'booking_date'     => ['required', 'date'],
        'start_at'         => ['required'],
        'frequency'        => ['required', 'in:once,weekly,fortnightly,monthly'],
        'recurring_active' => ['nullable', 'boolean'],
        'recurring_limit'  => ['nullable', 'integer'],

        // Customer
        'name'          => ['required', 'string', 'max:255'],
        'address_line1' => ['required', 'string'],
        'postcode'      => ['required', 'string'],
        'town'          => ['required', 'string'],
        'email'         => ['required', 'email'],
        'phone'         => ['required', 'string'],

        // Payment
        'payment_method' => ['required', 'string'],
        'total_price'    => ['required', 'numeric'],

        // Other
        'message'       => ['nullable', 'string'],
        'house_access'  => ['nullable', 'string'],
        ]);

        $startAt = Carbon::parse($validated['start_at']);
        $duration = (int) $validated['duration_minutes'];
        $endAt = $startAt->copy()->addMinutes($duration);

        // For recurring bookings
        $startDate = Carbon::parse($validated['booking_date']);
        $frequency = $validated['frequency'];
        $occurrences = 1;
        $groupId = null;
        $recurringActive = false;

        /*
        |--------------------------------------------------------------------------
        | Checking the booking's frequency
        |--------------------------------------------------------------------------
        */
        if($frequency !== 'once'){
            $occurrences = 6;
            $groupId = Str::uuid();
            $recurringActive = true;
        }

        // Collection all recurring dates for check if all dates are available
        $dates = collect();

        for ($i = 0; $i < $occurrences; $i++) {

            $date = match ($frequency) {
                'weekly' => $startDate->copy()->addWeeks($i),
                'fortnightly' => $startDate->copy()->addWeeks($i * 2),
                'monthly' => $startDate->copy()->addMonths($i),
                default => $startDate,
            };

            $recurringStartAt = Carbon::parse(
                $date->toDateString() . ' ' . $startAt->format('H:i:s')
            );
            $recurringEndAt = $recurringStartAt->copy()->addMinutes($duration);

            $dates->push([
                'date' => $date,
                'start_at' => $recurringStartAt,
                'end_at' => $recurringEndAt,
            ]);
        }

        foreach ($dates as $slot) {

            // 🔒 24 hour rule
            if ($slot['date']->lt(now()->addHours(24))) {
                return back()->withErrors([
                    'start_at' => 'All recurring bookings must be at least 24 hours in advance.'
                ])->withInput();
            }

            // 🔒 Sunday Deep Clean rule
            if ($slot['date']->isSunday()) {

                $product = Product::find($validated['product_id']);

                if (str_contains(strtolower($product->name), 'deep')) {
                    return back()->withErrors([
                        'product_id' => 'Deep cleaning is not available on Sundays.'
                    ])->withInput();
                }
            }

            // 🔒 Overlap check
            $overlap = Booking::where('product_id', $validated['product_id'])
                ->where('start_at', '<', $slot['end_at'])
                ->where('end_at', '>', $slot['start_at'])
                ->exists();

            if ($overlap) {
                return back()->withErrors([
                    'start_at' => 'One or more recurring dates are no longer available.'
                ])->withInput();
            }
        }

        try {

            foreach($dates as $slot){
                // Registered user booking
                if(Auth::user()) {
                    $user = Auth::user();
                    $user_ID = $user->id;

                    Booking::create([
                        // Foreign
                        'user_id' => $user_ID,
                        'product_id' => $validated['product_id'],

                        // Rooms
                        'property_size' => $validated['property_size'],
                        'bed'     => $validated['bed'],
                        'bath'    => $validated['bath'],
                        'living'  => $validated['living'],
                        'kitchen' => $validated['kitchen'],
                        'other'   => $validated['other'],
                        'hallway'   => $validated['hallway'],
                        'flight_of_stairs'   => $validated['flight_of_stairs'],

                        // Extras
                        'extra_1' => $request->boolean('extra_1'),
                        'extra_2' => $request->boolean('extra_2'),
                        'extra_3' => $request->boolean('extra_3'),

                        // Booking
                        'duration_minutes' => $duration,
                        'booking_date' => $slot['date']->toDateString(),
                        'start_at'     => $slot['start_at'],
                        'end_at'       => $slot['end_at'],
                        'recurring_group_id' => $groupId,
                        'recurring_active' => $recurringActive,
                        'recurring_limit' => $occurrences,

                        // Customer
                        'name'          => $validated['name'],
                        'address_line1' => $validated['address_line1'],
                        'postcode'      => $validated['postcode'],
                        'town'          => $validated['town'],
                        'email'         => $validated['email'],
                        'phone'         => $validated['phone'],

                        // Payment
                        'payment_method' => $validated['payment_method'],
                        'payment_status' => 'pending',
                        'total_price'    => $validated['total_price'],

                        // Other
                        'frequency'     => $frequency,
                        'message'       => $validated['message'] ?? null,
                        'house_access'  => $validated['house_access'] ?? null,

                        'status' => 'pending',
                    ]);

                // Guest user's booking
                } else {
                    Booking::create([
                        // Foreign
                        'product_id' => $validated['product_id'],

                        // Rooms
                        'property_size' => $validated['property_size'],
                        'bed'     => $validated['bed'],
                        'bath'    => $validated['bath'],
                        'living'  => $validated['living'],
                        'kitchen' => $validated['kitchen'],
                        'other'   => $validated['other'],
                        'hallway'   => $validated['hallway'],
                        'flight_of_stairs'   => $validated['flight_of_stairs'],

                        // Extras
                        'extra_1' => $request->boolean('extra_1'),
                        'extra_2' => $request->boolean('extra_2'),
                        'extra_3' => $request->boolean('extra_3'),

                        // Booking
                        'duration_minutes'   => $duration,
                        'booking_date'       => $slot['date']->toDateString(),
                        'start_at'           => $slot['start_at'],
                        'end_at'             => $slot['end_at'],
                        'recurring_group_id' => $groupId,
                        'recurring_active' => $recurringActive,
                        'recurring_limit' => $occurrences,

                        // Customer
                        'name'          => $validated['name'],
                        'address_line1' => $validated['address_line1'],
                        'postcode'      => $validated['postcode'],
                        'town'          => $validated['town'],
                        'email'         => $validated['email'],
                        'phone'         => $validated['phone'],

                        // Payment
                        'payment_method' => $validated['payment_method'],
                        'payment_status' => 'pending',
                        'total_price'    => $validated['total_price'],

                        // Other
                        'frequency'     => $frequency,
                        'message'       => $validated['message'] ?? null,
                        'house_access'  => $validated['house_access'] ?? null,
                        'status' => 'pending',
                    ]);

                }

            } //end of foreach booking create



        } catch (\Exception $e) {
            throw $e;
            flash()->error('Something went wrong.'. $e);
        }


        return redirect()
        ->back()
        ->with('success', 'Your booking has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Booking $booking, Request $request)
    {
        $validated = $request->validate([
            // Foreign
            'product_id' => ['required', 'exists:products,id'],

            // Rooms
            'bed'     => ['required', 'integer'],
            'bath'    => ['required', 'integer'],
            'living'  => ['required', 'integer'],
            'kitchen' => ['required', 'integer'],
            'other'   => ['nullable', 'integer'],

            // Extras
            'extra_1' => ['nullable', 'boolean'],
            'extra_2' => ['nullable', 'boolean'],
            'extra_3' => ['nullable', 'boolean'],

            // Booking timing
            'duration_minutes' => ['required', 'integer'],
            'booking_date'     => ['required', 'date'],
            'start_at'         => ['required'],

            // Customer
            'name'          => ['required', 'string', 'max:255'],
            'address_line1' => ['required', 'string'],
            'postcode'      => ['required', 'string'],
            'town'          => ['required', 'string'],
            'email'         => ['required', 'email'],
            'phone'         => ['required', 'string'],

            // Payment
            'payment_method' => ['required', 'string'],
            'total_price'    => ['required', 'numeric'],

            // Other
            'frequency'     => ['required', 'string'],
            'message'       => ['nullable', 'string'],
            'house_access'  => ['nullable', 'string'],
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Checking date availability
     */
    public function availability(Request $request, AvailabilityService $availability)
    {
        $request->validate([
            'date' => ['required', 'date'],
            'duration_minutes' => ['required', 'integer', 'min:30'],
            'product_id' => ['required', 'exists:products,id'],
        ]);

        $slots = $availability->getAvailableSlots(
            $request->date,
            (int) $request->duration_minutes,
            (int) $request->product_id
        );

        return response()->json($slots);
    }

    private function isAvailable($date, $time, $productId)
    {
        return !Booking::whereDate('booking_date', $date)
            ->where('booking_time', $time)
            ->exists();
    }

    /**
     * Admin Functions *
     */
    public function adminIndex()
    {
        $bookings = Booking::paginate(10);

        return view('components.admin.booking.index', compact('bookings'));
    }

    public function confirmation(Booking $booking, Request $request)
    {
        $previousStatus = $booking->status;

        if ($booking->status === 'confirmed') {
            return back()->with('info', 'Booking already confirmed.');
        }

        $booking->status = 'confirmed';
        $booking->save();

        flash()->success('Booking was confirmed.');

        return back();
    }

    public function completion(Booking $booking, Request $request)
    {
      $previousStatus = $booking->status;

      if ($booking->status === 'completed') {
        return back()->with('info', 'Booking already completed.');
      }

      $booking->status = 'completed';
      $booking->save();

      flash()->success('Booking was confirmed.');

      return back();
    }

    public function adminShow(Booking $booking)
    {
        $services = Product::where('is_extra', false)->get();

        return view('components.admin.booking.show', compact('booking', 'services'));
    }

    public function calendarData()
    {
      $bookings = Booking::all();

      $events = [];

      foreach ($bookings as $booking) {
        $events[] = [
          'title' => $booking->start_at->format('H:i') . ' - ' . $booking->reference,
          'start' => $booking->start_at,
          'end'   => $booking->end_at,
          'url'   => route('admin.booking.show', $booking->id),
        ];
      }

      return response()->json($events);
    }

    public function calendarShow()
    {
      return view('components.admin.booking.calendar');
    }

    // *******
    // * Admin Add Manual Booking *
    // *******
    public function adminAddManualBooking()
    {
      $services = Product::where('is_extra', false)->get();

      return view('components.admin.booking.add-manual-booking', compact('services'));
    }
}
