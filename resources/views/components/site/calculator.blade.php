<x-layout>
  @section('content')
  <!-- Calculator -->
  <div class="py-5">
    <div id="services" class="md:mx-20 lg:mx-50 pt-15 pb-7 px-2 md:px-0 ">
        <h2 class="text-center text-4xl md:text-5xl font-semibold pb-7 text-black">Time Calculator</h2>
        
        <div class="border w-full md:w-125 mx-auto rounded-2xl border-slate-300 bg-slate-100 p-2 md:p-5">
          <p class="text-center text-lg font-semibold pb-3">Cleaning Time Guide</p>
          <p class="text-center text-sm pb-5">This guide uses a few details about your home and cleaning requirements to provide an approximate time for each visit.</p>
          <div class="border rounded-2xl border-slate-300 bg-stone-50 pt-3">
            
              <div class="flex flex-row place-content-between border-b border-slate-300 pt-1 pb-2 mx-4 pr-2">
                <p class="pl-2 font-semibold">Bedrooms</p>
                <div class="flex border rounded-md border-slate-300">
                  <button id="bed-minus" class="px-3 py-0.5 bg-slate-100 cursor-pointer">--</button>
                  <div id="bed-field" class="border-x  w-9 py-0.5 border-slate-300 px-3">0</div>
                  <button id="bed-plus" class="px-3 py-0.5 bg-slate-100 cursor-pointer">+</button>
                </div>
              </div>
              <div class="flex flex-row place-content-between border-b border-slate-300 py-2 mx-4 pr-2">
                <p class="pl-2 font-semibold">Bathrooms</p>
                <div class="flex border rounded-md border-slate-300">
                  <button id="bath-minus" class="px-3 py-0.5 bg-slate-100 cursor-pointer">--</button>
                  <div id="bath-field" class="border-x w-9 py-0.5 border-slate-300 px-3">0</div>
                  <button id="bath-plus" class="px-3 py-0.5 bg-slate-100 cursor-pointer">+</button>
                </div>
              </div>
              <div class="flex flex-row place-content-between border-b border-slate-300  py-2 mx-4 pr-2">
                <p class="pl-2 font-semibold">Living areas</p>
                <div class="flex border rounded-md border-slate-300">
                  <button id="living-minus" class="px-3 py-0.5 bg-slate-100 cursor-pointer">--</button>
                  <div id="living-field" class="border-x  w-9 py-0.5 border-slate-300 px-3">0</div>
                  <button id="living-plus"  class="px-3 py-0.5 bg-slate-100 cursor-pointer">+</button>
                </div>
              </div>
              <div class="flex flex-row place-content-between border-b border-slate-300 py-2 mx-4 pr-2 mb-6">
                <p class="pl-2 font-semibold">Other rooms</p>
                <div class="flex border rounded-md border-slate-300">
                  <button id="otherroom-minus" class="px-3 py-0.5 bg-slate-100 cursor-pointer">--</button>
                  <div id="otherroom-field" class="border-x  w-9 py-0.5 border-slate-300 px-3">0</div>
                  <button id="otherroom-plus"  class="px-3 py-0.5 bg-slate-100 cursor-pointer">+</button>
                </div>
              </div>
              <div class="flex flex-col pb-2 pt-1 mx-4 sr-only">
                <p class="pl-2 py-2 font-semibold">Optional extras</p>
                <div class="flex place-content-between pb-1 pr-2">
                  <p class="pl-2 font-semibold text-sm">Clean inside window panes</p>
                  
                  <label class="relative inline-flex cursor-pointer items-center gap-3 text-gray-900">
                    <input id="extra-1" type="checkbox" class="peer sr-only" value="0" />
                    <div class="peer h-5 w-10 rounded-full bg-slate-300  transition-colors duration-200 peer-checked:bg-indigo-600 peer-focus:ring-2 peer-focus:ring-indigo-500"></div>
                    <span class="dot absolute top-0.5 left-0.5 h-4 w-4 rounded-full bg-white transition-transform duration-200 ease-in-out peer-checked:translate-x-5"></span>
        
                  </label>
                </div>
                <div class="flex place-content-between pb-1 pr-2">
                  <p class="pl-2 font-semibold text-sm">Fridge interior</p>
                  
                  <label class="relative inline-flex cursor-pointer items-center gap-3 text-gray-900">
                    <input id="extra-2" type="checkbox" class="peer sr-only" value="0"/>
                    <div class="peer h-5 w-10 rounded-full bg-slate-300  transition-colors duration-200 peer-checked:bg-indigo-600 peer-focus:ring-2 peer-focus:ring-indigo-500"></div>
                    <span class="dot absolute top-0.5 left-0.5 h-4 w-4 rounded-full bg-white transition-transform duration-200 ease-in-out peer-checked:translate-x-5"></span>
        
                  </label>
                </div>
                <div class="flex place-content-between pb-1 pr-2">
                  <p class="pl-2 font-semibold text-sm">Make the bed</p>
                  
                  <label class="relative inline-flex cursor-pointer items-center gap-3 text-gray-900">
                    <input id="extra-3" type="checkbox" class="peer sr-only" value="0" />
                    <div class="peer h-5 w-10 rounded-full bg-slate-300  transition-colors duration-200 peer-checked:bg-indigo-600 peer-focus:ring-2 peer-focus:ring-indigo-500"></div>
                    <span class="dot absolute top-0.5 left-0.5 h-4 w-4 rounded-full bg-white transition-transform duration-200 ease-in-out peer-checked:translate-x-5"></span>
        
                  </label>
                </div>

              </div>
              <div class="bg-slate-200/80 text-center pt-3 w-full rounded-b-2xl">
                <p class="font-semibold text-sm">Estimatied time for your clean</p>
                <p class="py-2 text-2xl font-semibold"><span id=result>2</span> hours</p>
                <div class="mx-4 pb-5 text-xs px-10 border-t border-slate-300 pt-2">
                  <p>Minimum booking applies (equivalent to 2 hours). Times shown are estimates only.</p>
                </div>
              </div>
          </div>
        </div>

    </div>
    <div class="flex items-baseline justify-center pb-10"> 
        <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-8 md:px-10 h-12 mr-2 rounded-full transition cursor-pointer">
          <a class="p-8" href="{{ route('booking') }}">Book Now</a>
        </button>
      </div>
  </div>
  <!-- End of Calculator -->
  @endsection
  @section('extra-js')
    <script src="{{ asset('js/calculator.js') }}"></script>

  @endsection
</x-layout>
  
