<?php
get_header();
get_template_part('components/banner/tertiary');
?>

<section
    class="bg-[linear-gradient(to_bottom,_#006155_1%,_#1F3131_40%)] w-full py-20 shadow-sm">
    <div class="max-w-7xl mx-auto px-8 lg:px-0 flex flex-col md:flex-row gap-8">
        <!-- Column 1: Title + Description (2/3 width) -->
        <div class="md:w-2/3 space-y-6">
            <h2 class="text-[#98C441] text-lg  mb-4">
                Translation Outcomes
            </h2>
            <p class="text-white text-base md:text-xl leading-relaxed max-w-3xl">
                Today’s global strategies demand more than basic translation. At Piedmont Global, we bring strategic
                intelligence and linguistic expertise together to deliver translation solutions that fuel international
                growth, enhance local engagement, and ensure every message lands with impact. </p>
        </div>

        <!-- Column 2: Additional Description (1/3 width) -->
        <div class="md:w-1/3 flex items-center">
            <p class="text-white text-base leading-relaxed">
                Whether you’re scaling into new markets, supporting multilingual teams, or connecting diverse
                communities, our approach goes beyond word-for-word.

                We help you translate meaning, nuance, and intent—so you lead with confidence across cultures. </p>
        </div>
    </div>
</section>

