<x-admin-layout>
    @section('content')
    <div class="w-full max-w-md mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Update Product</h2>
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('put')
            <div>
                <label for="name" class="block text-sm font-medium ">Product Name</label>
                <input type="text" name="name" id="name" required value="{{ $product->name }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="description" class="block text-sm font-medium ">Product Description</label>
                <input type="text" name="description" id="description" required value="{{ $product->description }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex">
                <input type="checkbox" name="is_extra" id="is_extra" class="mr-2" {{ $product->is_extra ? 'checked' : '' }}>
                <label for="is_extra" class="block text-sm font-medium ">Is Extra</label>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="px-4 py-2 bg-slate-700 text-white hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-500 rounded-2xl">
                    Save Product
                </button>
            </div>
        </form>
    </div>
    @endsection
</x-admin-layout>