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