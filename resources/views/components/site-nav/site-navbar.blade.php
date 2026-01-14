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

@section('extra-js')
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
@endsection