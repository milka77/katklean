<x-layout>
  @section('extra-style')
  <meta name="title" content="House Cleaning & Domestic Cleaning in Preston | KatKlean">
  <meta name="description" content="Reliable house cleaning and domestic cleaning services in Preston. Local professionals delivering high-quality home cleaning.">
  @endsection

  @section('content')
  <!-- Services -->
  <div class="">
    <div id="services" class="md:mx-20 lg:mx-50 pt-15 pb-2">
        <h2 class="text-center text-5xl font-semibold pb-20 text-black">Services</h2>
        {{-- <div>
          <p class="font-semibold text-lg text-center pb-7 px-5 md:px-0">Enjoy Your Free Time — Leave the Cleaning to Us</p>
          <p class="pb-5 w-2/3 mx-auto text-center px-3 sm:px-3">After a long, busy working week, the last thing you want to do is spend your valuable time cleaning. Let us take care of it for you. We provide reliable, thorough and professional cleaning services so you can relax, recharge and enjoy a fresh, spotless home. Whether it’s a one-off clean or regular service, we’re here to make your life easier.</p>
        </div> --}}
    </div>
    
    {{-- Services Selection --}}
    <div class="flex flex-wrap place-content-center justify-center flex-col md:flex-row gap-5 mb-20">
      {{-- Services Selection card 1  --}}
      <div class="border border-slate-500 rounded-xl shadow-2xl w-65 py-15 hover:bg">
        <img src="{{ asset('images/standard_clean.png') }}" alt="House Cleaning" class="mx-auto mb-3 w-50 h-50 rounded-full shadow-lg sr-only">
        <p class="text-center font-semibold text-xl my-3">Standard Domestic <br> Cleaning</p>
        <p class="text-center pt-5 px-3 mt-8 min-h-40">Weekly or fortnightly maintenance cleaning to keep your home clean, fresh and tidy.</p>
        <div class="text-center pt-9">
          <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-5 md:px-7 h-12 mr-2 rounded-full transition cursor-pointer">
            <a class="p-8" href="{{ route('services.domestic') }}">More info</a>
          </button>
        </div>
      </div>
      {{-- End of Services Selection card 1  --}}

      {{-- Services Selection card 2  --}}
      <div class="border border-slate-500 rounded-xl shadow-2xl w-65 py-15">
        <img src="{{ asset('images/standard_clean.png') }}" alt="House Cleaning" class="mx-auto mb-3 w-50 h-50 sr-only">
        <p class="text-center font-semibold text-xl my-3">Deep <br> Cleaning</p>
        <p class="text-center pt-5 px-3 mt-8 min-h-40">A detailed, intensive clean to refresh and restore your home from top to bottom.</p>
        <div class="text-center pt-9">
          <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-5 md:px-7 h-12 mr-2 rounded-full transition cursor-pointer">
            <a class="p-8" href="{{ route('services.deep') }}">More info</a>
          </button>
        </div>
      </div>
      {{-- End of Services Selection card 2  --}}

      {{-- Services Selection card 3  --}}
      <div class="border border-slate-500 rounded-xl shadow-2xl w-65 py-15">
        <img src="{{ asset('images/standard_clean.png') }}" alt="House Cleaning" class="mx-auto mb-3 w-50 h-50 sr-only">
        <p class="text-center font-semibold text-xl my-3">After Builder's <br> Cleaning</p>
        <p class="text-center pt-5 px-3 mt-8 min-h-40">A detailed clean to remove dust, debris and construction residue after building or renovation work.</p>
        <div class="text-center pt-9">
          <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-5 md:px-7 h-12 mr-2 rounded-full transition cursor-pointer">
            <a class="p-8" href="{{ route('services.builders') }}">More info</a>
          </button>
        </div>
      </div>
      {{-- End of Services Selection card 3  --}}
    </div>
    {{-- End of Services Selection --}}

  <!-- End of Services -->
  @endsection
</x-layout>

