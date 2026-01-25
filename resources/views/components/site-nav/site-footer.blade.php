<!-- Footer -->
<footer class="px-6 md:px-16 lg:px-24 xl:px-32 bg-slate-700 transition-all pt-7">
  <div class="flex flex-col md:flex-row items-center justify-between gap-10 py-10 border-b border-gray-300/50 text-white">
    <div>
      <img  width="157" height="40" src="{{ asset('/images/logo.png') }}" alt="katkelan_logo.png">
      {{-- <p class="max-w-[410px] mt-6">Cleaning solution for your home.</p> --}}
    </div>
    <div class="flex flex-wrap flex-col lg:flex-row justify-between w-2/3 md:w-1/2 gap-5 pb-15">
      <div class="border-b border-slate-300 pb-2 md:border-none">
        <h3 class="font-semibold text-base text-gray-200 md:mb-5 mb-2">Quick links</h3>
        <ul class="text-sm space-y-1">
          <li><a class="hover:text-white/70 transition" href="{{ route('terms') }}">Terms & Con.</a> </li>
          <li><a class="hover:text-white/70 transition" href="{{ route('policy') }}">Policies</a> </li>
          <li></li>
        </ul>
      </div>
      <div class="border-b border-slate-300 pb-2 md:border-none">
        <h3 class="font-semibold text-base text-gray-200 md:mb-5 mb-2">Working Hours:</h3>
        <ul class="text-sm space-y-1">
          <li>
            <div class="flex grid-cols-2 place-content-between gap-2">
              <div>Monday - Friday: </div>
              <div>07:00 - 19:00</div>
            </div>
          </li>          
          <li>
            <div class="flex grid-cols-2 place-content-between gap-2">
              <div>Saturday: </div>
              <div>07:00 - 19:00</div>
            </div>
          </li>
          <li>
            <div class="flex grid-cols-2 place-content-between gap-2">
              <div>Sunday: </div>
              <div>09:00 - 14:00</div>
            </div>
          </li>
        </ul>
      </div>
      <div class="border-b border-slate-300 pb-2 md:border-none">
        <h3 class="font-semibold text-base text-gray-200 md:mb-5 mb-2">Covered Areas</h3>
        <ul class="text-sm space-y-1">
          <li><i class="fa-solid fa-location-dot"></i> Preston (main)</li>
          <li><i class="fa-solid fa-location-dot"></i> Bamber Bridge</li>
          <li><i class="fa-solid fa-location-dot"></i> Pentwotham</li>
        </ul>
      </div>
      <div>
        <h3 class="font-semibold text-base text-gray-200 md:mb-5 mb-2">Contact Us</h3>
        <ul class="text-sm space-y-1">
          <li><i class="fa-solid fa-mobile-screen"></i> 07456517365</li>
          <li><i class="fa-solid fa-at"></i> <a href="mailto:info@katklean.co.uk" class="hover:text-white/70 transition">info@katklean.co.uk</a></li>
          <li><i class="fa-brands fa-facebook"></i> <a href="https://www.facebook.com/KatKlean.uk/" target="_blank" class="hover:text-white/70 transition">Facebook</a></li>
        </ul>
      </div>
    </div>
  </div>
  <p class="py-4 text-center text-sm md:text-base text-gray-200">
    Copyright 2026 © {{ config('app.name'), 'KatKlean' }}. All Right Reserved.
  </p>
</footer>
<!-- End of Footer -->