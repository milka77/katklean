<div>
  <nav class="side-nav w-45 pl-4 pt-4 bg-gray-800 text-white min-h-screen max-h-full">
    <ul class="text-sm">
      <li><a href="#"><i class="fa-solid fa-chart-pie"></i> Dashboard</a></li>
      <li><a href="{{ route('admin.users.index') }}"><i class="fa-solid fa-users"></i> Users</a></li>
      <li><a href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
      <li class="my-1"><i class="fa-solid fa-user-tag"></i> Roles</li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.index') }}">View Roles</a></li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.create') }}">Add role</a></li>
      <hr class="text-slate-300 mr-4">
      <li class="my-1"><i class="fa-solid fa-tags"></i> Products</li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.products.index') }}">View Products</a></li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.products.create') }}">Add Product</a></li>
      <hr class="text-slate-300 mr-4">
      <li class="my-1"><i class="fa-regular fa-images"></i> Gallery</li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.gallery.index') }}">View Gallery</a></li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.gallery.create') }}">Add Gallery Item</a></li>
      <hr class="text-slate-300 mr-4">
      <li class="my-1"><i class="fa-solid fa-money-bill-transfer"></i> Transactions</li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.transaction.index') }}">View Transactions</a></li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.transaction.create') }}">Add Transaction</a></li>
      <hr class="text-slate-300 mr-4">
      <li class="my-1"><i class="fa-solid fa-cart-shopping"></i> Bookings</li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.booking.calendar.show') }}">View Calendar</a></li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.booking.index') }}">View Bookings</a></li>
      <hr class="text-slate-300 mr-4">
    </ul>
  </nav>
</div>
