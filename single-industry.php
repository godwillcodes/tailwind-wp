<?php
get_header();
?>

<header class="shadow-sm bg-[#1F3131]" role="banner">
    <div class="bg-[#1F3131] pt-8 pb-12">
        <nav aria-label="Primary desktop navigation">
            <?php get_template_part('components/navigation/desktop'); ?>
        </nav>
        <nav aria-label="Primary mobile navigation">
            <?php get_template_part('components/navigation/mobile'); ?>
        </nav>
    </div>

    <div class="relative h-[500px] md:h-[400px] lg:h-[554px] bg-cover bg-no-repeat bg-right-bottom"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/icons/single-industries.svg'); ?>');">

        <!-- gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#1F3131]/90 via-[#1F3131]/70 to-transparent" aria-hidden="true"></div>

        <!-- Content container -->
        <div class="relative z-10 h-full flex items-center">
            <div class="max-w-7xl mx-auto w-full px-10 lg:px-0 pb-4 md:pb-12 lg:pb-12 text-white">
                <h1 class="text-lg font-medium text-[#F9F8F6]" data-aos="fade-up" data-aos-delay="100" tabindex="0">
                    <?php the_title(); ?>
                </h1>
                <h2 class="text-2xl mt-4 md:text-4xl lg:text-5xl font-bold" data-aos="fade-up" data-aos-delay="200">Industry Callout Goes Here</h2>
                <p class="text-base lg:text-lg my-4 max-w-4xl" data-aos="fade-up" data-aos-delay="300">
                    Industry description goes here.
                </p>
                <a href="/contact"
                    class="inline-flex items-center gap-2 bg-[#98C441] text-[#1F3131] px-4 py-2 mt-4 font-medium text-base lg:text-lg shadow-md rounded-0 hover:bg-[#8AB738] focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#98C441] transition"
                    role="button" aria-label="Schedule a consultation">
                    <span>Schedule a Consultation</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6" aria-hidden="true" focusable="false">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>

