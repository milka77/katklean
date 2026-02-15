<x-admin-layout>
  @section('content')
  <h2 class="text-2xl font-bold mb-6 pl-5 text-center mx-auto">Update Bookings for {{ $booking->name }}</h2>

  <div class="mx-auto my-5 border border-slate-300 bg-slate-100 p-3 rounded-xl">
    <form action="{{ route('booking.store') }}" method="post" class="grid  rounded-xl">
      @csrf
      {{-- User delails --}}
      <div class="grid bg-stone-50 border border-slate-300 rounded-xl pb-2">
        <p class="font-semibold text-lg text-center py-5">Personal Details:</p>
        <div class=" py-2">
          <div class="flex flex-col px-5 py-2 ">
            <label class="pl-2 pb-1" for="first_name">Name<spam class="text-red-500">*</span></label>
            <input class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="name" id="name" placeholder="Enter your name" 
              value="{{ $booking->name }} ">
            @error('name')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="flex flex-col px-5 pb-2">
            <label class="pl-2 pb-1" for="first_name">Email<spam class="text-red-500">*</span></label>
            <input class="border rounded-md border-slate-300 pl-2 py-1" type="email" name="email" id="email" placeholder="Enter your email address" 
              value="{{ $booking->email }}">
            @error('email')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-2 ">
          <div class="flex flex-col px-5 pb-2">
            <label class="pl-2 pb-1" for="first_name">Phone number<spam class="text-red-500">*</span></label>
            <input class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="phone" id="phone" placeholder="07123456789" value="{{ $booking->phone }}">
            @error('phone')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>

          <div class="flex flex-col px-5 pb-2">
            <label class="pl-2 pb-1" for="first_name">Address<spam class="text-red-500">*</span></label>
            <input class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="address_line1" id="address_line1" placeholder="85 My Street" 
              value="{{ $booking->address_line1 }}">
            @error('address_line1')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>

          <div class="flex flex-col px-5 pb-2">
            <label class="pl-2 pb-1" for="first_name">Town<spam class="text-red-500">*</span></label>
            <input class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="town" id="town" placeholder="Preston" 
              value="{{ $booking->town }}">
            @error('town')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>  
            @enderror
          </div>  

          <div class="flex flex-col px-5 pb-5">
            <label class="pl-2 pb-1" for="first_name">Postcode<spam class="text-red-500">*</span></label>
            <input class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="postcode" id="postcode" placeholder="PR2 xxx" 
              value="{{ $booking->postcode }}">
            @error('postcode')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>  
            @enderror
          </div>

          <div class="flex flex-col px-5 pb-2">
            <label class="pl-2 pb-1" for="first_name">Payment Method<spam class="text-red-500">*</span></label>
            <select class="border rounded-md border-slate-300 pl-2 py-1" name="payment_method" id="payment_method">
              <option value="" disabled selected>Select Payment Method</option>
              <option value="cash" @if($booking->payment_method == 'cash') selected @endif>Cash</option>
              <option value="bank" @if($booking->payment_method == 'bank') selected @endif>Bank Transfer</option>
            </select>
            @error('payment_method')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>  
            @enderror
          </div>

          <div class="flex flex-col px-5 pb-2">
            <label class="pl-2 pb-1" for="first_name">Cleaning Frequency<spam class="text-red-500">*</span></label>
            <select class="border rounded-md border-slate-300 pl-2 py-1" name="frequency" id="frequency">
              <option value="" disabled selected>Select Frequency</option>
              <option value="once" @if($booking->frequency == 'once') selected @endif>Once</option>
              <option value="weekly" @if($booking->frequency == 'weekly') selected @endif>Weekly</option>
              <option value="fortnightly" @if($booking->frequency == 'fortnightly') selected @endif>Fortnightly</option>
              <option value="monthly" @if($booking->frequency == 'monthly') selected @endif>Monthly</option>
            </select>
            @error('frequency')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>  
            @enderror
          </div>
        </div>
      
      </div>
      {{-- End of User delails --}}

      <p class="font-semibold text-xl text-center  py-5">Booking Details:</p>

      <div class="bg-stone-50 border border-slate-300 rounded-xl py-3 mb-3">
        <div class="flex flex-col px-5 pb-2">
          <label class="pl-2 pb-1" for="first_name">Service</label>
            <select class="border rounded-md border-slate-300 pl-2 py-1" name="product_id" id="product_id">
              <option value="" disabled selected>Select A Service</option>
              @foreach ($services as $service)
                <option value="{{ $service->id }}" @if($booking->product_id == $service->id) selected @endif>{{ $service->name }}</option>
              @endforeach
            </select>
          @error('product_id')
            <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
          @enderror
        </div>
        
        {{-- Property details --}}
        <div class="grid grid-cols-2 gap-2 px-5 pb-2">
          {{-- Bedrooms --}}
          <div class="flex flex-col ">
            <label class="pl-2 pb-1" for="first_name">Bedrooms</label>
            <select class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="bed" id="bed" placeholder="Numbers of bedrooms">
              <option value="0" @if($booking->bed == 0) selected @endif>0</option>
              <option value="1" @if($booking->bed == 1) selected @endif>1</option>
              <option value="2" @if($booking->bed == 2) selected @endif>2</option>
              <option value="3" @if($booking->bed == 3) selected @endif>3</option>
              <option value="4" @if($booking->bed == 4) selected @endif>4</option>
              <option value="5" @if($booking->bed == 5) selected @endif>5</option>
              <option value="6" @if($booking->bed == 6) selected @endif>6</option>
              <option value="7" @if($booking->bed == 7) selected @endif>7</option>
              <option value="8" @if($booking->bed == 8) selected @endif>8</option>
              <option value="9" @if($booking->bed == 9) selected @endif>9</option>
              <option value="10" @if($booking->bed == 10) selected @endif>10+</option>
            </select>
            @error('bed')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>
  
          <div class="flex flex-col">
            <label class="pl-2 pb-1" for="first_name">Bathrooms</label>
            <select class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="bath" id="bath" placeholder="Numbers of bathrooms" value="{{ old('bath') }}">
              <option value="0" @if($booking->bath == 0) selected @endif>0</option>
              <option value="1" @if($booking->bath == 1) selected @endif>1</option>
              <option value="2" @if($booking->bath == 2) selected @endif>2</option>
              <option value="3" @if($booking->bath == 3) selected @endif>3</option>
              <option value="4" @if($booking->bath == 4) selected @endif>4</option>
              <option value="5" @if($booking->bath == 5) selected @endif>5+</option>
            </select>
            @error('bath')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>
  
          <div class="flex flex-col">
            <label class="pl-2 pb-1" for="first_name">Kitchen</label>
            <select class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="kitchen" id="kitchen" placeholder="Numbers of kitchens" value="{{ old('kitchen') }}">
              <option value="0" @if($booking->kitchen == 0) selected @endif>0</option>
              <option value="1" @if($booking->kitchen == 1) selected @endif>1</option>
              <option value="2" @if($booking->kitchen == 2) selected @endif>2</option>
              <option value="3" @if($booking->kitchen == 3) selected @endif>3</option>
              <option value="4" @if($booking->kitchen == 4) selected @endif>4</option>
              <option value="5" @if($booking->kitchen == 5) selected @endif>5+</option>
            </select>
            @error('kitchen')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>
  
          <div class="flex flex-col">
            <label class="pl-2 pb-1" for="first_name">Living rooms</label>
            <select class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="living" id="living" placeholder="Numbers of living rooms" value="{{ old('living') }}">
              <option value="0" @if($booking->living == 0) selected @endif>0</option>
              <option value="1" @if($booking->living == 1) selected @endif>1</option>
              <option value="2" @if($booking->living == 2) selected @endif>2</option>
              <option value="3" @if($booking->living == 3) selected @endif>3</option>
              <option value="4" @if($booking->living == 4) selected @endif>4</option>
              <option value="5" @if($booking->living == 5) selected @endif>5+</option>
            </select>
            @error('living')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>
  
          <div class="flex flex-col">
            <label class="pl-2 pb-1" for="first_name">Other rooms</label>
            <select class="border rounded-md border-slate-300 pl-2 py-1" type="selection" name="other" id="other" placeholder="Numbers of other rooms" value="{{ old('other') }}">
              <option value="0" @if($booking->other == 0) selected @endif>0</option>
              <option value="1" @if($booking->other == 1) selected @endif>1</option>
              <option value="2" @if($booking->other == 2) selected @endif>2</option>
              <option value="3" @if($booking->other == 3) selected @endif>3</option>
              <option value="4" @if($booking->other == 4) selected @endif>4</option>
              <option value="5" @if($booking->other == 5) selected @endif>5</option>
              <option value="6" @if($booking->other == 6) selected @endif>6</option>
              <option value="7" @if($booking->other == 7) selected @endif>7</option>
              <option value="8" @if($booking->other == 8) selected @endif>8</option>
              <option value="9" @if($booking->other == 9) selected @endif>9</option>
              <option value="10" @if($booking->other == 10) selected @endif>10+</option>
            </select>
            @error('other')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>
        </div>
        {{-- End of Property details --}}
        <hr class="text-slate-300 mt-2">
        
        {{-- Extras --}}
        <div class="flex flex-col pb-2 pt-1 mx-4">
          <p class="font-semibold pl-2 py-2">Optional extras</p>
          <div class="flex place-content-between pb-1 pr-2">
            <p class="pl-2 text-sm">Clean inside window panes</p>
            
            <label class="relative inline-flex cursor-pointer items-center gap-3 text-gray-900">
              <input id="extra_1" name="extra_1" type="checkbox" class="peer selected:bg-slate-500" value="{{ $booking->extra_1 }}" @if($booking->extra_1 == 1) checked @endif/>
              {{-- <div class="peer h-5 w-10 rounded-full bg-slate-300  transition-colors duration-200 peer-checked:bg-slate-600 peer-focus:ring-2 peer-focus:ring-slate-500"></div>
              <span class="dot absolute top-0.5 left-0.5 h-4 w-4 rounded-full bg-white transition-transform duration-200 ease-in-out peer-checked:translate-x-5"></span>
   --}}
            </label>
          </div>
          <div class="flex place-content-between pb-1 pr-2">
            <p class="pl-2 text-sm">Fridge interior</p>
            
            <label class="relative inline-flex cursor-pointer items-center gap-3 text-gray-900">
              <input id="extra_2" name="extra_2" type="checkbox" class="peer" value={{ $booking->extra_2 }} @if($booking->extra_2 == 1) checked @endif/>
              {{-- <div class="peer h-5 w-10 rounded-full bg-slate-300  transition-colors duration-200 peer-checked:bg-slate-600 peer-focus:ring-2 peer-focus:ring-slate-500"></div>
              <span class="dot absolute top-0.5 left-0.5 h-4 w-4 rounded-full bg-white transition-transform duration-200 ease-in-out peer-checked:translate-x-5"></span>
   --}}
            </label>
          </div>
  
          <div class="flex place-content-between pb-1 pr-2">
            <p class="pl-2 text-sm">Make the bed</p>
            
            <label class="relative inline-flex cursor-pointer items-center gap-3 text-gray-900">
              <input id="extra_3" name="extra_3" type="checkbox" class="peer" value={{ $booking->extra_3 }} @if($booking->extra_3 == 1) checked @endif/>
              {{-- <div class="peer h-5 w-10 rounded-full bg-slate-300  transition-colors duration-200 peer-checked:bg-slate-600 peer-focus:ring-2 peer-focus:ring-slate-500"></div>
              <span class="dot absolute top-0.5 left-0.5 h-4 w-4 rounded-full bg-white transition-transform duration-200 ease-in-out peer-checked:translate-x-5"></span>
   --}}
            </label>
          </div>
  
        </div>
        {{-- End of Extras --}}
        <hr class="text-slate-300 mt-2">
        
        {{-- Booking message and house access --}}
        <div class="grid">
          <div class="flex flex-col px-5 py-2">
            <label class="pl-2 pb-1" for="message">Additional message</label>
            <textarea class="border rounded-md border-slate-300 pl-2 py-1" rows="3" name="message" id="message" placeholder="Any specific instructions or requests?">{{ $booking->message }}</textarea>
            @error('message')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>
  
          <div class="flex flex-col px-5 py-2">
            <label class="pl-2 pb-1" for="house_access">House access details</label>
            <input class="border rounded-md border-slate-300 pl-2 py-1" type="text" name="house_access" id="house_access" placeholder="e.g. Key under mat, call on arrival, etc." value="{{ $booking->house_access }}">
            @error('house_access')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="px-5 pt-2">
            <p class="pl-2 text-sm font-semibold">Select this option if you would like us to use our own equipment.</p>
            <div class="flex flex-row justify-between px-1 py-2">
                
                <p class="pl-1 text-sm">KatKlean's equipment.</p>
                
                <label class="relative inline-flex cursor-pointer items-center gap-3 text-gray-900">
                  <input name="own_equipment" id="own_equipment" type="checkbox" class="peer" value={{ $booking->own_equipment }} @if($booking->own_equipment == 1) checked @endif/>
                  {{-- <div class="peer h-5 w-10 rounded-full bg-slate-300  transition-colors duration-200 peer-checked:bg-slate-600 peer-focus:ring-2 peer-focus:ring-slate-500"></div>
                  <span class="dot absolute top-0.5 left-0.5 h-4 w-4 rounded-full bg-white transition-transform duration-200 ease-in-out peer-checked:translate-x-5"></span>     --}}
                </label>
              
              @error('own_equipment')
                <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>


      </div>


      <input type="hidden" name="duration_minutes" id="duration_minutes" value="0">
      
      {{-- Date and Time --}}
      <div class="grid grid-cols-1 gap-4 px-5 pt-2 pb-4 mb-3 border border-slate-300 rounded-xl bg-stone-50">
        <div class="flex flex-row gap-5 pt-3 mx-auto">
            <label class="pl-2 pt-1">Booking date</label>
            <input
                type="date"
                id="booking_date"
                name="booking_date"
                class="border rounded-md border-slate-300 pl-2 py-1" value="{{ $booking->booking_date }}"/>
            @error('booking_date')
              <p class="p-3 text-red-500 border border-red-500 bg-red-200 rounded-xl text-center">{{  $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col">
            <label class="pl-2 pb-2 mx-auto">Start time</label>
            <div id="start_at_times" class="">
              <input type="datetime" name="start_at" id="start_at" class="border rounded-md border-slate-300 pl-2 py-1" value="{{ $booking->start_at }}">
              
              {{-- <p class="border rounded-md border-slate-300 mx-auto px-2 py-1 cursor-pointer bg-slate-700 hover:bg-slate-500 text-white">07:00</p> --}}
            </div>
        </div>
        @error('start_at')
          <p class="p-3 text-red-500 border border-red-500 bg-red-200 rounded-xl text-center">{{  $message }}</p>
        @enderror
      </div>

      <div class="border border-slate-300 rounded-xl">
        <div class="bg-slate-200/80 text-center pt-3 w-full rounded-2xl">
          <p class="font-semibold text-sm px-5 md:px-15">Prices provided are indicative and based on the information available at the time of booking.</p>
          <p class="text-xs text-center">Any changes will always be discussed and agreed in advance.</p>
          <p class="py-2 text-2xl font-semibold">£ <span id=result>0</span>.00</p>
          <input type="hidden" name="total_price" id="total_price" >
          <div class="mx-4 pb-5 text-xs px-10 border-t border-slate-300 pt-2">
            <p>A minimum visit price applies to all bookings.</p>
          </div>
        </div>
      </div>

      <div class="flex justify-center my-5">
        <button type="submit" class="bg-slate-800 text-white px-4 py-2 rounded-md hover:bg-slate-700 transition-colors cursor-pointer">Update Booking</button>
      </div>
      </div>
    </form>

    {{-- <div class="breely-inline" data-url="https://katklean.breely.com/form/13495"></div> <!-- Add this where you want it embedded --> --}}
    {{-- <iframe class="h-full w-full" src="https://evo3gt.youcanbook.me/"></iframe> --}}
  </div>
  @endsection

  @section('extra-js')
  <script src="{{ asset('js/booking_admin.js') }}" type="text/javascript"></script>
  @endsection
</x-admin-layout>