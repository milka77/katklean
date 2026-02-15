<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Product;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Services\AvailabilityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function create()
    {
        //
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
        'own_equipment' => ['nullable', 'boolean'],
        'message'       => ['nullable', 'string'],
        'house_access'  => ['nullable', 'string'],
        ]);

        $startAt = Carbon::parse($validated['start_at']);
        $duration = (int) $validated['duration_minutes'];
        $endAt = $startAt->copy()->addMinutes($duration);
        
        // dd($startAt);
        /*
        |--------------------------------------------------------------------------
        | 🔒 24 Hour Rule
        |--------------------------------------------------------------------------
        */
        if ($startAt->lt(now()->addHours(24))) {
            return back()->withErrors([
                'start_at' => 'Bookings must be made at least 24 hours in advance.'
            ])->withInput();
        }

        /*
        |--------------------------------------------------------------------------
        | 🔒 Sunday Deep Clean Restriction
        |--------------------------------------------------------------------------
        */
        if ($startAt->isSunday()) {
            $product = Product::find($validated['product_id']);

            if (str_contains(strtolower($product->name), 'deep')) {
                return back()->withErrors([
                    'product_id' => 'Deep cleaning is not available on Sundays.'
                ])->withInput();
            }
        }

        /*
        |--------------------------------------------------------------------------
        | 🔒 Overlap Protection (Race Condition Safe)
        |--------------------------------------------------------------------------
        */
        DB::beginTransaction();

        try {

            $overlap = Booking::where('product_id', $validated['product_id'])
                ->where('start_at', '<', $endAt)
                ->where('end_at', '>', $startAt)
                ->lockForUpdate()
                ->exists();

            if ($overlap) {
                DB::rollBack();

                return back()->withErrors([
                    'start_at' => 'This time slot has just been booked. Please choose another time.'
                ])->withInput();
            }

            if(Auth::user()) {
                $user = Auth::user();
                $user_ID = $user->id;
                
                $booking = Booking::create([
                    // Foreign
                    'user_id' => $user_ID,
                    'product_id' => $validated['product_id'],
    
                    // Rooms
                    'bed'     => $validated['bed'],
                    'bath'    => $validated['bath'],
                    'living'  => $validated['living'],
                    'kitchen' => $validated['kitchen'],
                    'other'   => $validated['other'] ?? 0,
    
                    // Extras
                    'extra_1' => $request->boolean('extra_1'),
                    'extra_2' => $request->boolean('extra_2'),
                    'extra_3' => $request->boolean('extra_3'),
    
                    // Booking
                    'duration_minutes' => $duration,
                    'booking_date'     => $validated['booking_date'],
                    'start_at'         => $startAt,
                    'end_at'           => $endAt,
    
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
                    'own_equipment' => $request->boolean('own_equipment'),
                    'frequency'     => $validated['frequency'],
                    'message'       => $validated['message'] ?? null,
                    'house_access'  => $validated['house_access'] ?? null,
    
                    'status' => 'pending',
                ]);
            } else {
                $booking = Booking::create([
                    // Foreign
                    'product_id' => $validated['product_id'],
    
                    // Rooms
                    'bed'     => $validated['bed'],
                    'bath'    => $validated['bath'],
                    'living'  => $validated['living'],
                    'kitchen' => $validated['kitchen'],
                    'other'   => $validated['other'] ?? 0,
    
                    // Extras
                    'extra_1' => $request->boolean('extra_1'),
                    'extra_2' => $request->boolean('extra_2'),
                    'extra_3' => $request->boolean('extra_3'),
    
                    // Booking
                    'duration_minutes' => $duration,
                    'booking_date'     => $validated['booking_date'],
                    'start_at'         => $startAt,
                    'end_at'           => $endAt,
    
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
                    'own_equipment' => $request->boolean('own_equipment'),
                    'frequency'     => $validated['frequency'],
                    'message'       => $validated['message'] ?? null,
                    'house_access'  => $validated['house_access'] ?? null,
    
                    'status' => 'pending',
                ]);
            }

        DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        toastr('success', 'Your booking has been created successfully.');
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
    public function update(Request $request, $id)
    {
        //
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

    /**
     * Admin Functions *
     */
    public function adminIndex()
    {
        $bookings = Booking::all();

        return view('components.admin.booking.index', compact('bookings'));
    }
}
