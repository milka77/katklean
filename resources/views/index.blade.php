<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
  <nav class="h-[70px] relative w-full px-6 md:px-16 lg:px-24 xl:px-32 flex items-center justify-between z-30 bg-gradient-to-r from-cyan-500 to-cyan-900 transition-all sticky top-0">
    <a href="https://katklean.co.uk">
        <img  width="157" height="40" src="{{ URL::asset('/images/logo.png') }}" alt="katkelan_logo.png" srcset="">
    </a>

    <!-- Menu options -->
    <ul class="text-white md:flex hidden items-center gap-10">
        <li><a class="hover:text-white/70 transition" href="#">Home</a></li>
        <li><a class="hover:text-white/70 transition" href="#about">About Us</a></li>
        <li><a class="hover:text-white/70 transition" href="#services">Services</a></li>            
        <li><a class="hover:text-white/70 transition" href="#faq">F.A.Q.s</a></li>
        <li><a class="hover:text-white/70 transition" href="#contact">Contact Us</a></li>
    </ul>
    <!-- End of Menu options -->

    <button type="button" class="bg-cyan-900 text-gray-300 border-2 border-cyan-400 md:inline hidden text-sm hover:opacity-75 hover:bg-cyan-700 hover:text-gray-900 active:scale-95 transition-all w-40 h-11 rounded-full">
        Book now
    </button>


    <button aria-label="menu-btn" type="button" class="menu-btn inline-block md:hidden active:scale-90 transition">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="#fff">
            <path d="M3 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2z"/>
        </svg>
    </button>

    <div class="mobile-menu absolute top-[70px] left-0 w-full bg-gradient-to-r from-cyan-500 to-cyan-900 p-6 hidden md:hidden">
        <ul class="flex flex-col space-y-4 text-white text-lg">
            <li><a href="#" class="text-sm">Home</a></li>
            <li><a href="#about" class="text-sm">About Us</a></li>
            <li><a href="#services" class="text-sm">Services</a></li>
            <li><a href="#faq" class="text-sm">F.A.Q.s</a></li>
            <li><a href="#contact" class="text-sm">Contact Us</a></li>
        </ul>
        <button type="button" class="bg-white text-gray-700 mt-6 inline md:hidden text-sm hover:opacity-90 active:scale-95 transition-all w-40 h-11 rounded-full">
            Book now
        </button>
    </div>
  </nav>

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
  <div id="faq" class="max-w-xl mx-5 md:mx-auto flex flex-col items-center justify-center px-4 md:px-0 py-5">
    <p class="text-cyan-500 text-sm font-semibold">FAQ's</p>
    <h1 class="text-3xl font-semibold text-center text-slate-900 ">Looking for answer?</h1>
    <p class="text-sm text-slate-500 mt-2 pb-4 text-center">
        Can't find an answer on your question? — Please use one of the options to contact us.
    </p>
    <!-- FAQ Items -->
    <div id="faqContainer"></div>
  </div>
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

  <!-- Footer -->
  <footer class="px-6 md:px-16 lg:px-24 xl:px-32 bg-gradient-to-r from-cyan-500 to-cyan-900 transition-all">
    <div class="flex flex-col md:flex-row items-start justify-between gap-10 py-10 border-b border-gray-300/50 text-gray-200">
      <div>
        <img  width="157" height="40" src="{{ URL::asset('/images/logo.png') }}" alt="katkelan_logo.png">
        <p class="max-w-[410px] mt-6">Cleaning solution for your home.</p>
      </div>
      <div class="flex flex-wrap justify-between w-full md:w-[45%] gap-5">
        <div>
          <h3 class="font-semibold text-base text-gray-200 md:mb-5 mb-2">Quick Links</h3>
          <ul class="text-sm space-y-1">
            <li><a href="#" class="hover:text-white/70 transition">Home</a></li>
            <li><a href="#" class="hover:text-white/70 transition">Contact Us</a></li>
            <li><a href="#" class="hover:text-white/70 transition">FAQs</a></li>
          </ul>
        </div>
        <div>
          <h3 class="font-semibold text-base text-gray-200 md:mb-5 mb-2">Covered Areas</h3>
          <ul class="text-sm space-y-1">
            <li><i class="fa-solid fa-location-dot"></i> Preston (main)</li>
            <li><i class="fa-solid fa-location-dot"></i> Bamber Bridge</li>
            <li><i class="fa-solid fa-location-dot"></i> Pentwotham</li>
          </ul>
        </div>
        <div>
          <h3 class="font-semibold text-base text-gray-200 md:mb-5 mb-2">Contact Us</h3>
          <ul class="text-sm space-y-1">
            <li><i class="fa-solid fa-mobile-screen"></i> 07456517365</li>
            <li><i class="fa-solid fa-at"></i> <a href="mailto:info@katklean.co.uk" class="hover:text-white/70 transition">info@katklean.co.uk</a></li>
            <li><i class="fa-brands fa-facebook"></i> <a href="https://www.facebook.com/profile.php?id=61585973942630" target="_blank" class="hover:text-white/70 transition">Facebook</a></li>
          </ul>
        </div>
      </div>
    </div>
    <p class="py-4 text-center text-sm md:text-base text-gray-200">
      Copyright 2026 © {{ config('app.name'), 'KatKlean' }}. All Right Reserved.
    </p>
  </footer>
  <!-- End of Footer -->


