<x-layout>
  @section('content')
  <!-- FAQ -->
  <div id="faq" class="max-w-xl mx-5 md:mx-auto flex flex-col items-center justify-center px-4 md:px-0 py-15">
    {{-- <p class="text-cyan-500 text-sm font-semibold">FAQ's</p> --}}
    <h1 class="text-5xl font-semibold text-center text-black pb-5">Looking for answer?</h1>
    <p class="text-sm text-black mt-2 pb-10 text-center px-10">
        Can't find an answer on your question? — Please use one of the options to contact us.
    </p>
    <!-- FAQ Items -->
    <div id="faqContainer"></div>
  </div>
  <!-- End of FAQ -->
  @endsection

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
      question: "Are you DBS checked?",
      answer: "Yes. All of our team members are DBS checked and security-trained, allowing us to work with discretion and respect in our clients’ homes and workplaces.",
    },
    {
      question: "Can I trust you with access to my home?",
      answer: "Absolutely. Trust is at the heart of our service. Our cleaners are security-trained and DBS checked, and we treat every home with care, discretion, and respect.",
    },
    {
      question:"Do you have business insurance cover?",
      answer:"Yes, we are fully insured with public liability insurance. This means your home or workplace is protected in the unlikely event of accidental damage during our cleaning services.",
    },
    {
      question: "Which areas are covered?",
      answer: "We are based in Preston and cover Preston and the surrounding areas. If you’re unsure whether we serve your location, please feel free to contact us.",
    },
    {
      question:"Can I have an evening or weekend clean?",
      answer: "Yes, our working hours are Monday - Saturday 07:00 - 19:00 and Sunday 09:00 - 14:00. If you need different hours, please feel free to contact us.",
    },
    {
      question: "How can our customer pay?",
      answer: "We accept payment by cash or bank transfer, whichever is most convenient for the customer.",
    },
    {
      question: "Are there any callout or travel fees?",
      answer: "There’s no callout fee. In some cases, a small travel fee may apply depending on your location — just get in touch and we’ll be happy to confirm.",
    },
    {
      question: "Can you do cleaning while I'am not at home?",
      answer: "Yes, you don’t need to be at home during the cleaning. Our service is designed to save you time and make your day easier.",
    },
    {
      question: "What if I’m not happy with the cleaning?",
      answer: "Your satisfaction matters to us. If you’re not happy with the cleaning, please contact us within 24 hours and we’ll do our best to resolve the issue promptly and fairly.",
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
    answer.className = "text-sm text-black transition-all duration-500 ease-in-out max-w-md opacity-0 max-h-0 -translate-y-2 pt-0 answer";
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
</x-layout> 