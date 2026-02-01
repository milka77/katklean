<x-admin-layout>
  @section('content')
  <div class="w-full  mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Users</h2>
    
    <table class="w-full min-w-1/2 bg-white text-center mb-6">
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
            <a href="{{ route('admin.users.index') }}" class="border border-slate-600 hover:bg-slate-500 text-slate-500 hover:text-white font-bold px-2 rounded cursor-pointer">Back</a>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="mt-6 w-1/3 mx-auto">
      <h6 class="text-lg font-semibold text-center ">Manage Roles</h6>      
        @if (!empty($roles))
        <table class="" id="usersTable" width="100%" cellspacing="0">
          <thead class="text-center bg-slate-200 border-y">
            <tr>
              <th>Options</th>
              <th>Id</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Attach</th>
              <th>Detach</th>
            </tr>
          </thead>
      
          <tfoot class="text-center bg-slate-200 border-y">
            <tr>
              <th>Options</th>
              <th>Id</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Attach</th>
              <th>Detach</th>
            </tr>
          </tfoot>
      
          <tbody>
            @foreach ($roles as $role)
              <tr class="text-center">
                <td><input type="checkbox"
                          name=""
                          @foreach ($user->roles as $user_role)
                              @if($user_role->slug == $role->slug)
                                  checked
                              @endif
                          @endforeach
                ></td>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->slug}}</td>
                <td>
                  {{-- Attaching a role for the user --}}
                  <form action="{{ route('user.role.attach', ['user' => $user->id, 'role' => $role->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="role" value="{{$role->id}}">
                    <button type="submit"
                            class="border border-green-600 hover:bg-green-500 text-green-500 hover:text-white font-bold px-2 rounded cursor-pointer"
                            @if($user->roles->contains($role))
                              disabled
                            @endif
                            >Attach
                    </button>
                  </form>
                </td>

                <td class="py-0.5">
                  {{-- Detaching a role for the user --}}
                  <form action="{{ route('user.role.detach', ['user'=> $user, 'role' => $role->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="role" value="{{$role->id}}">
                    <button type="submit"
                            class="border border-red-600 hover:bg-red-500 text-red-500 hover:text-white font-bold px-2 rounded cursor-pointer"
                            @if(!$user->roles->contains($role))
                              disabled
                            @endif
                            >Detach
                    </button>
                  </form>
                </td>
                          
              </tr>
            @endforeach
          </tbody>
      
        </table>
        @else
          <div class="alert alert-info text-center"><h5>No Roles found in the database.</h5></div>
        @endif

    </div>
    @endsection
</x-admin-layout>