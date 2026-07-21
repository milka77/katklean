<x-layout>
  @section('extra-style')
  <meta name="title" content="House Cleaning & Domestic Cleaning in Preston | KatKlean">
  <meta name="description" content="Reliable house cleaning and domestic cleaning services in Preston. Local professionals delivering high-quality home cleaning.">
  @endsection

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
      <div class="flex flex-col max-w-2/3 mx-auto items-center justify-center">
        <div class="mt-5 space-y-2 text-center sm:px-3">
          <h3 class="text-[27px] font-bold text-black capitalize">Standard Domestic Cleaning</h3>
          <p class="text-lg font-semibold text-black">This service can be booked as a weekly or fortnightly</p>
          <p class="text-lg text-left font-bold text-black pt-3 pb-2">Bedroom</p>
          <ul class="text-left list-disc py-1 md:pl-10 md:pr-3">
            <li>Dust accessible surfaces and furniture</li>
            <li>Remove cobwebs</li>
            <li>Dust window sills</li>
            <li>Wipe light switches and door handles</li>
            <li>Empty and disinfect bins</li>
            <li>Vacuum carpets and floors</li>
            <li>Mop hard floors</li>
          </ul>

          <p class="text-lg text-left font-bold text-black pt-3 pb-2">Living Room / Dining Area</p>
          <ul class="text-left list-disc py-1 md:pl-10 md:pr-3">
            <li>Dust accessible surfaces and furniture</li>
            <li>Remove cobwebs</li>
            <li>Dust window sills</li>
            <li>Wipe light switches and door handles</li>
            <li>Vacuum carpets and floors</li>
            <li>Mop hard floors</li>
          </ul>

          <p class="text-lg text-left font-bold text-black pt-3 pb-2">Bathroom</p>
          <ul class="text-left list-disc py-1 md:pl-10 md:pr-3">
            <li>Clean and disinfect toilet (inside and outside)</li>
            <li>Clean sink and tap</li>
            <li>Clean bath/shower surfaces</li>
            <li>Wipe shower tiles</li>
            <li>Clean shower screen</li>
            <li>Clean mirrors</li>
            <li>Remove cobwebs</li>
            <li>Empty and disinfect bins</li>
            <li>Wipe light switches and door handles</li>
            <li>Vacuum and mop floor</li>
          </ul>

          <p class="text-lg text-left font-bold text-black pt-3 pb-2">Kitchen</p>
          <ul class="text-left list-disc py-1 md:pl-10 md:pr-3 pb-7">
            <li>Clean hob</li>
            <li>Wipe worktops</li>
            <li>Clean sink and tap</li>
            <li>Wipe cupboard fronts (outside)</li>
            <li>Wipe appliance exteriors</li>
            <li>Clean microwave inside and outside</li>
            <li>Vacuum and mop floor</li>
            <li>Remove cobwebs</li>
            <li>Empty and disinfect bins</li>
          </ul>

          <p class="text-lg text-left font-bold text-black pt-3 pb-2">Extras (Available Upon Request)</p>
          <ul class="text-left list-disc py-1 md:pl-10 md:pr-3 pb-7">
            <li>Inside oven cleaning</li>
            <li>Inside fridge cleaning</li>
            <li>Inside cupboards and drawers</li>
            <li>Interior window cleaning</li>
          </ul>

          <p class="text-lg text-left font-bold text-black pt-3 pb-2">Important Notes</p>
          <ul class="text-left list-disc py-1 md:pl-10 md:pr-3 pb-7">
            <li>Cleaning is performed on accessible areas only</li>
            <li>Heavy furniture is not moved</li>
            <li>Heavily cluttered areas may limit cleaning access</li>
            <li>Deep limescale, mould or heavy grease may require a deep cleaning service</li>
          </ul>

          <p class="font-semibold pb-3">Please note: I do not offer carpet or upholstery cleaning services.</p>
          <p>For standard cleaning, a short visit may be recommended for larger properties or where additional information is needed.</p>
          {{-- <p class="text-2xl font-bold text-black pt-3 pb-3">Approximate standard cleaning prices:</p> --}}
          <p class="font-semibold text-black max-w-full md:max-w-2/3 mx-auto">Prices may vary depending on the size of the property, its overall condition and any additional services requested. Please contact us for an accurate quote.</p>
          <table class="hidden table-auto border-collapse w-80 mx-auto  text-left">
            <thead class="border-b border-cyan-900/50">
              <tr>
                <th class="pl-3">Bedrooms</th>
                <th class="text-right pr-3">Price from</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">Flat - 1 bed / 1 bath</td>
                  <td class="text-right pr-4">£50</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">Flat - 2 bed / 1 bath</td>
                  <td class="text-right pr-4">£60</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 2 bed / 1 bath</td>
                  <td class="text-right pr-4">£70</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 3 bed / 1 bath</td>
                  <td class="text-right pr-4">£80</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 4 bed / 2 bath</td>
                  <td class="text-right pr-4">£100</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 5 bed / 2 bath</td>
                  <td class="text-right pr-4">£110</td>
                </tr>
            </tbody>
          </table>
          </div>
          <div class="flex flex-col-1 justify-center p-5">
            <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-8 md:px-10 h-12 mr-2 rounded-full transition cursor-pointer">
              <a class="p-8" href="{{ route('contact') }}">Contact Us</a>
            </button>
          </div>
        </div>

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
              <a class="p-8" href="{{ route('contact') }}">Contact Us</a>
            </button>
          </div>

        </div>
      </div>


        <div class="flex flex-col w-2/3 mx-auto items-center justify-center border-t border-cyan-900/40">
          <div class="mt-5 space-y-2 text-center">
            <h3 class="text-[27px] font-bold text-black pt-7 capitalize">Empty Property / End of Tenancy / After-Build Cleaning</h3>
            <p class="text-lg font-semibold text-black">Property must be fully emptied prior to service.</p>
            <p class="text-lg font-semibold text-black pb-10">Includes everything in Deep clean, plus the following:</p>

            
            <ul class="text-left list-disc py-1 md:pl-10 md:pr-3">
              <li>Intensive dust removal from walls, accessible ceiling areas and all accessible surfaces</li>
              <li>Intensive dust removal from frames, skirting boards, edges and detailed areas</li>
              <li>Thorough disinfecting of high-touch points and sanitary areas</li>
              <li>Detailed degreasing of kitchens, cooking areas and appliances</li>
              <li>Limescale removal from bathrooms, taps, sinks and shower areas where required</li>
              <li>Cleaning inside cupboards, drawers and storage areas</li>
              <li>Cleaning behind and underneath accessible appliances and furniture</li>
              <li>Detailed vacuuming throughout the property</li>
              <li>Detailed floor mopping/cleaning throughout the property</li>
              <li>Removal of built-up residue, marks and renovation dust where accessible</li>
              <li>Detailed cleaning of doors, frames, switches and fittings</li>
              <li>Window glass, frames and ledges cleaned</li>
              <li>Attention to corners, edges and hard-to-reach areas</li>
            </ul>

            <p class="font-semibold pt-8">Please note: I do not offer carpet or upholstery cleaning services.</p>
            <p class="font-semibold">Heavy build-up, mould or excessive limescale may require additional time and cost.</p>
            <p class="font-semibold pb-3">Cleaning is carried out with reasonable care, but some stains, limescale or marks may be permanent and cannot be fully removed.</p>

            {{-- <p class="text-2xl font-bold text-black pt-3 pb-3">Approximate end of tenancy/vacant property deep cleaning prices:</p> --}}
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
                  <td class="text-right pr-4">£180</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">Flat - 2 bed / 1 bath</td>
                  <td class="text-right pr-4">£210</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 2 bed / 1 bath</td>
                  <td class="text-right pr-4">£240</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 3 bed / 1 bath</td>
                  <td class="text-right pr-4">£280</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 4 bed / 2 bath</td>
                  <td class="text-right pr-4">£320</td>
                </tr>
                <tr class="border-b border-cyan-900/50">
                  <td class="pl-3">House - 5 bed / 2 bath</td>
                  <td class="text-right pr-4">£380</td>
                </tr>
              </tbody>
            </table>

            <div class="flex flex-col-1 justify-center p-5">
              <button class="bg-slate-700 text-white hover:bg-slate-900 text-lg text-nowrap px-8 md:px-10 h-12 mr-2 rounded-full transition cursor-pointer">
                <a class="p-8" href="{{ route('contact') }}">Contact Us</a>
              </button>
            </div>

          </div>
        </div>
      </div>
    </div>

  <!-- End of Services -->
  @endsection
</x-layout>

