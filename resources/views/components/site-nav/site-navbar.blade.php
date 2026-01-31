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
    <!-- Login / Signup buttons -->
    @guest
        <a class="text-white md:flex hidden hover:text-white/70 transition text-lg pl-5" href="{{ route('login') }}">Login</a>
    @endguest
    @auth
    <el-dropdown class="hidden md:inline-block ">
        <button class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring-1 inset-ring-white/5 hover:bg-white/20">
            
            @auth
                <p>{{ Auth()->user()->first_name }}</p>
            @endauth

            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="-mr-1 size-5 text-gray-400">
            <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
            </svg>
        </button>

        <el-menu anchor="bottom end" popover class="w-30 origin-top-right rounded-md bg-slate-700 outline-1 -outline-offset-1 outline-white/10 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
            <div class="py-1">
            <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">Profile</a>
            @auth
            <a class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden" href="{{ route('logout') }}">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="cursor-pointer">Logout</button>  
                </form>
            </a>
            @endauth
            </div>
        </el-menu>
    </el-dropdown>
    @endauth
    <!-- End of Login / Signup buttons -->

    <!-- Mobile menu button -->
    <button id="menu-toggle" aria-label="menu-btn" type="button" class="menu-btn inline-block md:hidden active:scale-90 transition">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="#fff">
            <path d="M3 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2z"/>
        </svg>
    </button>

    <div id="mobile-menu" class="mobile-menu absolute top-[70px] left-0 w-full bg-slate-700 p-6 hidden md:hidden">
        <ul class="flex flex-col space-y-4 text-white text-lg">
            <li><a href="{{ route('home')  }}" class="text-sm">Home</a></li>
            {{-- <li><a href="{{ route('about') }}" class="text-sm">About Us</a></li> --}}
            <li><a href="{{ route('services') }}" class="text-sm">Services</a></li>
            <li><a href="{{ route('faq') }}" class="text-sm">F.A.Q.s</a></li>
            <li><a href="{{ route('contact') }}" class="text-sm">Contact Us</a></li>
            <li><a href="{{ route('calculator') }}" class="text-sm">Calculator</a></li>
            <li><a href="{{ route('booking') }}" class="text-sm">Book Now</a></li>
            @guest
            <li><a href="{{ route('login') }}" class="text-sm">Login</a></li>
            @endguest
            @auth
            <hr class="border-slate-600 w-full">
            <li><a href="{{ route('profile') }}" class="text-sm">Profile</a></li>
            <li><a href="{{ route('logout') }}" class="text-sm">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="cursor-pointer">Logout</button>  
                </form>         
            </a></li>
            @endauth    
        </ul>
    </div>
    <!-- End of Mobile menu button -->
</nav>