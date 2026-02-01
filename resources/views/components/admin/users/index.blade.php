<x-admin-layout>
    @section('content')
    <div class="w-full  mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Users</h2>
        
        <table class="w-full min-w-1/2 bg-white text-center">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Role</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->getFullNameAttribute() }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                    <td class="py-2 px-4 border-b">
                      @if ($user->roles->count() > 0)
                        @foreach($user->roles as $role)
                          <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 rounded-full mr-1">{{ $role->name }}</span>
                        @endforeach
                      @else
                        <span class="text-gray-500 text-xs">No Role Assigned</span>
                      @endif
                    </td>
                    <td class="py-2 px-4 border-b">
                      <a href="{{ route('admin.users.show', $user) }}" class="border border-slate-600 hover:bg-slate-500 text-slate-500 hover:text-white font-bold px-2 rounded cursor-pointer">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </div>
    @endsection
</x-admin-layout>