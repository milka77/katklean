<x-layout>
  @section('content')

  <!-- Booking hero -->
  <x-site.hero/>
  <!-- End of Booking hero -->

  <!-- Why Choose us -->
  <div class="md:mx-20 lg:mx-50 py-15">
      <h2 class="text-center text-5xl font-semibold pt-4 pb-10 text-black">Why choose us?</h2>
      <p class="font-semibold text-lg text-center pb-7 max-w-4xl px-3 mx-auto ">Your home is cleaned by the same trusted person every visit, with reliable, consistent cleaning carried out with genuine care. DBS checks and insurance are in place for your peace of mind.</p>
      
  </div>
  <!-- End of Why Choose us -->

  <!-- Services and calculator -->
  <div id="services" class="grid grid-cols-1 md:grid-cols-2">
    <div class=" py-15">
      <h2 class="text-center text-5xl font-semibold pb-5 text-black">Services</h2>
      <p class=" text-center text-lg font-semibold pb-5">Enjoy Your Free Time — Leave the Cleaning to Us</p>
      <div class="grid grid-cols-1 gap-10 py-5 ">
        <ul class="text-center">
          <li class="pb-1 text-lg">Regular Domestic Cleaning</li>
          <li class="pb-1 text-lg">Deep Cleaning (One-Off Service)</li>
          <li class="pb-1 text-lg">End of Tenancy / Airbnb Cleaning</li>
          <li class="pb-1 text-lg">Emergency / Weekend Cleaning</li>
        </ul>        
      </div>
      <div class="flex flex-col-1 justify-center py-7"> 
        <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-8 md:px-10 h-12 mr-2 rounded-full transition cursor-pointer">
          <a class="p-8" href="{{ route('services') }}">More Info </a>
        </button>
      </div>
    </div>

    {{-- Calculator --}}
    <div class="bg-[#ccebed]/75 py-15 min-h-100">
      <h2 class="text-center text-5xl font-semibold pb-10 text-black">Calculator</h2>
      <p class=" text-center text-lg pb-15 md:pb-21 lg:pb-21 xl:pb-21 2xl:pb-28 font-semibold max-w-2/3 lg:max-w-1/2 mx-auto">See how many hours your home may need. Get a quick estimate based on your home’s size, rooms and cleaning requirements.</p>
      
      <div class="flex items-baseline justify-center py-7"> 
        <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-8 md:px-10 h-12 mr-2 rounded-full transition cursor-pointer">
          <a class="p-8" href="{{ route('calculator') }}">More Info </a>
        </button>
      </div>
      
    </div>
  </div>
  <!-- End of Services and calculator-->

  

  <!-- Contact Us -->
  <x-site.contact/>
  <!-- Contact Us -->

@endsection
</x-layout>