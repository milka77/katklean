<!-- Footer -->
<footer class="px-6 md:px-16 lg:px-24 xl:px-32 bg-gradient-to-r from-cyan-500 to-cyan-900 transition-all">
  <div class="flex flex-col md:flex-row items-start justify-between gap-10 py-10 border-b border-gray-300/50 text-gray-200">
    <div>
      <img  width="157" height="40" src="{{ URL::asset('/images/logo.png') }}" alt="katkelan_logo.png">
      <p class="max-w-[410px] mt-6">Cleaning solution for your home.</p>
    </div>
    <div class="flex flex-wrap justify-between w-full md:w-[45%] gap-5">
      <div>
        <h3 class="font-semibold text-base text-gray-200 md:mb-5 mb-2">Quick Links</h3>
        <ul class="text-sm space-y-1">
          <li><a href="#" class="hover:text-white/70 transition">Home</a></li>
          <li><a href="#" class="hover:text-white/70 transition">Contact Us</a></li>
          <li><a href="#" class="hover:text-white/70 transition">FAQs</a></li>
        </ul>
      </div>
      <div>
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
          <li><i class="fa-brands fa-facebook"></i> <a href="https://www.facebook.com/profile.php?id=61585973942630" target="_blank" class="hover:text-white/70 transition">Facebook</a></li>
        </ul>
      </div>
    </div>
  </div>
  <p class="py-4 text-center text-sm md:text-base text-gray-200">
    Copyright 2026 © {{ config('app.name'), 'KatKlean' }}. All Right Reserved.
  </p>
</footer>
<!-- End of Footer -->