<section class="relative py-20 bg-[#F7F7F5]">
    <div class="max-w-7xl mx-auto px-8 lg:px-0">
        <h2 class="text-base text-[#1F3131] font-bold mb-4 text-center tracking-wide">
            What We Offer
        </h2>
        <h3 class="text-3xl lg:text-5xl font-extrabold mb-10 text-center leading-tight max-w-4xl mx-auto text-[#0F1E1E]">
            Translation, Transformed
        </h3>
        <p class=" text-base lg:text-xl text-black text-center max-w-3xl mx-auto mb-14">
            Our translation capabilities are designed to scale with your systems, adapt to your goals, and elevate your
            customer experience. </p>
        <hr class="border-t-[1.5px] border-[#1F3131] max-w-4xl mx-auto mb-16" />
    </div>

    <div class="max-w-6xl mx-auto px-8 lg:px-0 flex flex-col lg:flex-row gap-12 relative z-10 min-h-[600px]">
        <!-- Left Sticky Menu -->
        <nav class="lg:w-1/3 w-full text-xs md:text-lg bg-white bg-opacity-30 backdrop-blur-md rounded-lg p-6 shadow-lg lg:bg-transparent lg:p-0 lg:shadow-none sticky top-32 self-start flex lg:flex-col flex-row gap-4 lg:gap-6 overflow-x-scroll lg:overflow-x-visible pb-4 lg:pb-0 scroll-smooth no-scrollbar"
            aria-label="What We Offer Navigation">
            <button
                class="menu-btn opacity-100 border-l-4 border-l-[#98C441] pl-4 text-left text-[#0F1E1E] font-semibold transition-opacity duration-400 ease-in-out transform hover:scale-[1.02]"
                data-target="section-1" aria-current="true">
                Document & Technical Translation
            </button>
            <button
                class="menu-btn opacity-50 border-l-0 pl-4 text-left text-[#555F58] font-medium transition-opacity duration-400 ease-in-out hover:opacity-90 hover:text-[#0F1E1E] hover:scale-[1.02]"
                data-target="section-2">
                Website & App Localization
            </button>
            <button
                class="menu-btn opacity-50 border-l-0 pl-4 text-left text-[#555F58] font-medium transition-opacity duration-400 ease-in-out hover:opacity-90 hover:text-[#0F1E1E] hover:scale-[1.02]"
                data-target="section-3">
                Marketing & Brand Adaptation
            </button>
            <button
                class="menu-btn opacity-50 border-l-0 pl-4 text-left text-[#555F58] font-medium transition-opacity duration-400 ease-in-out hover:opacity-90 hover:text-[#0F1E1E] hover:scale-[1.02]"
                data-target="section-4">
                Multilingual Desktop
            </button>
        </nav>

        <!-- Right Content -->
        <div class="lg:w-2/3 w-full flex flex-col gap-32 overflow-y-scroll h-[85vh] mt-8 scroll-smooth" tabindex="0"
            aria-label="What We Offer Content">
            <!-- Section 1 -->
            <section id="section-1" class="w-full lg:w-[80%] mx-auto flex flex-col items-start scroll-mt-20">
                <img src="http://pg.local/wp-content/uploads/f8278d0f0f3c9dc8bdd12184679c36dfb77b57e3.png"
                    class="w-full h-[320px] object-cover object-top rounded-md shadow-md"
                    alt="Document & Technical Translation" loading="lazy" />
                <h2 class="text-2xl font-extrabold mt-8 text-[#1F3131] tracking-wide">
                    Document & Technical Translation
                </h2>
                <p class="text-lg mt-4 text-[#1F3131] font-normal max-w-prose">
                    Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.
                </p>
                <ul class="list-none pl-0 mt-6 space-y-2 font-medium text-[#1F3131] max-w-prose">
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 1.</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 2.</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 3.</span>
                    </li>
                </ul>
            </section>

            <!-- Section 2 -->
            <section id="section-2" class="w-full lg:w-[80%] mx-auto flex flex-col items-start scroll-mt-20">
                <img src="http://pg.local/wp-content/uploads/f8278d0f0f3c9dc8bdd12184679c36dfb77b57e3.png"
                    class="w-full h-[320px] object-cover object-top rounded-md shadow-md"
                    alt="Website & App Localization" loading="lazy" />
                <h2 class="text-3xl font-extrabold mt-8 text-[#1F3131] tracking-wide">
                    Website & App Localization
                </h2>
                <p class="text-lg mt-4 text-[#1F3131] font-normal max-w-prose">
                    Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.
                </p>
                <ul class="list-none pl-0 mt-6 space-y-4 font-medium text-[#1F3131] max-w-prose">
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 1.</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 2.</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 3.</span>
                    </li>
                </ul>
            </section>

            <!-- Section 3 -->
            <section id="section-3" class="w-full lg:w-[80%] mx-auto flex flex-col items-start scroll-mt-20">
                <img src="http://pg.local/wp-content/uploads/f8278d0f0f3c9dc8bdd12184679c36dfb77b57e3.png"
                    class="w-full h-[320px] object-cover object-top rounded-md shadow-md"
                    alt="Marketing & Brand Adaptation" loading="lazy" />
                <h2 class="text-3xl font-extrabold mt-8 text-[#1F3131] tracking-wide">
                    Marketing & Brand Adaptation
                </h2>
                <p class="text-lg mt-4 text-[#1F3131] font-normal max-w-prose">
                    Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.
                </p>
                <ul class="list-none pl-0 mt-6 space-y-4 font-medium text-[#1F3131] max-w-prose">
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 1.</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 2.</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 3.</span>
                    </li>
                </ul>
            </section>

            <!-- Section 4 -->
            <section id="section-4" class="w-full lg:w-[80%] mx-auto flex flex-col items-start scroll-mt-20">
                <img src="http://pg.local/wp-content/uploads/f8278d0f0f3c9dc8bdd12184679c36dfb77b57e3.png"
                    class="w-full h-[320px] object-cover object-top rounded-md shadow-md" alt="Multilingual Desktop"
                    loading="lazy" />
                <h2 class="text-3xl font-extrabold mt-8 text-[#1F3131] tracking-wide">
                    Multilingual Desktop
                </h2>
                <p class="text-lg mt-4 text-[#1F3131] font-normal max-w-prose">
                    Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.
                </p>
                <ul class="list-none pl-0 mt-6 space-y-4 font-medium text-[#1F3131] max-w-prose">
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 1.</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 2.</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <img class="w-4 h-4"
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/dot.svg'); ?>"
                            alt="Bullet dot" />
                        <span>Detailed description of service 3.</span>
                    </li>
                </ul>
            </section>
        </div>
    </div>
</section>


<section 
  class="py-20 text-white bg-[linear-gradient(to_bottom,_#1F3131_50%,_#006155_100%)]"

