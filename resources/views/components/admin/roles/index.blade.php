<x-admin-layout>
    @section('content')
    <div class="w-full max-w-md mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Roles</h2>
        
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Slug</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $role->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $role->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $role->slug }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('admin.roles.edit', $role) }}" class="text-slate-500 hover:underline">Edit</a>
                        <form action="{{ route('admin.roles.destroy', $role) }}" method="post" class="inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                        </form>
                      </td>
                </tr>
                @endforeach
            </tbody>
    </div>
    @endsection
</x-admin-layout>