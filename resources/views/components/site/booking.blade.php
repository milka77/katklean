<x-layout>
  @section('content')
  <h1 class="text-center font-bold text-5xl pt-15 pb-7">Online Booking</h1>
  {{-- <h1 class="text-center font-semibold text-xl ">Book your appoinment now</h1> --}}
  <div class="h-full w-full my-5">
    

    <div class="breely-inline" data-url="https://katklean.breely.com/form/13495"></div> <!-- Add this where you want it embedded -->
    {{-- <iframe class="h-full w-full" src="https://evo3gt.youcanbook.me/"></iframe> --}}
    </div>
  @endsection

  @section('extra-js')
  <script type="text/javascript" src="https://katklean.breely.com/embed.js?url=%2Fform%2F13495"></script>
  @endsection
</x-layout>