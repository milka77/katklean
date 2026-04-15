<x-layout>
  @section('content')

  <!-- Booking hero -->
  <x-site.hero/>
  <!-- End of Booking hero -->

  <!-- Why Choose us -->
  <div class="md:mx-20 lg:mx-50 py-15">
      <h2 class="text-center text-5xl font-semibold pt-4 pb-10 text-black">Why choose KatKlean?</h2>
      <div class="flex justify-center pb-4">
        <ul class="font-semibold text-center">
          <li>High standard of work</li>
          <li>Reliable and consistent</li>
          <li>Fully insured and DBS checked</li>
          <li>Focused on results</li>
        </ul>
      </div>
      <p class="font-semibold text-xl text-center pb-7 max-w-4xl px-3 mx-auto ">High standard. No shortcuts. Reliable results.</p>
      
  </div>
  <!-- End of Why Choose us -->

  <!-- Services and calculator -->
  <div id="services" class="bg-[#ccebed]/75">
    <div class=" py-15">
      <h2 class="text-center text-5xl font-semibold pb-10 text-black">Services</h2>
      
      <div class="max-w-4xl mx-auto px-5 text-center">
        <div class="pb-5">
          <h3 class="text-xl font-semibold text-center pb-2">End of Tenancy Cleaning</h3>
          <p class="pl-3">Full property cleaning to prepare for new tenants or final inspections.</p>
        </div>   
        
        <div class="pb-5">
          <h3 class="text-xl font-semibold text-center pb-2">After Builders Cleaning</h3>
          <p class="pl-3">Final (sparkle) clean after building or renovation work.</p>
          <p class="pl-3 pb-2">Dust removal, surface cleaning and finishing touches, leaving the property ready for handover or presentation.</p>
          <p class="pl-3">Sparkle clean only. No heavy building debris or waste removal.</p>        
        </div> 

        <div class="pb-5">
          <h3 class="text-xl font-semibold text-center pb-2">Deep Cleaning</h3>
          <p class="pl-3">A detailed, one-off clean for properties that need extra attention and a higher standard finish.</p>
        </div> 

        <div class="pb-5">
          <h3 class="text-xl font-semibold text-center pb-2">Regular Cleaning (Limited Availability)</h3>
          <p class="pl-3">A small number of regular clients are taken on. Ideal for those looking for a consistent, high-quality service.</p>
        </div>

      </div>
      <hr class="max-w-1/2 mx-auto mt-4 py-4">
      <div class="pb-5 text-center">
        <h3 class="text-xl font-semibold  pb-2">Areas Covered</h3>
        <p class="pl-3" >Preston • Chorley • Blackpool • Surrounding areas</p>
      </div>

      <div class="flex flex-col-1 justify-center py-7"> 
        <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-8 md:px-10 h-12 mr-2 rounded-full transition cursor-pointer">
          <a class="p-8" href="{{ route('services') }}">More Info </a>
        </button>
      </div>

    </div>

    {{-- Calculator --}}
    {{-- <div class="bg-[#ccebed]/75 py-15 min-h-100">
      <h2 class="text-center text-5xl font-semibold pb-10 text-black">Calculator</h2>
      <p class=" text-center text-lg pb-15 md:pb-21 lg:pb-21 xl:pb-21 2xl:pb-28 font-semibold max-w-2/3 lg:max-w-1/2 mx-auto">See how many hours your home may need. Get a quick estimate based on your home’s size, rooms and cleaning requirements.</p>
      
      <div class="flex items-baseline justify-center py-7"> 
        <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-8 md:px-10 h-12 mr-2 rounded-full transition cursor-pointer">
          <a class="p-8" href="{{ route('calculator') }}">More Info </a>
        </button>
      </div>
      
    </div> --}}
  </div>
  <!-- End of Services and calculator-->

  

  <!-- Contact Us -->
  <x-site.contact/>
  <!-- Contact Us -->

@endsection
</x-layout>