<div>
  <nav class="side-nav w-45 pl-4 pt-4 bg-gray-800 text-white h-screen">
    <ul class="text-sm">
      <li><a href="#">Dashboard</a></li>
      <li><a href="{{ route('admin.users.index') }}">Users</a></li>
      <li><a href="#">Settings</a></li>
      <li>Roles</li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.index') }}">View Roles</a></li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.create') }}">Add role</a></li> 
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.create') }}">Attach role</a></li> 
      <hr class="text-slate-300 mr-4">  
    </ul>
    
    {{-- <div class="flex flex-col  text-sm">
      <button type="button" class="peer group w-full text-left px-4 pr-2 py-2 rounded text-white shadow-sm hover:bg-slate-700 focus:outline-none">
        <span>Select</span>
        <svg class="w-5 h-5 inline float-right transition-transform duration-200 -rotate-90 group-focus:rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#6B7280">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
        </svg>
      </button>
  
    <ul class="hidden overflow-hidden peer-focus:block w-full border-y border-slate-300 rounded shadow-md mt-1 py-2">
        <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.index') }}">View Roles</a></li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.create') }}">Add role</a></li>   
    </ul>
    </div>
    <ul class="overflow-hidden peer-focus:block w-full border-y border-slate-300 rounded shadow-md mt-1 py-2 text-sm"> 
      <li>Roles</li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.index') }}">View Roles</a></li>
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.create') }}">Add role</a></li> 
      <li class="px-4 py-2 hover:bg-gray-500/10 cursor-pointer"><a href="{{ route('admin.roles.create') }}">Attach role</a></li>   
    </ul> --}}
  </nav>
</div>