<x-layout>
  @section('content')
    <div class="md:mx-20 lg:mx-50 py-15 px-2 md:px-0">
      <h2 class="text-center text-4xl md:text-5xl font-semibold pb-7 text-black">Profile</h2>

      <div class="border w-full md:w-125 mx-auto rounded-2xl border-slate-300 bg-slate-100 p-2 md:p-5">
        <p class="text-center  pb-3">Adding an address for {{ Auth()->user()->first_name }} {{ Auth()->user()->last_name }}</p>
        
        <div class="border rounded-2xl border-slate-300 bg-stone-50 pt-3">

            <div class="p-4 ">
              <p class="px-2 text-lg font-semibold">Name and email</p>
              <hr class="text-slate-300 mb-2">
              <div class="flex flex-row justify-between px-2 py1 ">
                <p>First name: </p><p>{{ Auth()->user()->first_name }}</p>
              </div>
              <div class="flex flex-row justify-between px-2 py1">
                <p>Last name: </p><p>{{ Auth()->user()->last_name }}</p>
              </div>
              <div class="flex flex-row justify-between px-2 py1 pb-4">
                  <p>Email: </p><p>{{ Auth()->user()->email }}</p>  
              </div>
                
              <p class="px-2 text-lg font-semibold">Please enter your address</p>
              <hr class="text-slate-300 mb-2">
              <form action="{{ route('address.store') }}" method="post">
                @csrf
                <div class="mb-4">
                  <label for="address_line1" class="block ">Address Line 1: <span class="text-xs italic">(House nr and street name)</span></label>
                  <input type="text" id="address_line1" name="address_line1" class="w-full px-3 py-2 border rounded border-slate-300" required>
                </div>
                <div class="mb-4">
                  <label for="city" class="block ">City:</label>
                  <input type="text" id="city" name="city" class="w-full px-3 py-2 border rounded border-slate-300" required>
                </div>
                <div class="mb-4">
                  <label for="postcode" class="block ">Postcode:</label>
                  <input type="text" id="postcode" name="postcode" class="w-full px-3 py-2 border rounded border-slate-300" required>
                </div>
                <div class="flex justify-between px-2">
                  <a class="border border-red-600 hover:bg-red-500 text-red-500 hover:text-white font-bold py-2 px-4 rounded cursor-pointer" href="{{ route('profile') }}">Cancel</a>
                  <button type="submit" class="bg-slate-600 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded cursor-pointer">Save Address</button>

                </div>
              </form>
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