<main id="maincontent" tabindex="-1">

    <section class="bg-white lg:pt-0 pt-10" aria-labelledby="why-piedmont-title">
        <div class="max-w-7xl mx-auto px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left side: Title and Description -->
            <article>
                <h2 id="why-piedmont-title" class="text-2xl mt-4 md:text-4xl lg:text-5xl max-w-sm font-bold mb-6" data-aos="fade-up" data-aos-delay="100">
                    Why Piedmont Global
                </h2>
                <p class="text-base md:text-lg text-black max-w-xl mb-6" data-aos="fade-up" data-aos-delay="200">
                    Why Piedmont Global description goes here. Provide context, highlight impact, or explain the relevance
                    of the service/product in this space.
                </p>
                <p class="text-base md:text-lg text-black max-w-xl mb-6" data-aos="fade-up" data-aos-delay="300">
                    Why Piedmont Global description goes here. Provide context, highlight impact, or explain the relevance
                    of the service/product in this space.
                </p>
            </article>

            <!-- Right side: Image -->
            <figure class="flex justify-center lg:justify-end" data-aos="fade-up" data-aos-delay="400">
                <img src="/wp-content/uploads/iStock-1454186321-1.png" alt="Illustration showing industry-related graphics"
                    class="max-w-full h-auto" />
            </figure>

        </div>
    </section>

    <section class="max-w-7xl mx-auto flex flex-col md:flex-row gap-12 w-full px-8 py-24 lg:px-0" aria-labelledby="industry-challenge-title">
        <!-- Left -->
        <article class="w-full md:w-[38%] text-start" data-aos="fade-up" data-aos-delay="100">
            <div class="flex flex-col justify-between p-10 lg:p-16 w-full h-full"
                style="background: linear-gradient(144.23deg, rgba(223, 218, 212, 0.3) 13.38%, rgba(152, 196, 65, 0.3) 148.4%);">
                <h2 id="industry-challenge-title" class="text-lg font-medium text-[#1F3131]">Industry Challenge</h2>
                <div class="h-20 lg:h-36" aria-hidden="true"></div>
                <p class="text-lg lg:text-2xl text-[#1F3131] mt-8 font-bold">Industry Challenge description goes here.</p>
            </div>
        </article>

        <!-- Middle -->
        <div class="hidden lg:block w-full md:w-[12%] text-center" aria-hidden="true"></div>

        <!-- Right -->
        <article class="w-full md:w-[50%] text-start relative" data-aos="fade-up" data-aos-delay="200" aria-labelledby="secondary-title">
            <h2 id="secondary-title" class="text-2xl mt-4 md:text-4xl lg:text-5xl max-w-sm font-bold mb-6">
                Secondary Title
            </h2>
            <p class="text-base lg:text-lg text-black max-w-xl mb-6">
                Secondary Title description goes here. Provide context, highlight impact, or explain the relevance
                of the service/product in this space.
            </p>
            <p class="text-base lg:text-lg text-black max-w-xl mb-6">
                Secondary Title description goes here. Provide context, highlight impact, or explain the relevance
                of the service/product in this space.
            </p>

            <a href="#"
                class="lg:absolute lg:bottom-10 inline-flex items-center text-base lg:text-lg font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300"
                aria-label="Explore full capabilities">
                Explore full capabilities
                <span class="ml-1 text-lg" aria-hidden="true">→</span>
            </a>
        </article>
    </section>

    <section class="bg-[#1F3131] bg-cover bg-center relative" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/icons/industries.svg'); ?>');" aria-labelledby="strategic-approach-title" role="region">
        <div class="max-w-7xl mx-auto py-20">
            <header class="text-center space-y-4">
                <h2 id="strategic-approach-subtitle" class="text-lg text-[#F9F8F6]" data-aos="fade-up" data-aos-delay="100">Green Repeater Section Title</h2>
                <h3 id="strategic-approach-title" class="font-bold text-2xl mt-4 md:text-4xl lg:text-5xl leading-[98%] tracking-[-0.02em] text-[#F9F8F6]" data-aos="fade-up" data-aos-delay="200">Our Strategic Approach</h3>
                <p class="text-base md:text-lg leading-[140%] tracking-[-0.02em] font-normal text-[#F9F8F6]" data-aos="fade-up" data-aos-delay="300">
                    Green Repeater Section Description goes here.
                </p>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 py-20 px-6 lg:px-0">
                <?php for ($i = 0; $i < 6; $i++) { ?>
                <article
                    class="bg-[#006155] shadow-lg p-6 text-white flex flex-col items-start transition-transform duration-300 hover:scale-95 hover:shadow-xl"
                    data-aos="fade-up" data-aos-delay="<?php echo 400 + $i * 100; ?>" tabindex="0" aria-label="Strategic Approach Card <?php echo $i + 1; ?>">
                    <!-- Icon -->
                    <div class="mb-6" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>

                    <div class="h-24" aria-hidden="true"></div>

                    <!-- Title -->
                    <h3 class="text-2xl font-semibold mb-2">Card Title</h3>

                    <!-- Description -->
                    <p class="text-base opacity-90">
                        This is a short description that explains what this card is about. Keep it concise and clear.
                    </p>
                </article>
                <?php } ?>
            </div>
        </div>
    </section>

    <section style="background: linear-gradient(to bottom, #F7F7F5 0%, #F7F7F5 90%, #98C44180 100%);" aria-labelledby="case-study-title">
        <div class="max-w-7xl mx-auto px-4 py-24 grid grid-cols-1 md:grid-cols-12 gap-6" role="region">
            <!-- Left Card (1/3 width) -->
            <article class="bg-[#8BC34A] p-8 flex flex-col justify-between text-white md:col-span-4" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <p class="text-base font-medium mb-4 text-[#1F3131]" aria-label="Section type">Case Study</p>
                    <h2 id="case-study-title" class="text-2xl md:text-3xl font-bold mb-6 text-white">
                        Scaling Access with GT Independence
                    </h2>
                </div>

                <div class="h-24" aria-hidden="true"></div>
                <p class="text-base text-[#1F3131] leading-relaxed opacity-90">
                    How Piedmont Global helped a leading Medicaid provider transition to a full-scale language
                    access strategy—improving onboarding, lowering readmissions, and delivering multilingual
                    support across 150,000+ users.
                </p>
            </article>

            <!-- Right Card (2/3 width) -->
            <article class="bg-[#DFDAD433] border-[1px] border-[#DFDAD4] p-8 flex flex-col justify-between md:col-span-8" data-aos="fade-up" data-aos-delay="200" aria-label="Testimonial from Healthcare Network Director">
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/quote.svg'); ?>" alt="" class="h-20 w-20 mb-4" aria-hidden="true" />
                    <blockquote>
                        <p class="text-2xl md:text-3xl font-normal leading-snug text-gray-800 mb-6">
                            Piedmont Global helped us move from reactive fixes to a proactive strategy—one
                            that supports both compliance and care.
                        </p>
                    </blockquote>
                </div>
                <footer class="flex flex-col md:flex-row md:items-center md:justify-between mt-auto gap-4">
                    <p class="text-base font-semibold text-gray-900">Director of Member Experience</p>
                    <a href="#"
                        class="inline-flex items-center w-auto text-base font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300"
                        aria-label="Explore full capabilities">
                        Explore full capabilities
                        <span class="ml-1 text-lg" aria-hidden="true">→</span>
                    </a>
                </footer>
            </article>
        </div>

        <div class="max-w-7xl mx-auto px-6 pb-24 grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch" role="region" aria-label="Compliance logos and program benefits">
            <!-- Left Box (Images Only) -->
            <div class="border border-[#DFDAD4] rounded-lg p-10 grid grid-cols-2 gap-6 place-items-center h-full" aria-label="Compliance logos" role="list">
                <!-- Section 1557 logos -->
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/section-logo.svg'); ?>" alt="Section 1557 compliance logo <?php echo $i + 1; ?>"
                        class="h-12 lg:h-20 object-contain" role="listitem" />
                <?php } ?>
            </div>

            <!-- Right Content -->
            <div class="h-full flex flex-col justify-center" data-aos="fade-up" data-aos-delay="300">
                <h2 class="text-2xl mt-4 md:text-4xl lg:text-5xl font-bold leading-tight text-gray-900 mb-6">
                    Operational Confidence.<br />
                    Patient Trust.<br />
                    Scalable Impact.
                </h2>
                <p class="text-lg text-gray-700 mb-6">
                    Our programs align with ADA, ACA, and Section 1557 regulations to ensure your language
                    access plan is compliant, efficient, and equity-driven. Some of our outcomes &amp; benefits:
                </p>
                <ul class="space-y-3 text-gray-800 text-lg" aria-label="Benefits of language access program">
                    <li class="flex items-start"><span class="text-[#3B7F7A] mr-2" aria-hidden="true">•</span> Fewer care delays and adverse events</li>
                    <li class="flex items-start"><span class="text-[#3B7F7A] mr-2" aria-hidden="true">•</span> Improved CMS HCAHPS and STAR ratings</li>
                    <li class="flex items-start"><span class="text-[#3B7F7A] mr-2" aria-hidden="true">•</span> Reduced risk and greater compliance</li>
                    <li class="flex items-start"><span class="text-[#3B7F7A] mr-2" aria-hidden="true">•</span> Higher patient satisfaction and engagement</li>
                    <li class="flex items-start"><span class="text-[#3B7F7A] mr-2" aria-hidden="true">•</span> Equitable access for every community you serve</li>
                </ul>
            </div>
        </div>
    </section>

</main>

<section class="bg-[#1F3131] py-28 text-center" role="region" aria-labelledby="industry-cta-title">
    <div class="max-w-3xl mx-auto px-4">
        <!-- Heading -->
        <h1 id="industry-cta-title" class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#F9F8F6] tracking-tight" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" tabindex="0">
            Industry CTA Title Goes Here
        </h1>

        <!-- Subheading -->
        <p class="mt-6 text-base lg:text-lg text-[#F9F8F6] leading-relaxed" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
            Industry CTA description goes here. A brief, compelling statement that encourages users to take action.
        </p>

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700">
            <a href="#"
                class="bg-[#8DC63F] hover:bg-[#7AB22E] text-black font-medium px-6 py-3 text-base lg:text-lg transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#7AB22E]"
                role="button" aria-label="Schedule a Consultation">
                Schedule a Consultation
            </a>
            <a href="#" class="flex items-center text-[#F9F8F6] font-medium text-base lg:text-lg hover:underline" aria-label="Download Language Access Guide">
                Download Language Access Guide
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
