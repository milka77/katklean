<x-admin-layout>
    @section('content')
    <div class="mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Bookings</h2>
      
      <table class="min-w-1/2 bg-slate-100 text-center">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b border-slate-400">ID</th>
            <th class="py-2 px-4 border-b border-slate-400">Date</th>
            <th class="py-2 px-4 border-b border-slate-400">Start</th>
            <th class="py-2 px-4 border-b border-slate-400">End</th>
            <th class="py-2 px-4 border-b border-slate-400">Duration (mins)</th>
            <th class="py-2 px-4 border-b border-slate-400">Name</th>
            <th class="py-2 px-4 border-b border-slate-400">Address</th>
            <th class="py-2 px-4 border-b border-slate-400">Postcode</th>
            <th class="py-2 px-4 border-b border-slate-400">Town</th>
            <th class="py-2 px-4 border-b border-slate-400">Email</th>
            <th class="py-2 px-4 border-b border-slate-400">Phone</th>
            <th class="py-2 px-4 border-b border-slate-400">User ID</th>
            <th class="py-2 px-4 border-b border-slate-400">Product ID</th>
            <th class="py-2 px-4 border-b border-slate-400">Bed</th>
            <th class="py-2 px-4 border-b border-slate-400">Bath</th>
            <th class="py-2 px-4 border-b border-slate-400">Living</th>
            <th class="py-2 px-4 border-b border-slate-400">Kitchen</th>
            <th class="py-2 px-4 border-b border-slate-400">Other</th>
            <th class="py-2 px-4 border-b border-slate-400">Extra-1</th>
            <th class="py-2 px-4 border-b border-slate-400">Extra-2</th>
            <th class="py-2 px-4 border-b border-slate-400">Extra-3</th>
            <th class="py-2 px-4 border-b border-slate-400">Message</th>
            <th class="py-2 px-4 border-b border-slate-400">House Access</th>
            <th class="py-2 px-4 border-b border-slate-400">Payment</th>
            <th class="py-2 px-4 border-b border-slate-400">Payment Status</th>
            <th class="py-2 px-4 border-b border-slate-400">Total Price</th>
            <th class="py-2 px-4 border-b border-slate-400">Frequency</th>
            <th class="py-2 px-4 border-b border-slate-400">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bookings as $booking)
          <tr>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->id }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->booking_date }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->start_at }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->end_at }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->duration_minutes }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->name }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->address_line1 }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->postcode }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->town }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->email }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->phone }}</td>
            <td class="py-2 px-4 border-b border-slate-400">
              @if($booking->user_id)
                {{ $booking->user->id }}
              @else
                Guest User
              @endif
            </td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->product_id }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->bed }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->bath }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->living }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->kitchen }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->other }}</td>
            <td class="py-2 px-4 border-b border-slate-400">@if ($booking->extra_1 == 0) No @else Yes @endif </td>
            <td class="py-2 px-4 border-b border-slate-400">@if ($booking->extra_2 == 0) No @else Yes @endif </td>
            <td class="py-2 px-4 border-b border-slate-400">@if ($booking->extra_3 == 0) No @else Yes @endif </td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->message }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->house_access }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->payment_method }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->payment_status }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->total_price }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->frequency }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->status }}</td>
          @endforeach
        </tbody>
      </table>
       
    </div>
    @endsection
</x-admin-layout>