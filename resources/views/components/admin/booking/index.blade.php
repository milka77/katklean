<x-admin-layout>
    @section('content')
    <div class="mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold mb-6 pl-5">Bookings</h2>

      <table class="bg-slate-100 text-center table-fixed min-w-full">
        <thead>
          <tr class="bg-slate-400">
            <th class="no-wrap border-b border-slate-400">ID</th>
            <th class="no-wrap border-b border-slate-400">Ref</th>
            <th class="no-wrap border-b border-slate-400">Date</th>
            <th class="no-wrap border-b border-slate-400">Start</th>
            <th class="no-wrap border-b border-slate-400">End</th>
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
            <td class="py-2 px-4 border-b border-slate-400">{!! Str::substr($booking->start_at, 10) !!}</td>
            <td class="py-2 px-4 border-b border-slate-400">{!! Str::substr($booking->end_at, 10) !!}</td>
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
            <td class="py-2 px-4 border-b border-slate-400">
              @if ($booking->message)
                <button command="show-modal" commandfor="dialog" class="rounded-md  px-2.5 py-1.5 text-sm font-semibold border border-slate-400 cursor-pointer">Message</button>
                <el-dialog>
                  <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                    <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

                    <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                      <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                        <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                          <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                              <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 452.387"><path fill-rule="nonzero" d="M276.915 436.666c-32.989-9.896-62.965-28.911-87.618-55.815 6.175.567 12.783.958 19.819 1.159 32.31.949 63.167-3.3 91.339-11.815 29.561-8.937 56.687-22.776 79.927-40.41 23.979-18.196 43.56-40.301 57.238-65.17 12.232-22.234 19.84-46.769 21.81-72.836a195.403 195.403 0 0112.994 13.486c19.513 22.316 33.012 48.301 37.715 75.028 4.856 27.594.457 55.851-16.114 81.723-5.048 7.88-11.248 15.52-18.686 22.824l8.165 49.068a15.502 15.502 0 01-.8 8.562c-3.132 8.017-12.171 11.976-20.188 8.844l-55.504-21.826c-44.846 17.676-89.637 19.315-130.097 7.178z"/><path fill="#D8F0F0" d="M212.522 382.09c51.415 47.307 122.9 61.072 194.383 30.61l61.283 24.098-9.593-57.651c57.022-49.859 43.787-119.134-1.727-167.884-3.555 18.854-10.111 36.745-19.248 53.352-13.678 24.869-33.259 46.974-57.238 65.17-23.24 17.634-50.366 31.473-79.927 40.41-27.181 8.215-56.861 12.459-87.933 11.895z"/><path fill-rule="nonzero" d="M369.951 55.167c38.685 33.165 61.879 78.348 60.427 127.704l-.004.172c-1.516 49.407-27.413 93.189-68.065 124.036-39.713 30.136-93.646 47.911-152.383 46.183-15.058-.442-29.669-1.977-43.59-4.684-11.877-2.308-23.389-5.475-34.399-9.545L25.552 371.527l31.949-75.984c-17.241-15.38-31.223-33.198-41.066-52.706C5.175 220.521-.707 196.009.068 170.392 1.561 120.96 27.462 77.156 68.131 46.297c85.638-64.984 220.168-61.131 301.82 8.87z"/><path fill="#91DDAC" d="M220.09 15.665c110.235 3.244 197.422 77.965 194.731 166.89-2.688 88.93-94.233 158.397-204.469 155.154-27.75-.815-54.238-5.665-77.796-15.126l-79.801 24.374 23.518-55.933c-38.601-30.58-62.068-73.422-60.651-120.205 2.685-88.93 94.233-158.395 204.468-155.154z"/><path fill-rule="nonzero" d="M129.631 216.936c-5.368 0-9.72-4.352-9.72-9.72s4.352-9.72 9.72-9.72H249.43c5.368 0 9.72 4.352 9.72 9.72s-4.352 9.72-9.72 9.72H129.631zm0-68.927c-5.368 0-9.72-4.352-9.72-9.72 0-5.367 4.352-9.719 9.72-9.719h171.178c5.368 0 9.719 4.352 9.719 9.719 0 5.368-4.351 9.72-9.719 9.72H129.631z"/></svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                              <h3 id="dialog-title" class="text-base font-semibold text-white">User message:</h3>
                              <div class="mt-2">
                                <p class="text-sm text-gray-400">{{ $booking->message }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                          {{-- <button type="button" command="close" commandfor="dialog" class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button> --}}
                          <button type="button" command="close" commandfor="dialog" class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Close</button>
                        </div>
                      </el-dialog-panel>
                    </div>
                  </dialog>
                </el-dialog>
              @else
                N/A
              @endif

            </td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->house_access }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->payment_method }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->payment_status }}</td>
            <td class="py-2 px-4 border-b border-slate-400">£{{ $booking->total_price }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->frequency }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->recurring_group_id }}</td>
            <td class="py-2 px-4 border-b border-slate-400">@if ($booking->own_equipment == 0) No @else Yes @endif </td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $booking->status }}</td>
            <td class="py-2 px-4 border-b border-slate-400">
              <button command="show-modal" commandfor="admin-options" class="rounded-md  px-2.5 py-1.5 text-sm font-semibold border border-slate-400 cursor-pointer">Options</button>
              <el-dialog>
                <dialog id="admin-options" aria-labelledby="admin-options-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                  <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

                  <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                    <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                      <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                          <div class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 452.387"><path fill-rule="nonzero" d="M276.915 436.666c-32.989-9.896-62.965-28.911-87.618-55.815 6.175.567 12.783.958 19.819 1.159 32.31.949 63.167-3.3 91.339-11.815 29.561-8.937 56.687-22.776 79.927-40.41 23.979-18.196 43.56-40.301 57.238-65.17 12.232-22.234 19.84-46.769 21.81-72.836a195.403 195.403 0 0112.994 13.486c19.513 22.316 33.012 48.301 37.715 75.028 4.856 27.594.457 55.851-16.114 81.723-5.048 7.88-11.248 15.52-18.686 22.824l8.165 49.068a15.502 15.502 0 01-.8 8.562c-3.132 8.017-12.171 11.976-20.188 8.844l-55.504-21.826c-44.846 17.676-89.637 19.315-130.097 7.178z"/><path fill="#D8F0F0" d="M212.522 382.09c51.415 47.307 122.9 61.072 194.383 30.61l61.283 24.098-9.593-57.651c57.022-49.859 43.787-119.134-1.727-167.884-3.555 18.854-10.111 36.745-19.248 53.352-13.678 24.869-33.259 46.974-57.238 65.17-23.24 17.634-50.366 31.473-79.927 40.41-27.181 8.215-56.861 12.459-87.933 11.895z"/><path fill-rule="nonzero" d="M369.951 55.167c38.685 33.165 61.879 78.348 60.427 127.704l-.004.172c-1.516 49.407-27.413 93.189-68.065 124.036-39.713 30.136-93.646 47.911-152.383 46.183-15.058-.442-29.669-1.977-43.59-4.684-11.877-2.308-23.389-5.475-34.399-9.545L25.552 371.527l31.949-75.984c-17.241-15.38-31.223-33.198-41.066-52.706C5.175 220.521-.707 196.009.068 170.392 1.561 120.96 27.462 77.156 68.131 46.297c85.638-64.984 220.168-61.131 301.82 8.87z"/><path fill="#91DDAC" d="M220.09 15.665c110.235 3.244 197.422 77.965 194.731 166.89-2.688 88.93-94.233 158.397-204.469 155.154-27.75-.815-54.238-5.665-77.796-15.126l-79.801 24.374 23.518-55.933c-38.601-30.58-62.068-73.422-60.651-120.205 2.685-88.93 94.233-158.395 204.468-155.154z"/><path fill-rule="nonzero" d="M129.631 216.936c-5.368 0-9.72-4.352-9.72-9.72s4.352-9.72 9.72-9.72H249.43c5.368 0 9.72 4.352 9.72 9.72s-4.352 9.72-9.72 9.72H129.631zm0-68.927c-5.368 0-9.72-4.352-9.72-9.72 0-5.367 4.352-9.719 9.72-9.719h171.178c5.368 0 9.719 4.352 9.719 9.719 0 5.368-4.351 9.72-9.719 9.72H129.631z"/></svg>
                          </div>
                          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="admin-options-title" class="text-base font-semibold text-white">Booking options:</h3>
                            <div class="mt-2 min-w-full">
                                <p class="text-sm text-gray-400">Current status: {{ $booking->status }}</p>
                              <div class="flex justify-between">
                                <p class="text-sm text-gray-400">Compleat booking:</p>
                                <form action="{{ route('admin.booking.completion', $booking->id) }}" method="POST" class="inline">
                                  @csrf
                                  @method('PUT')
                                  <button type="submit" class="border border-green-600 hover:bg-green-500 text-green-500 hover:text-white font-bold px-2 rounded cursor-pointer">Confirm</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        {{-- <button type="button" command="close" commandfor="dialog" class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button> --}}
                        <button type="button" command="close" commandfor="admin-options" class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Close</button>
                      </div>
                    </el-dialog-panel>
                  </div>
                </dialog>
              </el-dialog>
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
