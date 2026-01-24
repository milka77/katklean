
    <!-- Contact Us -->
    <div id="contact" class="py-15">
      <form id="contact-form" method="POST" action="#contact" class="flex flex-col items-center text-sm  mx-10 md:mx-20 lg:mx-50" novalidate>
        @csrf

        @if ($errors->any())
          <div class="m-3 p-2 border-2 border-rose-500 rounded bg-red-300 w-[350px] md:w-[700px]">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        @if (session()->has('success'))
          <div class="mx-auto m-3 p-2 border-2 border-green-500 rounded bg-green-200 w-[350px] md:w-[700px]">
            {{ session()->get('success') }}
          </div>          
        @endif


        <h1 class="text-5xl font-semibold text-black pb-4">Get in touch with us</h1>
        <p class="text-lg font-semibold text-center pb-10">Do you have any question?<br>Don't hesitate, send us a message or call us.<br><i class="fa-solid fa-mobile-screen"></i> 07456517365</p>    
        <div class="flex flex-col md:flex-row items-center gap-8 w-[350px] md:w-[700px]">
          <div class="w-full">
            <label class="text-black" for="name">How can we call you? <span class="text-red-500">*</span></label>
            <input class="h-12 p-2 mt-2 w-full border border-gray-500 rounded outline-none focus:border-indigo-300" type="text" name="name" id="name" required placeholder="Your name" value="{{ old('name') }}">
          </div>
          <div class="w-full">
            <label class="text-black" for="email">Contact Email <span class="text-red-500">*</span></label>
            <input class="h-12 p-2 mt-2 w-full border border-gray-500 rounded outline-none focus:border-indigo-300" type="email" name="email" id="email" required placeholder="Your email" value="{{  old('email') }}">
          </div>
        </div>
        <div class="mt-6 w-[350px] md:w-[700px]">
          <label class="text-black" for="name">Message <span class="text-red-500">*</span></label>
          <textarea class="w-full mt-2 p-2 h-40 border border-gray-500 rounded resize-none outline-none focus:border-indigo-300" required name="message" id="message">{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="mt-5 bg-slate-700 hover:bg-slate-900 text-white text-lg h-12 w-56 px-4 rounded-full active:scale-95 transition cursor-pointer">Send Message</button>
      </form>
    </div>
    <!-- Contact Us -->
