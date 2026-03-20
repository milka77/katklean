<x-layout>
  @section('content')
    <div class="md:mx-20 lg:mx-50 py-15 px-2 md:px-0">
      <h2 class="text-center text-4xl md:text-5xl font-semibold pb-7 text-black">My Bookings</h2>

      <div class="border w-full md:w-2/3 mx-auto rounded-2xl border-slate-300 bg-slate-100 p-2 md:p-5">
        <p class="text-center  pb-3">Welcome {{ Auth()->user()->first_name }} </p>

        <div class="border rounded-2xl border-slate-300 bg-stone-50 pt-3">

            <div class="p-4 ">

              <div class="flex justify-center px-2 py1">
                  @if(Auth()->user()->bookings->first())
                  @php
                      $nextBooking = Auth()->user()->bookings
                          ->where('start_at', '>=', now())
                          ->sortBy('start_at')
                          ->first();
                  @endphp
                      <p class="pb-4">Your next upcoming booking is on <span class="font-semibold">{{ $nextBooking->booking_date }}</span> at <span class="font-semibold">{{ \Illuminate\Support\Str::substr($nextBooking->start_at, 11, 5) }}</span>, booking reference <span class="font-semibold">{{ $nextBooking->reference }}</span>.</p>

                  @endif
              </div>

                {{-- End of Unoming Bookings  --}}
                <p class="px-2 text-lg font-semibold text-center">Upcoming Bookings</p>
                <hr class="text-slate-300 mb-2">
                <div class=" py1">
                    @if (Auth()->user()->bookings->first())
                        <table class="w-full table-auto bg-slate-200">
                            <thead>
                                <tr class="text-left">
                                    <th class="px-2 py-2">Booking date</th>
                                    <th class="px-2 py-2">Booking reference</th>
                                    <th class="px-2 py-2">Time</th>
                                    <th class="px-2 py-2">Price</th>
                                    <th class="px-2 py-2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($upcomingBookings as $booking)
                                <tr class="odd:bg-white even:bg-slate-100 {{ $booking->booking_date < now() ? 'text-gray-500' : '' }}">
                                    <td class="px-2 py-2">{{ $booking->booking_date }}</td>
                                    <td class="px-2 py-2">{{ $booking->reference }}</td>
                                    <td class="px-2 py-2">{{ \Illuminate\Support\Str::substr($booking->start_at, 11, 5) }}</td>
                                    <td class="px-2 py-2">£{{ $booking->total_price }}</td>
                                    <td class="px-2 py-2"><span class="{{ $booking->status == 'confirmed' ? 'bg-green-500 px-2 py-0.5 rounded text-white' : 'bg-orange-400  px-4 py-0.5 rounded text-white' }}">{{ $booking->status }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="py-2">{{ $upcomingBookings->links() }}</div>
                        <p class="text-center">If you need to change you bookings, please <a href="{{ route('contact') }}" class="font-semibold cursor-pointer">contact us</a> with the booking reference you want to change.</p>
                        <hr class="text-slate-300 mb-2">
                    @else
                        <p class="px-2">You have not made any bookings yet.</p>
                        <hr class="text-slate-300 my-2">

                    @endif
                    <div class="flex flex-row justify-center gap-4 mt-5 pb-3">
                        <button class="bg-slate-600 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded cursor-pointer"><a href="{{ route('profile') }}">My profile</a></button>

                        <button class="bg-slate-600 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded cursor-pointer"><a href="{{ route('booking') }}">Book now</a></button>

                    </div>


                </div>
                {{-- End of Unoming Bookings  --}}

                {{-- Booking history  --}}
                <p class="px-2 mt-2 text-lg font-semibold text-center">Booking History</p>
                <hr class="text-slate-300 mb-2">
                <div class=" py1">
                    @if (Auth()->user()->bookings->first())
                        <table class="w-full table-auto bg-slate-200">
                            <thead>
                            <tr class="text-left">
                                <th class="px-2 py-2">Booking date</th>
                                <th class="px-2 py-2">Booking reference</th>
                                <th class="px-2 py-2">Time</th>
                                <th class="px-2 py-2">Price</th>
                                <th class="px-2 py-2">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($historyBookings as $booking)
                                <tr class="odd:bg-white even:bg-slate-100 {{ $booking->booking_date < now() ? 'text-gray-500' : '' }}">
                                    <td class="px-2 py-2">{{ $booking->booking_date }}</td>
                                    <td class="px-2 py-2">{{ $booking->reference }}</td>
                                    <td class="px-2 py-2">{{ \Illuminate\Support\Str::substr($booking->start_at, 11, 5) }}</td>
                                    <td class="px-2 py-2">£{{ $booking->total_price }}</td>
                                    <td class="px-2 py-2"><span class="{{ $booking->status == 'confirmed' ? 'bg-green-500 px-2 py-0.5 rounded text-white' : 'bg-orange-400  px-4 py-0.5 rounded text-white' }}">{{ $booking->status }}</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="py-2">{{ $historyBookings->links() }}</div>
                        <hr class="text-slate-300 mb-2">
                    @else
                        <p class="px-2">You have not made any bookings yet.</p>
                        <hr class="text-slate-300 my-2">
                    @endif
                </div>
                {{-- End of Booking history  --}}

              <hr class="text-slate-300 my-2">
              <div class="flex flex-row justify-between">
                 <p class="text-xs pl-2">Account created at:</p><p class="text-xs pr-2">{{ Auth()->user()->created_at->format('d/m/Y H:i') }}</p>
              </div>

              <hr class="text-slate-300 my-2">
            </div>

        </div>


      </div>
    </div>
  @endsection
</x-layout>
