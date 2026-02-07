<x-admin-layout>
    @section('content')
    <div class="w-full max-w-md mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit Image</h2>
        <form action="{{ route('admin.gallery.update', $image->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('put')
            <div>
                <label for="name" class="block text-sm font-medium ">Image Title</label>
                <input type="text" name="title" id="title" required value="{{ $image->title }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="image" class="block text-sm font-medium ">Image File</label>
                <input type="file" name="image" id="image" value="{{ $image->filepath }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <img src="{{ url( $image->filepath ) }}" alt="{{ $image->filename }}">
            
            <div class="text-center">
                <button type="submit"
                    class="px-4 py-2 bg-slate-700 text-white hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-500 rounded-2xl">
                    Update Image
                </button>
            </div>

          </form>
          <img src="{{url('storage/gallery/1770244024_katklean_logo_meta.png') }}" alt="">
    </div>
    @endsection
</x-admin-layout>