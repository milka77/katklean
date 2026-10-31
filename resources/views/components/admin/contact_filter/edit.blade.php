<x-admin-layout>
    @section('content')
    <div class="w-150 mx-auto bg-slate-50 p-8 rounded-lg shadow-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Contact Filters</h2>

      <h3 class="text-lg font-semibold mb-4 text-center">Update Contact Filter</h3>

      <div class="bg-white p-6 rounded-lg shadow-md mx-auto">
        <form action="{{ route('contact_filter.update', $contactFilter->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:ring focus:border-blue-300" required value="{{ $contactFilter->email }}">
            @error('email')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-4">
            <label for="text" class="block text-gray-700 font-semibold mb-2">Text</label>
            <textarea type="textarea" name="text" id="text" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:ring focus:border-blue-300">{{ $contactFilter->text }}</textarea>
            @error('text')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-4">
            <label for="reason" class="block text-gray-700 font-semibold mb-2">Reason</label>
            <input type="text" name="reason" id="reason" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{ $contactFilter->reason }}">
            @error('reason')
              <p class="text-red-500 italic text-sm pl-2">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-4">
            <label for="is_active" class="inline-flex items-center">
              <input type="checkbox" name="is_active" id="is_active" class=" h-5 w-5 text-blue-600 checked" {{ $contactFilter->is_active ? 'checked' : ''}}>
              <span class="ml-2 text-gray-700 font-semibold">Is Active</span>
            </label>
          </div>

          <div class="flex justify-center mb-5">
            <button type="submit" class="w-60 bg-slate-700 text-white py-2 px-4 rounded-md hover:bg-slate-600 transition duration-200">Update</button>
          </div>
        </form>
      </div>
      
        
    </div>
    @endsection
</x-admin-layout>