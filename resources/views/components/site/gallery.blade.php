<x-layout>
  @section('content')
  <!-- Calculator -->
  <div class="py-5">
    <div class="md:mx-20 lg:mx-50 pt-15 pb-7 px-2 md:px-0 ">
        <h2 class="text-center text-4xl md:text-5xl font-semibold pb-7 text-black">Gallery</h2>
        <p class="text-sm text-black mt-2 pb-10 text-center px-10">A selection of recent cleaning work, showing the standard and attention to detail we provide.</p>
        <hr class="text-slate-300 max-w-5xl flex mx-auto" />
        <div class="flex flex-wrap items-center justify-center my-12 gap-4 max-w-5xl mx-auto">
            @if ($images)
                @foreach ($images as $image)   
                <div class="relative group rounded-lg overflow-hidden">
                    <img src="{{ $image->filepath }}" alt="image" class="size-56 object-cover object-top" />
                    <div class="absolute inset-0 flex flex-col justify-end p-4 text-white bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <h1 class="text-xl font-medium">{{ ucfirst($image->title) }}</h1>
                        <a href="{{ $image->filepath }}" target="_blank" class="flex items-center gap-1 text-sm text-white/70">
                            Show Image
                            <svg width="16" height="16" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.125 1.625H11.375V4.875" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.41602 7.58333L11.3743 1.625" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.75 7.04167V10.2917C9.75 10.579 9.63586 10.8545 9.4327 11.0577C9.22953 11.2609 8.95398 11.375 8.66667 11.375H2.70833C2.42102 11.375 2.14547 11.2609 1.9423 11.0577C1.73914 10.8545 1.625 10.579 1.625 10.2917V4.33333C1.625 4.04602 1.73914 3.77047 1.9423 3.5673C2.14547 3.36414 2.42102 3.25 2.70833 3.25H5.95833" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            @else
                <p class="text-center">No images found.</p>
            @endif
            
          
          
          
         
          
      </div>
      <hr class="text-slate-300 max-w-5xl flex mx-auto" />

    </div>
   
  </div>
  <!-- End of Calculator -->
  @endsection
  @section('extra-js')
  

  @endsection
</x-layout>
  
