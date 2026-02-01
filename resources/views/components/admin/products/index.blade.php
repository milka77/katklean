<x-admin-layout>
    @section('content')
    <div class="w-full mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Products</h2>
      
      <table class="w-full min-w-1/2 bg-slate-100 text-center">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b border-slate-400">ID</th>
            <th class="py-2 px-4 border-b border-slate-400">Name</th>
            <th class="py-2 px-4 border-b border-slate-400">Description</th>
            <th class="py-2 px-4 border-b border-slate-400">Is Extra</th>
            <th class="py-2 px-4 border-b border-slate-400">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td class="py-2 px-4 border-b border-slate-400">{{ $product->id }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $product->name }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $product->description }}</td>
            <td class="py-2 px-4 border-b border-slate-400">{{ $product->is_extra ? 'Yes' : 'No' }}</td>
            <td class="py-2 px-4 border-b border-slate-400">
              <a href="{{ route('admin.products.edit', $product->id) }}" class="border border-green-600 hover:bg-green-500 text-green-500 hover:text-white font-bold px-2 rounded cursor-pointer">Edit</a>
              <a href="{{ route('admin.products.destroy', $product->id) }}">
                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline">
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