<x-layout>
  @section('content')
    <div class="md:mx-20 lg:mx-50 py-15 px-2 md:px-0">
      <h2 class="text-center text-4xl md:text-5xl font-semibold pb-7 text-black">Profile</h2>

      <div class="border w-full md:w-125 mx-auto rounded-2xl border-slate-300 bg-slate-100 p-2 md:p-5">
        <p class="text-center  pb-3">User Profile for {{ Auth()->user()->first_name }} {{ Auth()->user()->last_name }}</p>
        
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
                
              <p class="px-2 text-lg font-semibold">Address</p>
              <hr class="text-slate-300 mb-2">
              <div class="flex flex-row justify-between px-2 py1 ">
                <p>Street Address: </p><p>{{ Auth()->user()->street_address }}</p>  
              </div>
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