> <div class="max-w-7xl mx-auto px-6 lg:px-0 text-center lg:text-left">
    <p class="text-lg font-medium  text-[#F9F8F6] mb-3">Why Piedmont Global</p>
    <h2 class="text-3xl sm:text-4xl md:text-5xl max-w-2xl font-extrabold mb-6 leading-[98%]">
      We Do More Than Translate.
      We Build Global Readiness.
    </h2>
    <p class="text-base sm:text-lg text-gray-300 max-w-2xl  lg:mx-0 mb-12">
      Translation isn’t a service—it’s a capability. One that’s embedded into your operations and aligned to your strategy. Here’s how we make the difference:
    </p>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <?php for ($i = 0; $i < 4; $i++) { ?>

      <div class="bg-[#006155] p-6 flex flex-col h-full transition-transform duration-300 ease-in-out hover:scale-[1.03] hover:shadow-lg hover:bg-[#007766]">
  <h3 class="font-semibold text-xl mb-4 text-start w-full lg:max-w-[80px]">Deep Expertise</h3>
  <div class="flex-grow h-36"></div>
  <p class="text-gray-100 text-base leading-relaxed">
    Native linguists. Industry-trained translators. QA processes backed by ISO certifications.
  </p>
</div>

      <?php } ?>

      
    </div>
  </div>
</section>


<section class="py-20 bg-[#F9F9F6] text-[#1F3131]">
  <div class="max-w-7xl mx-auto px-6 lg:px-0">
    <p class="text-lg font-medium  mb-2">Industries we support</p>
    <h2 class="text-3xl sm:text-4xl md:text-5xl max-w-4xl font-extrabold mb-6 leading-[98%]">
      Tailored solutions for regulated, high-impact sectors.
    </h2>

    <div class="grid gap-x-24 gap-y-6 sm:grid-cols-2">
      <?php 
        $industries = [
          ['title' => 'Healthcare', 'desc' => 'Patient comms, EHR content, regulatory notices'],
          ['title' => 'Education', 'desc' => 'IEPs, course materials, parental engagement'],
          ['title' => 'Manufacturing', 'desc' => 'Safety manuals, tech specs, SOPs'],
          ['title' => 'Public Sector', 'desc' => 'Community notices, multilingual outreach'],
          ['title' => 'Energy & Utilities', 'desc' => 'Emergency messaging, service updates']
        ];

        foreach ($industries as $industry) : 
      ?>
        <a href="#" class="group block border-b border-gray-300 py-6 pr-4 pl-0 transition-colors duration-200 ease-in-out hover:border-[#98C441]">
    <div class="flex items-center justify-between">
        <div class="flex-grow">
            <h3 class="font-semibold text-xl text-[#1F3131] transition-colors duration-200 ease-in-out group-hover:text-[#0F1E1E]">
                <?php echo esc_html($industry['title']); ?>
            </h3>
            <p class="mt-2 text-base text-gray-500 transition-colors duration-200 ease-in-out group-hover:text-gray-700">
                <?php echo esc_html($industry['desc']); ?>
            </p>
        </div>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/wierd-arrow.svg'); ?>"
             alt="arrow"
             class="w-6 h-6 ml-4 transform transition-transform duration-200 ease-in-out group:rotate-90 group-hover:scale-110"
        >
    </div>
</a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<script>
const buttons = document.querySelectorAll('.menu-btn');
const sections = document.querySelectorAll('section[id^="section-"]');
const rightContent = document.querySelector('.lg\\:w-2\\/3');

function clearActive() {
    buttons.forEach((btn) => {
        btn.classList.remove('opacity-100', 'border-l-4', 'border-l-[#98C441]', 'font-semibold',
            'text-[#0F1E1E]');
        btn.classList.add('opacity-50', 'border-l-0', 'font-medium', 'text-[#555F58]');
        btn.setAttribute('aria-current', 'false');
    });
}

function setActive(index) {
    clearActive();
    buttons[index].classList.add('opacity-100', 'border-l-4', 'border-l-[#98C441]', 'font-semibold', 'text-[#0F1E1E]');
    buttons[index].classList.remove('opacity-50', 'border-l-0', 'font-medium', 'text-[#555F58]');
    buttons[index].setAttribute('aria-current', 'true');
}

buttons.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        sections[i].scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
        setActive(i);
    });
});

let ticking = false;
rightContent.addEventListener('scroll', () => {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            const scrollPos = rightContent.scrollTop + rightContent.offsetHeight / 3;

            for (let i = sections.length - 1; i >= 0; i--) {
                if (scrollPos >= sections[i].offsetTop) {
                    setActive(i);
                    break;
                }
            }

            ticking = false;
        });

        ticking = true;
    }
});

// Init active on load
window.addEventListener('load', () => setActive(0));
</script>

<?php get_footer(); ?>