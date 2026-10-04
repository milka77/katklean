<x-layout>
  @section('extra-style')
  <meta name="description" content="Reliable house cleaning and domestic cleaning services in Preston. Local professionals delivering high-quality home cleaning.">
  @endsection

  @section('title', 'After Builders Cleaning |')

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
              <a class="p-8" href="{{ route('services') }}">Services</a>
            </button>

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

