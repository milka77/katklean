<div class="bg-gray-800 text-white">
  <nav class="side-nav w-45 pl-4 pt-4 h-full sr-only">
    <ul class="text-sm">
      <li><a href="#"><i class="fa-solid fa-chart-pie pr-1.5"></i> Dashboard</a></li>
      <li><a href="{{ route('admin.users.index') }}"><i class="fa-solid fa-users pr-1.5"></i> Users</a></li>
      <li><a href="#"><i class="fa-solid fa-gear pr-1.5"></i> Settings</a></li>
      <li class="my-1"><i class="fa-solid fa-user-tag pr-1.5"></i> Roles</li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.index') }}">View Roles</a></li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.create') }}">Add role</a></li>
      <hr class="text-slate-300 mr-4">
      <li class="my-1"><i class="fa-solid fa-tags pr-1.5"></i> Products</li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.products.index') }}">View Products</a></li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.products.create') }}">Add Product</a></li>
      <hr class="text-slate-300 mr-4">
      <li class="my-1"><i class="fa-regular fa-images pr-1.5"></i> Gallery</li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.gallery.index') }}">View Gallery</a></li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.gallery.create') }}">Add Gallery Item</a></li>
      <hr class="text-slate-300 mr-4">
      <li class="my-1"><i class="fa-solid fa-money-bill-transfer pr-1.5"></i> Transactions</li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.transaction.index') }}">View Transactions</a></li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.transaction.create') }}">Add Transaction</a></li>
      <hr class="text-slate-300 mr-4">
      <li class="my-1"><i class="fa-solid fa-cart-shopping pr-1.5"></i> Bookings</li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.booking.calendar.show') }}">View Calendar</a></li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.booking.index') }}">View Bookings</a></li>
      <li class="px-4 py-1 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.booking.add-manual-booking') }}">Add Bookings</a></li>
      <hr class="text-slate-300 mr-4">
    </ul>
  </nav>
  <div class="flex h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-800 text-white transition-all duration-300">
            <div class="p-4 flex justify-between items-center">
                <div class="flex items-center">
                    <img src="https://tailwindflex.com/images/logo.svg" alt="Logo" class="h-8 w-auto">
                    <span class="ml-2 text-xl font-semibold">Admin</span>
                </div>
                <button id="collapse-btn" class="p-1 rounded-md hover:bg-gray-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                    </svg>
                </button>
            </div>
            <nav class="mt-5 px-2">
                <div class="space-y-1">
                    <!-- Dashboard -->
                    
                    <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md bg-gray-900 text-white">
                        <span class="sidebar-text"><i class="fa-solid fa-house pl-1.5 pr-3"></i> Dashboard</span>
                    </a>

                    <!-- Users Section -->
                    <div class="space-y-1">
                        <button class="dropdown-btn w-full flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <span class="sidebar-text"> <i class="fa-regular fa-user pl-1.5 pr-3"></i>Users</span>
                            <svg class="ml-auto h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="dropdown-content hidden pl-10 space-y-1">
                          
                          <a href="{{ route('admin.users.index') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                              All Users
                          </a>
                          <a href="{{ route('admin.roles.index') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                              Roles
                          </a>
                          <a href="{{ route('admin.roles.create') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                              Add Roles
                          </a>
                          
                        </div>
                    </div>

                    <!-- Products Section -->
                    <div class="space-y-1">
                        <button class="dropdown-btn w-full flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <span class="sidebar-text"><i class="fa-solid fa-tags pl-1.5 pr-3"></i> Products</span>
                            <svg class="ml-auto h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="dropdown-content hidden pl-10 space-y-1">
                            <a href="{{ route('admin.products.index') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                All Products
                            </a>
                            <a href="{{ route('admin.products.create') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                Add New
                            </a>
                        </div>
                    </div>

                    <!-- Gallery Section -->
                    <div class="space-y-1">
                        <button class="dropdown-btn w-full flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <span class="sidebar-text"><i class="fa-regular fa-images pl-1.5 pr-3"></i> Gallery</span>
                            <svg class="ml-auto h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="dropdown-content hidden pl-10 space-y-1">
                            <a href="{{ route('admin.gallery.index') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                All Gallery Items
                            </a>
                            <a href="{{ route('admin.gallery.create') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                Add New
                            </a>
                        </div>
                    </div>

                    <!-- Transactions Section -->
                    <div class="space-y-1">
                        <button class="dropdown-btn w-full flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <span class="sidebar-text"><i class="fa-solid fa-money-bill-transfer pl-1.5 pr-3"></i> Transactions</span>
                            <svg class="ml-auto h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="dropdown-content hidden pl-10 space-y-1">
                            <a href="{{ route('admin.transaction.index') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                All Tansactions
                            </a>
                            <a href="{{ route('admin.transaction.create') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                Add New 
                            </a>
                        </div>
                    </div>

                    <!-- Bookings Section -->
                    <div class="space-y-1">
                        <button class="dropdown-btn w-full flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <span class="sidebar-text"><i class="fa-regular fa-calendar pl-1.5 pr-3"></i> Bookings</span>
                            <svg class="ml-auto h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="dropdown-content hidden pl-10 space-y-1">
                            <a href="{{ route('admin.booking.calendar.show') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                Calendar
                            </a>
                            <a href="{{ route('admin.booking.index') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                All Bookings
                            </a>
                            <a href="{{ route('admin.booking.add-manual-booking') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                Add New Booking
                            </a>
                        </div>
                    </div>

                    <!-- Contact Filters Section -->
                    <div class="space-y-1">
                        <button class="dropdown-btn w-full flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                            <span class="sidebar-text"><i class="fa-regular fa-user pl-1.5 pr-3"></i> Contact Filters</span>
                            <svg class="ml-auto h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="dropdown-content hidden pl-10 space-y-1">
                            <a href="{{ route('contact_filter.index') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                All Contact Filters
                            </a>
                            <a href="{{ route('contact_filter.create') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                Add New Contact Filter
                            </a>
                        </div>
                    </div>

                            </a>
                            <a href="{{ route('admin.booking.add-manual-booking') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                                Add New Booking
                            </a>
                        </div>
                    </div>

                    <!-- Settings -->
                    <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                        <svg class="mr-3 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="sidebar-text">Settings</span>
                    </a>

                    <!-- Reports -->
                    <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
                        <span class="sidebar-text"><i class="fa-solid fa-chart-pie pl-1.5 pr-3"></i> Reports</span>
                    </a>
                </div>
            </nav>
        </aside>

      
    </div>

    <script>
        // Sidebar collapse functionality
        const sidebar = document.getElementById('sidebar');
        const collapseBtn = document.getElementById('collapse-btn');
        const sidebarTexts = document.querySelectorAll('.sidebar-text');

        collapseBtn.addEventListener('click', () => {
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-16');
            collapseBtn.querySelector('svg').classList.toggle('rotate-180');
            
            sidebarTexts.forEach(text => {
                text.classList.toggle('hidden');
            });
        });

        // Dropdown functionality
        const dropdownBtns = document.querySelectorAll('.dropdown-btn');
        
        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const dropdownContent = btn.nextElementSibling;
                dropdownContent.classList.toggle('hidden');
                btn.querySelector('svg:last-child').classList.toggle('rotate-180');
            });
        });
    </script>
</div>
