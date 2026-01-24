<nav class="h-[80px] relative w-full px-6 md:px-16 lg:px-24 xl:px-32 flex items-center justify-between z-30 bg-slate-700 transition-all sticky top-0">
    <a href="{{ route('home') }}">
        <img  width="157" height="40" src="{{ URL::asset('/images/logo.png') }}" alt="katkelan_logo.png" srcset="">
    </a>

    <!-- Menu options -->
    <ul class="text-white md:flex hidden items-center gap-10 text-lg">
        <li><a class="hover:text-white/70 transition text-nowrap" href="{{ route('home') }}">Home</a></li>
        {{-- <li><a class="hover:text-white/70 transition text-nowrap" href="{{ route('about') }}">About Us</a></li> --}}
        <li><a class="hover:text-white/70 transition text-nowrap" href="{{ route('services') }}">Services</a></li>            
        <li><a class="hover:text-white/70 transition text-nowrap" href="{{ route('faq') }}">F.A.Q.s</a></li>
        <li><a class="hover:text-white/70 transition text-nowrap" href="{{ route('contact') }}">Contact Us</a></li>
        <li><a class="hover:text-white/70 transition text-nowrap" href="{{ route('calculator') }}">Calculator</a></li>
        <li><a class="hover:text-white/70 transition text-nowrap" href="{{ route('booking') }}">Book Now</a></li>
    </ul>
    <!-- End of Menu options -->

    <a class="text-white md:flex hidden hover:text-white/70 transition text-lg pl-5" href="#contact">Login</a>


    <button aria-label="menu-btn" type="button" class="menu-btn inline-block md:hidden active:scale-90 transition">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="#fff">
            <path d="M3 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2z"/>
        </svg>
    </button>

    <div class="mobile-menu absolute top-[70px] left-0 w-full bg-gradient-to-r from-cyan-500 to-cyan-900 p-6 hidden md:hidden">
        <ul class="flex flex-col space-y-4 text-white text-lg">
            <li><a href="{{ route('home')  }}" class="text-sm">Home</a></li>
            {{-- <li><a href="{{ route('about') }}" class="text-sm">About Us</a></li> --}}
            <li><a href="{{ route('services') }}" class="text-sm">Services</a></li>
            <li><a href="{{ route('faq') }}" class="text-sm">F.A.Q.s</a></li>
            <li><a href="{{ route('contact') }}" class="text-sm">Contact Us</a></li>
            <li><a href="{{ route('calculator') }}" class="text-sm">Calculator</a></li>
            <li><a href="{{ route('booking') }}" class="text-sm">Book Now</a></li>
            <li><a href="#" class="text-sm">Login</a></li>
        </ul>
    </div>
</nav>