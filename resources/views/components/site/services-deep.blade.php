<x-layout>
  @section('extra-style')
  <meta name="description" content="Reliable house cleaning and domestic cleaning services in Preston. Local professionals delivering high-quality home cleaning.">
  @endsection

  @section('title', 'Deep Cleaning |')


  @section('content')
  <!-- Services -->
  <div class="pb-5">
    <div id="services" class="md:mx-20 lg:mx-50 pt-15 pb-2 ">
        <h2 class="text-center text-5xl font-semibold pb-5 text-black">Services</h2>
        {{-- <div>
          <p class="font-semibold text-lg text-center pb-7 px-5 md:px-0">Enjoy Your Free Time — Leave the Cleaning to Us</p>
          <p class="pb-5 w-2/3 mx-auto text-center px-3 sm:px-3">After a long, busy working week, the last thing you want to do is spend your valuable time cleaning. Let us take care of it for you. We provide reliable, thorough and professional cleaning services so you can relax, recharge and enjoy a fresh, spotless home. Whether it’s a one-off clean or regular service, we’re here to make your life easier.</p>
        </div> --}}
    </div>
    <div class="grid grid-cols-1 gap-10 md:mx-20 lg:mx-50 pb-15">
      
      {{--  Deep clean --}}
      <div class="flex flex-col w-2/3 mx-auto items-center justify-center border-t border-cyan-900/40">
        <div class="mt-5 space-y-2 text-center">
          <h3 class="text-[27px] font-bold text-black pt-7 capitalize">Occupied home deep clean</h3>
          <p class="text-lg font-semibold text-black pb-10">Includes everything in Standard, plus the following:</p>

          <p class="text-lg text-left font-bold text-black pt-3 pb-2">Bedroom</p>
          <ul class="text-left list-disc py-1 md:pl-10 md:pr-3 pb-7">
            <li>Removal of built-up dust from skirting boards, frames and ledges</li>
            <li>Cleaning of internal doors, frames and light switches</li>
            <li>Dust removal from walls and accessible ceiling areas</li>
            <li>Dusting and detailing of bedside tables, wardrobes and accessible furniture</li>
            <li>Cleaning underneath accessible furniture</li>
            <li>Dusting of decorative items and detailed areas</li>
            <li>Dust removal from blinds, radiators, vents and light fittings</li>
            <li>Window glass, frames and ledges cleaned</li>
            <li>Attention to edges, corners and hard-to-reach areas</li>
          </ul>

          <p class="text-lg text-left font-bold text-black pt-3 pb-2">Living room / Dining room</p>
          <ul class="text-left list-disc py-1 md:pl-10 md:pr-3 pb-7">
            <li>Removal of built-up dust from skirting boards, frames and ledges</li>
            <li>Cleaning of internal doors, frames and light switches</li>
            <li>Dust removal from walls and accessible ceiling areas</li>
            <li>Dusting and detailing of accessible furniture and built-in units</li>
            <li>Cleaning underneath accessible furniture</li>
            <li>Dusting of decorative items and detailed areas</li>
            <li>Dust removal from blinds, radiators, vents and light fittings</li>
            <li>Window glass, frames and ledges cleaned</li>
            <li>Attention to edges, corners and hard-to-reach areas</li>
          </ul>

          <p class="text-lg text-left font-bold text-black pt-3 pb-2">Bathroom</p>
          <ul class="text-left list-disc py-1 md:pl-10 md:pr-3 pb-7">
            <li>Detailed descaling of taps, fixtures, shower areas and surrounding surfaces</li>
            <li>Detailed cleaning around and behind the toilet base</li>
            <li>Detailed cleaning of tiles and accessible grout</li>
            <li>Shower glass polished for a sparkle finish</li>
            <li>Bathroom mirrors polished</li>
            <li>Cleaning of the extractor fan and vent areas</li>
            <li>Cleaning of light switches, doors and frames</li>
            <li>Removal of built-up dust from skirting boards and detailed areas</li>
            <li>Dust removal from walls and accessible ceiling areas</li>
            <li>Thorough vacuuming and detailed floor mopping/cleaning</li>
            <li>Window glass, frames and ledges cleaned</li>
            <li>Attention to edges, corners and hard-to-reach areas</li>
          </ul>

          <p class="text-lg text-left font-bold text-black pt-3 pb-2">Kitchen</p>
          <ul class="text-left list-disc py-1 md:pl-10 md:pr-3 pb-7">
            <li>Detailed cleaning and descaling of sink area, taps and surrounding surfaces</li>
            <li>Detailed cleaning and degreasing of splashbacks, tiles and accessible cooking areas</li>
            <li>Detailed degreasing of hob and cooker hood/extractor</li>
            <li>Tops of cupboards and cabinets cleaned where accessible</li>
            <li>Cleaning underneath accessible appliances where possible</li>
            <li>Fridge cleaned internally if emptied beforehand</li>
            <li>Removal of built-up grease, dust and residue from accessible surfaces</li>
            <li>Cleaning of internal doors, frames and light switches</li>
            <li>Dust removal from radiators, vents and light fittings</li>
            <li>Thorough vacuuming and detailed floor mopping/cleaning</li>
            <li>Window glass, frames and ledges cleaned</li>
            <li>Attention to edges, corners and hard-to-reach areas</li>
          </ul>

          <p class="font-semibold pb-3">Please note: I do not offer carpet or upholstery cleaning services.</p>

          {{-- <p class="text-2xl font-bold text-black pt-3 pb-3">Approximate deep cleaning prices:</p> --}}
          <p class="font-semibold text-black pb-3 max-w-full md:max-w-2/3 mx-auto">Prices may vary depending on the size of the property, its overall condition and any additional services requested. Please contact us for an accurate quote.</p>
          <table class="hidden table-auto border-collapse w-80 mx-auto text-left">
            <thead class="border-b border-cyan-900/50">
            <tr>
              <th class="pl-3">Bedrooms</th>
              <th class="text-right pr-3">Price from</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">Flat - 1 bed / 1 bath</td>
                  <td class="text-right pr-4">£140</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">Flat - 2 bed / 1 bath</td>
                  <td class="text-right pr-4">£180</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 2 bed / 1 bath</td>
                  <td class="text-right pr-4">£220</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 3 bed / 1 bath</td>
                  <td class="text-right pr-4">£260</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 4 bed / 2 bath</td>
                  <td class="text-right pr-4">£280</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 5 bed / 2 bath</td>
                  <td class="text-right pr-4">£320</td>
                </tr>
            </tbody>
          </table>

          <div class="flex flex-col-1 justify-center p-5">
            <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-8 md:px-10 h-12 mr-2 rounded-full transition cursor-pointer">
              <a class="p-8" href="{{ route('services') }}">Services</a>
            </button>


            <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-8 md:px-10 h-12 mr-2 rounded-full transition cursor-pointer">
              <a class="p-8" href="{{ route('contact') }}">Contact Us</a>
            </button>
          </div>

        </div>
      </div>
      {{--  End of Deep clean --}}
      </div>
    </div>

  <!-- End of Services -->
  @endsection
</x-layout>