</body>
<script src="https://kit.fontawesome.com/b6c120cd7f.js" crossorigin="anonymous"></script>
<script>
    const menuButtons = document.querySelectorAll('.menu-btn');
    const mobileMenus = document.querySelectorAll('.mobile-menu');
    menuButtons.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            mobileMenus[index].classList.toggle('hidden');
        });
    });
</script>
<script>

    const faqs = [
        {
            question: "How can our customer pay?",
            answer: "Customers can pay with cash or bank transfer, which one they preffer more.",
        },
        {
            question: "Can I trust KatKlean?",
            answer: "Yes, you can trust us. All of our cleaners are DBS checked.",
        },
        {
            question: "Which areas are covered?",
            answer: "We are based in Preston. Covering Preston and the surrounding areas.",
        },
        {
            question: "Are there any callout or travel fees?",
            answer: "No these is no callout fee, may a small travel fee applies depending on the distance. Please contact us.",
        },
    ];
    const container = document.getElementById("faqContainer");
    container.className = 'w-full'
    faqs.forEach((faq, index) => {
        const wrapper = document.createElement("div");
        wrapper.className = "border-b border-slate-200 py-4 cursor-pointer w-full";
        const header = document.createElement("div");
        header.className = "flex items-center justify-between";
        header.innerHTML = `
        <h3 class="text-base font-medium">${faq.question}</h3>
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="transition-all duration-500 ease-in-out icon">
            <path d="m4.5 7.2 3.793 3.793a1 1 0 0 0 1.414 0L13.5 7.2"
                stroke="#1D293D" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    `;
        const answer = document.createElement("p");
        answer.className = "text-sm text-slate-500 transition-all duration-500 ease-in-out max-w-md opacity-0 max-h-0 -translate-y-2 pt-0 answer";
        answer.textContent = faq.answer;
        wrapper.appendChild(header);
        wrapper.appendChild(answer);
        container.appendChild(wrapper);
        header.addEventListener("click", () => {
            const allAnswers = document.querySelectorAll(".answer");
            const allIcons = document.querySelectorAll(".icon");
            allAnswers.forEach((el, i) => {
                if (i === index) {
                    const isOpen = el.classList.contains("opacity-100");
                    el.classList.toggle("opacity-100", !isOpen);
                    el.classList.toggle("max-h-[300px]", !isOpen);
                    el.classList.toggle("translate-y-0", !isOpen);
                    el.classList.toggle("pt-4", !isOpen);
                    el.classList.toggle("opacity-0", isOpen);
                    el.classList.toggle("max-h-0", isOpen);
                    el.classList.toggle("-translate-y-2", isOpen);
                    allIcons[i].classList.toggle("rotate-180", !isOpen);
                } else {
                    el.classList.remove("opacity-100", "max-h-[300px]", "translate-y-0", "pt-4");
                    el.classList.add("opacity-0", "max-h-0", "-translate-y-2");
                    allIcons[i].classList.remove("rotate-180");
                }
            });
        });
    });
</script>
</html>