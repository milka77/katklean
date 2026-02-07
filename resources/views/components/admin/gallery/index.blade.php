<x-admin-layout>
    @section('content')
    <div class="w-full mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Products</h2>
      
      <table class="w-full min-w-1/2 bg-slate-100 text-center">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b border-slate-400">ID</th>
            <th class="py-2 px-4 border-b border-slate-400">Title</th>
            <th class="py-2 px-4 border-b border-slate-400">Filename</th>
            <th class="py-2 px-4 border-b border-slate-400">Image</th>
            <th class="py-2 px-4 border-b border-slate-400">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($images as $image)
          <tr>
            <td class="py-2 px-4 border-b border-slate-400">{{ $image->id }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $image->title }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $image->filename }}</td>
            <td class="py-2 px-4 border-b border-slate-400">
              <img src="{{ asset($image->filepath) }}" alt="{{ $image->title }}" class="w-16 h-16 object-cover rounded">
            </td>
            <td class="py-2 px-4 border-b border-slate-400">
              <a href="{{ route('admin.gallery.edit', $image) }}" class="border border-green-600 hover:bg-green-500 text-green-500 hover:text-white font-bold px-2 rounded cursor-pointer">Edit</a>
              <a href="{{ route('admin.gallery.destroy', $image) }}">
                <form action="{{ route('admin.gallery.destroy', $image) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="border border-red-600 hover:bg-red-500 text-red-500 hover:text-white font-bold px-2 rounded cursor-pointer ml-2">Delete</button>
                </form>
              </a>
          @endforeach
        </tbody>
      </table>
       
    </div>
    @endsection
</x-admin-layout>