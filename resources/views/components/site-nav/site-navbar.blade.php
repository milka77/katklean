<nav class="h-[70px] relative w-full px-6 md:px-16 lg:px-24 xl:px-32 flex items-center justify-between z-30 bg-gradient-to-r from-cyan-500 to-cyan-900 transition-all sticky top-0">
    <a href="https://katklean.co.uk">
        <img  width="157" height="40" src="{{ URL::asset('/images/logo.png') }}" alt="katkelan_logo.png" srcset="">
    </a>

    <!-- Menu options -->
    <ul class="text-white md:flex hidden items-center gap-10">
        <li><a class="hover:text-white/70 transition" href="#">Home</a></li>
        <li><a class="hover:text-white/70 transition" href="#about">About Us</a></li>
        <li><a class="hover:text-white/70 transition" href="#services">Services</a></li>            
        <li><a class="hover:text-white/70 transition" href="#faq">F.A.Q.s</a></li>
        <li><a class="hover:text-white/70 transition" href="#contact">Contact Us</a></li>
    </ul>
    <!-- End of Menu options -->

    <button type="button" class="bg-cyan-900 text-gray-300 border-2 border-cyan-400 md:inline hidden text-sm hover:opacity-75 hover:bg-cyan-700 hover:text-gray-900 active:scale-95 transition-all w-40 h-11 rounded-full">
        Book now
    </button>


    <button aria-label="menu-btn" type="button" class="menu-btn inline-block md:hidden active:scale-90 transition">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="#fff">
            <path d="M3 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2z"/>
        </svg>
    </button>

    <div class="mobile-menu absolute top-[70px] left-0 w-full bg-gradient-to-r from-cyan-500 to-cyan-900 p-6 hidden md:hidden">
        <ul class="flex flex-col space-y-4 text-white text-lg">
            <li><a href="#" class="text-sm">Home</a></li>
            <li><a href="#about" class="text-sm">About Us</a></li>
            <li><a href="#services" class="text-sm">Services</a></li>
            <li><a href="#faq" class="text-sm">F.A.Q.s</a></li>
            <li><a href="#contact" class="text-sm">Contact Us</a></li>
        </ul>
        <button type="button" class="bg-white text-gray-700 mt-6 inline md:hidden text-sm hover:opacity-90 active:scale-95 transition-all w-40 h-11 rounded-full">
            Book now
        </button>
    </div>
</nav>