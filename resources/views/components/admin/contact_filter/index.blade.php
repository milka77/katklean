<x-admin-layout>
    @section('content')
    <div class="w-full mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Contact Filters</h2>
        
        <h3 class="text-lg font-semibold mb-4 text-center">Contact Filters List</h3>

        <div class="bg-white p-6 rounded-lg shadow-md mx-auto">
            @if($filters->isEmpty())
                <p class="text-gray-700 text-center">No contact filters found.</p>
            @else
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Email</th>
                            <th class="border border-gray-300 px-4 py-2">Text</th>
                            <th class="border border-gray-300 px-4 py-2">Reason</th>
                            <th class="border border-gray-300 px-4 py-2">Is Active</th>
                            <th class="border border-gray-300 px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($filters as $filter)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $filter->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $filter->email }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $filter->text ? $filter->text : 'N/A' }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $filter->reason ? $filter->reason : 'N/A' }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $filter->is_active ? 'Yes' : 'No' }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('contact_filter.edit', $filter->id) }}" class="text-blue-500 hover:text-blue-700"><i class="fa-regular fa-pen-to-square"></i></a>
                                <form action="{{ route('contact_filter.destroy', $filter->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 ml-2 cursor-pointer" onclick="return confirm('Are you sure you want to delete this filter?')"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif  
        </div>
        
    </div>
    @endsection
</x-admin-layout>