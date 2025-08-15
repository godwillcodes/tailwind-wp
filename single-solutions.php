<?php
get_header();
get_template_part('components/banner/tertiary');
?>

<section class="bg-[linear-gradient(to_bottom,_#006155_1%,_#1F3131_40%)] w-full py-20 shadow-sm">
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
        <h3
            class="text-3xl lg:text-5xl font-extrabold mb-10 text-center leading-tight max-w-4xl mx-auto text-[#0F1E1E]">
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


<section class="py-20 text-white bg-[linear-gradient(to_bottom,_#1F3131_50%,_#006155_100%)]">
    <div class="max-w-7xl mx-auto px-6 lg:px-0 text-center lg:text-left">
        <p class="text-lg font-medium  text-[#F9F8F6] mb-3">Why Piedmont Global</p>
        <h2 class="text-3xl sm:text-4xl md:text-5xl max-w-2xl font-extrabold mb-6 leading-[98%]">
            We Do More Than Translate.
            We Build Global Readiness.
        </h2>
        <p class="text-base sm:text-lg text-gray-300 max-w-2xl  lg:mx-0 mb-12">
            Translation isn’t a service—it’s a capability. One that’s embedded into your operations and aligned to your
            strategy. Here’s how we make the difference:
        </p>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <?php for ($i = 0; $i < 4; $i++) { ?>

            <div
                class="bg-[#006155] p-6 flex flex-col h-full transition-transform duration-300 ease-in-out hover:scale-[1.03] hover:shadow-lg hover:bg-[#007766]">
                <h3 class="font-semibold text-lg lg:text-xl mb-4 text-start w-full lg:max-w-[80px]">Deep Expertise</h3>
                <div class="flex-grow h-36"></div>
                <p class="text-gray-100 text-base text-start lg:text-lg leading-relaxed">
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

        <div class="grid gap-x-24 gap-y-6 sm:grid-cols-2 mt-16">
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
            <a href="#"
                class="group block border-b border-gray-300 px-4 py-6 transition-colors duration-200 ease-in-out hover:border-[#98C441]"
                aria-label="<?php echo esc_attr($industry['title'] . ': ' . $industry['desc']); ?>">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <h3
                            class="font-semibold text-lg sm:text-xl text-[#1F3131] transition-colors duration-200 ease-in-out group-hover:text-[#0F2A2A]">
                            <?php echo esc_html($industry['title']); ?>
                        </h3>
                        <p
                            class="mt-2 text-base sm:text-lg text-gray-500 transition-colors duration-200 ease-in-out group-hover:text-gray-700">
                            <?php echo esc_html($industry['desc']); ?>
                        </p>
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/wierd-arrow.svg'); ?>"
                        alt="" aria-hidden="true"
                        class="w-8 h-8 ml-4 transform transition duration-200 ease-in-out group-hover:rotate-45 group-hover:scale-110">
                </div>
            </a>

            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-0">
        <!-- Section Header -->
        <div class="mb-12">
            <p class="text-lg font-medium  mb-2">Industries we support</p>
            <h2 class="text-3xl sm:text-4xl md:text-5xl max-w-4xl font-extrabold mb-6 leading-[98%]">
                Tailored solutions for regulated, high-impact sectors.
            </h2>
        </div>

        <!-- Features Grid -->
        <div class="grid gap-6 grid-cols-1 lg:grid-cols-2">
            <!-- ISO-Certified Quality (Full width on large screens) -->
            <div
                class="block md:flex flex-col md:flex-row items-center md:justify-between p-6 sm:p-8 md:p-12 border border-[#DFDAD4] rounded-lg lg:col-span-2">
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <h3 class="text-2xl sm:text-3xl md:text-3xl font-semibold text-gray-900">
                        ISO-Certified Quality
                    </h3>
                </div>
                <div class="flex flex-wrap justify-center md:justify-end gap-4 md:gap-4">
                    <?php for ($i = 0; $i <2  ; $i++) { ?>
                    <a href="" target="_blank" rel="noopener">
                        <span
                            class="flex items-center justify-center h-24 w-24 sm:h-28 sm:w-28 md:h-32 md:w-32 rounded-full bg-gradient-to-b from-gray-100 to-green-100 shadow-sm"
                            aria-label="Piedmont Global Recognition">
                            <img src="http://pg.local/wp-content/uploads/fc6c468ca3bf0a126824235c072b86a661d06935.png"
                                alt="Piedmont Global Recognition"
                                class="max-h-20 max-w-20 sm:max-h-24 sm:max-w-24 md:max-h-20 md:max-w-20 object-contain">
                        </span>
                    </a>
                    <?php } ?>
                </div>
            </div>

            <?php for ($i = 0; $i < 2; $i++) { ?>

            <!-- Integrated Workflow -->
            <div class="items-justify gap-4 border border-[#DFDAD4] rounded-lg p-12 shadow-md">
                <div class="flex-shrink-0">
                    <span
                        class="flex items-center justify-center h-16 w-16 lg:h-24 lg:w-24 rounded-full bg-gradient-to-b from-gray-100 to-green-100 shadow-sm"
                        aria-label="Piedmont Global Recognition">
                        <img src="http://pg.local/wp-content/uploads/fc6c468ca3bf0a126824235c072b86a661d06935.png"
                            alt="Piedmont Global Recognition"
                            class="max-h-10 lg:max-h-16 max-w-10 lg:max-w-16 object-contain">
                    </span>
                </div>
                <div class="pt-4">
                    <h3 class="text-xl lg:text-2xl text-[#1F3131] font-semibold">
                        200+ Languages </h3>
                    <p class="text-gray-600 text-base lg:text-lg pt-2">
                        Supporting copy can go here and further drive home this point by balancing this space </p>
                </div>
            </div>
            <?php } ?>

            <!-- Global Reach, Local Sensitivity -->

        </div>

    </div>
</section>

<section class="bg-[#1F3131] py-28 text-center">
    <div class="max-w-3xl mx-auto px-4">
        <!-- Heading -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#F9F8F6] tracking-tight">
            Let’s Translate What Matters
        </h1>

        <!-- Subheading -->
        <p class="mt-6 text-base lg:text-lg text-[#F9F8F6] leading-relaxed">
            Looking for a partner who understands that translation<br class="hidden sm:block">
            is mission-critical, not just transactional?
        </p>
        <p class="mt-4 text-base lg:text-lg text-[#F9F8F6]">
            Let’s build something lasting—together.
        </p>

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-6">
            <a href="#"
                class="bg-[#8DC63F] hover:bg-[#7AB22E] text-black font-medium px-6 py-3 text-base lg:text-lg transition">
                Schedule a Consultation
            </a>
            <a href="#" class="flex items-center text-[#F9F8F6] font-medium text-base lg:text-lg hover:underline">
                Download Language Access Guide
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
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