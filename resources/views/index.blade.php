<x-layout>
  @section('content')


  <!-- About Us -->
  <div id="about" class="md:mx-20 lg:mx-50 pb-5">
      <h2 class="text-center text-lg font-semibold pt-4 pb-3 text-cyan-500">About Us</h2>
      <p class="font-semibold text-center pb-7">We are a family-run cleaning service focused on providing reliable, careful, and professional cleaning services.</p>
      <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-10">
          <p class="pb-1 text-justify px-3 sm:px-3 md:px-0">Our approach is built on strong foundations of training, attention to detail, and trust. We have completed professional cleaning training based on British cleaning standards and continuously apply structured, methodical cleaning practices in our work.</p>
          <p class="pb-1 text-justify px-3 sm:px-3 md:px-0">Our background includes hotel cleaning experience in London, where high standards, efficiency, and consistency are essential. This experience has shaped the way we work today, with a strong focus on hygiene, organisation, and respectful conduct in every space.</p>
          <p class="pb-1 text-justify px-3 sm:px-3 md:px-0">We are fully insured, and with a security-trained background and a valid DBS check, we work with a high level of awareness, discretion, and respect for our clients’ homes and workplaces. We understand the importance of trust when allowing someone into your property, and we take that responsibility seriously.</p>
          <p class="pb-1 text-justify px-3 sm:px-3 md:px-0">Although we are at the early stage of building our residential client base, we are committed to delivering dependable service, clear communication, and high standards from day one. Every clean is carried out with care, professionalism, and pride in our work.</p>
      </div>
  </div>
  <!-- About Us -->

  <!-- Services -->
  <div class="bg-cyan-100/40 py-5">
    <div id="services" class="md:mx-20 lg:mx-50 pt-4 pb-2 ">
        <h2 class="text-center text-lg font-semibold pb-3 text-cyan-500">Services</h2>
        <div>
          <p class="font-semibold text-center pb-3">Enjoy Your Free Time — Leave the Cleaning to Us</p>
          <p class="pb-5 text-justify px-3 sm:px-3 md:px-0">After a long, busy work week, the last thing you want to do is spend your valuable time cleaning. Let us take care of it for you. We provide reliable, thorough, and professional cleaning services so you can relax, recharge, and enjoy a fresh, spotless home. Whether it’s a one-time clean or regular service, we’re here to make your life easier.</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:mx-20 lg:mx-50 pb-5 ">
      <div class="size-[520px] top-0 left-1/2 -translate-x-1/2 rounded-full absolute blur-[300px] -z-10 bg-[#FBFFE1]/70"></div>
      <div class="flex flex-col items-center justify-center">
        <div class="p-6 aspect-square bg-cyan-300/70 rounded-full text-center">
          <i class="fa-solid fa-house-chimney-window"></i>
        </div>
        <div class="mt-5 space-y-2 text-center">
          <h3 class="text-base font-semibold text-slate-700">Regular Domestic Cleaning</h3>
          <p class="text-sm text-slate-600">Regual cleaning</p>
        </div>
      </div>

      <div class="flex flex-col items-center justify-center ">
        <div class="p-6 aspect-square bg-cyan-300/70 rounded-full text-center">
          <i class="fa-solid fa-hand-sparkles"></i>
        </div>
          <div class="mt-5 space-y-2 text-center">
            <h3 class="text-base font-semibold text-slate-700">Deep Cleanin, One Time Cleaning</h3>
            <p class="text-sm text-slate-600">Your helping hand </p>
          </div>
        </div>

        <div class="flex flex-col items-center justify-center">
          <div class="p-6 aspect-square bg-cyan-300/70 rounded-full text-center">
            <i class="fa-brands fa-airbnb"></i>
          </div>
          <div class="mt-5 space-y-2 text-center">
            <h3 class="text-base font-semibold text-slate-700">End of Tenancy / Airbnb Cleaning</h3>
            <p class="text-sm text-slate-600">Export professional, audit-ready financial reports for tax or internal review.</p>
          </div>
        </div>

        <div class="flex flex-col items-center justify-center">
          <div class="p-6 aspect-square bg-cyan-300/70 rounded-full text-center">
            <i class="fa-solid fa-calendar-days"></i>
          </div>
          <div class="mt-5 space-y-2 text-center">
            <h3 class="text-base font-semibold text-slate-700">Emergency / Weekend Cleaning</h3>
            <p class="text-sm text-slate-600">Export professional, audit-ready financial reports for tax or internal review.</p>
          </div>
        </div>
    </div>
  </div>
  <!-- End of Services -->

  <!-- FAQ -->
  <x-site.faqs/>
  <!-- End of FAQ -->

  <!-- Contact Us -->
  <div id="contact" class="bg-cyan-100/40 py-8">
    <form id="contact-form" class="flex flex-col items-center text-sm  mx-10 md:mx-20 lg:mx-50">
        <p class="text-lg text-cyan-500 pb-2 font-semibold">Contact Us</p>
        <h1 class="text-4xl font-semibold text-slate-900 pb-4">Get in touch with us</h1>
        <p class="text-sm text-gray-500 text-center pb-10">Do you have any question?<br>Don't hesitate, send us a message or call us.<br><i class="fa-solid fa-mobile-screen"></i> 07456517365</p>    
        <div class="flex flex-col md:flex-row items-center gap-8 w-[350px] md:w-[700px]">
          <div class="w-full">
            <label class="text-black/70" for="name">How can we call you? <span class="text-red-500">*</span></label>
            <input class="h-12 p-2 mt-2 w-full border border-gray-500/30 rounded outline-none focus:border-indigo-300" type="text" name="name" id="name" required placeholder="Your name">
          </div>
          <div class="w-full">
            <label class="text-black/70" for="name">Contact Email <span class="text-red-500">*</span></label>
            <input class="h-12 p-2 mt-2 w-full border border-gray-500/30 rounded outline-none focus:border-indigo-300" type="email" name="email" id="email" required placeholder="Your email">
          </div>
        </div>
        <div class="mt-6 w-[350px] md:w-[700px]">
          <label class="text-black/70" for="name">Message <span class="text-red-500">*</span></label>
          <textarea class="w-full mt-2 p-2 h-40 border border-gray-500/30 rounded resize-none outline-none focus:border-indigo-300" required></textarea>
        </div>
        <button type="submit" class="mt-5 bg-cyan-700 text-white h-12 w-56 px-4 rounded active:scale-95 transition">Send Message</button>
    </form>
  </div>
  <!-- Contact Us -->

@endsection
</x-layout>