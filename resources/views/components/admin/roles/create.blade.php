<x-admin-layout>
    @section('content')
    <div class="w-full max-w-md mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Create New Role</h2>
        <form action="{{ route('admin.roles.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium ">Role Name</label>
                <input type="text" name="name" id="name" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="text-center">
                <button type="submit"
                    class="px-4 py-2 bg-slate-700 text-white hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-500 rounded-2xl">
                    Create Role
                </button>
            </div>
        </form>
    </div>
    @endsection
</x-admin-layout>