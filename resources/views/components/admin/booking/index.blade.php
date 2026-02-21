<x-admin-layout>
    @section('content')
    <div class="mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold mb-6 pl-5">Bookings</h2>
      
      <table class="bg-slate-100 text-center table-fixed min-w-full">
        <thead>
          <tr class="bg-slate-400">
            <th class="no-wrap border-b border-slate-400">ID</th>
            <th class="no-wrap border-b border-slate-400">Ref</th>
            <th class="no-wrap border-b border-slate-400 min-w-30">Date</th>
            <th class="no-wrap border-b border-slate-400 min-w-50">Start</th>
            <th class="no-wrap border-b border-slate-400 min-w-50">End</th>
            <th class="no-wrap border-b border-slate-400">Duration (mins)</th>
            <th class="no-wrap border-b border-slate-400 min-w-50">Name</th>
            <th class="no-wrap border-b border-slate-400 min-w-50">Address</th>
            <th class="no-wrap border-b border-slate-400 min-w-25">Postcode</th>
            <th class="no-wrap border-b border-slate-400">Town</th>
            <th class="no-wrap border-b border-slate-400">Email</th>
            <th class="no-wrap border-b border-slate-400">Phone</th>
            <th class="no-wrap border-b border-slate-400">User ID</th>
            <th class="no-wrap border-b border-slate-400 min-w-50">Product</th>
            <th class="no-wrap px-3 border-b border-slate-400">Bed</th>
            <th class="no-wrap px-3 border-b border-slate-400">Bath</th>
            <th class="no-wrap px-3 border-b border-slate-400">Living</th>
            <th class="no-wrap px-3 border-b border-slate-400">Kitchen</th>
            <th class="no-wrap px-3 border-b border-slate-400">Other</th>
            <th class="no-wrap px-4 border-b border-slate-400 min-w-25">Extra-1</th>
            <th class="no-wrap px-4 border-b border-slate-400 min-w-25">Extra-2</th>
            <th class="no-wrap px-4 border-b border-slate-400 min-w-25">Extra-3</th>
            <th class="no-wrap border-b border-slate-400">Message</th>
            <th class="no-wrap border-b border-slate-400">House Access</th>
            <th class="no-wrap border-b border-slate-400">Payment</th>
            <th class="no-wrap border-b border-slate-400">Payment Status</th>
            <th class="no-wrap border-b border-slate-400">Total Price</th>
            <th class="no-wrap border-b border-slate-400">Frequency</th>
            <th class="no-wrap border-b border-slate-400">Recurring_group_id</th>
            <th class="no-wrap border-b border-slate-400">Own Equipment</th>
            <th class="no-wrap border-b border-slate-400">Status</th>
            <th class="no-wrap border-b border-slate-400">Confirm Payment</th>
            <th class="no-wrap border-b border-slate-400">Confirm Booking</th>
            <th class="no-wrap border-b border-slate-400">Edit Booking</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bookings as $booking)
          <tr class="odd:bg-slate-50 even:bg-slate-200">
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->id }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->reference }}</td>
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
                Guest
              @endif
            </td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->product->name }}</td>
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
            <td class="py-2 px-4 border-b border-slate-400">£{{ $booking->total_price }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->frequency }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->recurring_group_id }}</td>
            <td class="py-2 px-4 border-b border-slate-400">@if ($booking->own_equipment == 0) No @else Yes @endif </td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->status }}</td>
            <td class="py-2 px-4 border-b border-slate-400">
              <a href="">blah</a>
            </td>
            <td class="py-2 px-4 border-b border-slate-400">
              <form action="{{ route('admin.booking.confirmation', $booking->id) }}" method="POST" class="inline">
                @csrf
                @method('PUT')
                <button type="submit" class="border border-green-600 hover:bg-green-500 text-green-500 hover:text-white font-bold px-2 rounded cursor-pointer">Confirm</button>
                </form>
            </td>
            <td class="py-2 px-4 border-b border-slate-400">
              <a href="{{ route('admin.booking.show', $booking) }}" class="border border-green-600 hover:bg-green-500 text-green-500 hover:text-white font-bold px-2 rounded cursor-pointer">Edit</a>
            </td>
          @endforeach
        </tbody>
      </table>
       
    </div>
    @endsection
</x-admin-layout>