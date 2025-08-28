<?php
get_header();
?>

<section class="shadow-sm bg-[#1F3131]">
    <div class="bg-[#1F3131] pt-8 pb-12">
        <?php get_template_part('components/navigation/desktop'); ?>
        <?php get_template_part('components/navigation/mobile'); ?>
    </div>



    <div class="relative h-[500px] md:h-[400px] lg:h-[554px] bg-cover bg-no-repeat bg-right-bottom"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/icons/single-industries.svg'); ?>');">

        <!-- gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#1F3131]/90 via-[#1F3131]/70 to-transparent"></div>

        <!-- Content container - removed absolute positioning -->
        <div class="relative z-10 h-full flex items-center">
            <div class="max-w-7xl mx-auto w-full px-10 lg:px-0 pb-4 md:pb-12 lg:pb-12 text-white">
                <h1 class="text-lg font-medium text-[#F9F8F6]" data-aos="fade-up" data-aos-delay="200">
                    <?php the_title(); ?>
                </h1>
                <h2 class="text-2xl mt-4 md:text-4xl lg:text-5xl font-bold">Industry Callout Goes Here</h2>
                <p class="text-base lg:text-lg my-4 max-w-4xl" data-aos="fade-up" data-aos-delay="400">
                    Industry description goes here.
                </p>
                <a href="/contact"
                    class="inline-flex items-center gap-2 bg-[#98C441] text-[#1F3131] px-4 py-2 mt-4 font-medium text-base lg:text-lg shadow-md rounded-0 hover:bg-[#8AB738] focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#98C441] transition">
                    <span>Schedule a Consultation</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="bg-white lg:pt-0 pt-10">
    <div class="max-w-7xl mx-auto px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        <!-- Left side: Title and Description -->
        <div>
            <h2 class="text-2xl mt-4 md:text-4xl lg:text-5xl max-w-sm font-bold mb-6">
                Why Piedmont Global
            </h2>
            <p class="text-base md:text-lg text-black max-w-xl mb-6">
                Why Piedmont Global description goes here. Provide context, highlight impact, or explain the relevance
                of the service/product in this space.
            </p>

            <p class="text-base md:text-lg text-black max-w-xl mb-6">
                Why Piedmont Global description goes here. Provide context, highlight impact, or explain the relevance
                of the service/product in this space.
            </p>

        </div>

        <!-- Right side: Image -->
        <div class="flex justify-center lg:justify-end">
            <img src="/wp-content/uploads/iStock-1454186321-1.png" alt="Industry illustration"
                class="max-w-full h-auto">
        </div>

    </div>
</section>



<section class="max-w-7xl mx-auto flex flex-col md:flex-row gap-12 w-full px-8 py-24 lg:px-0">
    <!-- Left -->
    <div class="w-full md:w-[38%]  text-white text-start">
        <div class="flex flex-col justify-between p-10 lg:p-16 w-full h-full"
            style="background: linear-gradient(144.23deg, rgba(223, 218, 212, 0.3) 13.38%, rgba(152, 196, 65, 0.3) 148.4%);">
            <!-- Title at the top -->
            <h2 class="text-lg font-medium text-[#1F3131]"> Industry Challange </h2>

            <div class="h-20 lg:h-36"></div>
            <!-- Description anchored to bottom -->
            <p class="text-lg lg:text-2xl text-[#1F3131] mt-8 font-bold"> Industry Challange description goes here. </p>
        </div>
    </div>

    <!-- Middle -->
    <div class="hidden lg:block w-full md:w-[12%]  text-center">

    </div>

    <!-- Right -->
    <div class="w-full md:w-[50%] text-start relative">
        <h2 class="text-2xl mt-4 md:text-4xl lg:text-5xl max-w-sm font-bold mb-6">
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
            class="lg:absolute lg:bottom-10 inline-flex items-center text-base lg:text-lg font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300 aos-init aos-animate">
            Explore full capabilities
            <span class="ml-1 text-lg">→</span>
        </a>

    </div>
</section>


<section class="bg-[#006155] bg-cover bg-center relative"
    style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/icons/industries.svg'); ?>');">
    <div class="max-w-7xl mx-auto py-20">
        <div class="text-center space-y-4">
            <h2 class="text-lg text-[#F9F8F6]">Green Repeater Section Title</h2>
            <h3
                class=" font-bold text-2xl mt-4 md:text-4xl lg:text-5xl leading-[98%] tracking-[-0.02em] text-center text-[#F9F8F6]">
                Our Strategic Approach
            </h3>
            <p class="text-base md:text-lg  text-center leading-[140%] tracking-[-0.02em] font-normal text-[#F9F8F6]">
                Green Repeater Section Description goes here.
            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 py-20 px-6 lg:px-0">
            <?php for ($i = 0; $i < 6; $i++) { ?>
            <div
                class="bg-[#006155] shadow-lg p-6 text-white flex flex-col items-start transition-transform duration-300 hover:scale-95 hover:shadow-xl">
                <!-- Icon -->
                <div class="mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </div>

                <div class="h-24"></div>

                <!-- Title -->
                <h3 class="text-2xl font-semibold mb-2">Card Title</h3>

                <!-- Description -->
                <p class="text-base opacity-90">
                    This is a short description that explains what this card is about. Keep it concise and clear.
                </p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<section style="background: linear-gradient(to bottom, #F7F7F5 0%, #F7F7F5 90%, #98C44180 100%);">
    <div class="max-w-7xl mx-auto px-4 py-24 grid grid-cols-1 md:grid-cols-12 gap-6">
        <!-- Left Card (1/3 width) -->
        <div class="bg-[#8BC34A]  p-8 flex flex-col justify-between text-white md:col-span-4">
            <div>
                <p class="text-base font-medium mb-4 text-[#1F3131]">Case Study</p>
                <h2 class="text-2xl md:text-3xl font-bold mb-6 text-white">
                    Scaling Access with GT Independence
                </h2>
            </div>

            <div class="h-24"></div>
            <p class="text-base text-[#1F3131] leading-relaxed opacity-90">
                How Piedmont Global helped a leading Medicaid provider transition to a full-scale language
                access strategy—improving onboarding, lowering readmissions, and delivering multilingual
                support across 150,000+ users.
            </p>
        </div>

        <!-- Right Card (2/3 width) -->
        <div class="bg-[#DFDAD433] border-[1px] border-[#DFDAD4]  p-8 flex flex-col justify-between md:col-span-8">
            <div>
                <img src="http://pg.local/wp-content/themes/pg/assets/icons/quote.svg" alt="Healthcare Network Director"
                    class="h-20 w-20 mb-4">
                <p class="text-2xl md:text-3xl font-normal leading-snug text-gray-800 mb-6">
                    Piedmont Global helped us move from reactive fixes to a proactive strategy—one
                    that supports both compliance and care.
                </p>
            </div>
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mt-auto gap-4">
                <p class="text-base font-semibold text-gray-900">
                    Director of Member Experience
                </p>
                <a href="#"
                    class="inline-flex items-center w-auto text-base font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300">
                    Explore full capabilities
                    <span class="ml-1 text-lg">→</span>
                </a>
            </div>

        </div>
    </div>
    <div class="max-w-7xl mx-auto px-6 pb-24 grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">
        <!-- Left Box (Images Only) -->
        <div class="border border-[#DFDAD4] rounded-lg p-10 grid grid-cols-2 gap-6 place-items-center h-full">
            <!-- Section 1557 -->
            <img src="https://dummyimage.com/200x100/3B7F7A/ffffff&text=Section+1557" alt="Section 1557"
                class="h-20 object-contain" />

            <!-- ACA Logo -->
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/US-DeptOfHealthAndHumanServices-Seal.svg/1200px-US-DeptOfHealthAndHumanServices-Seal.svg.png"
                alt="ACA Logo" class="h-24 object-contain" />

            <!-- ADA -->
            <img src="https://dummyimage.com/200x80/1C3C4A/ffffff&text=ADA+-+Americans+with+Disabilities+Act"
                alt="ADA Logo" class="h-16 object-contain" />
        </div>

        <!-- Right Content -->
        <div class="h-full flex flex-col justify-center">
            <h2 class="text-2xl mt-4 md:text-4xl lg:text-5xl font-bold leading-tight text-gray-900 mb-6">
                Operational Confidence.<br />
                Patient Trust.<br />
                Scalable Impact.
            </h2>
            <p class="text-lg text-gray-700 mb-6">
                Our programs align with ADA, ACA, and Section 1557 regulations to ensure your language
                access plan is compliant, efficient, and equity-driven. Some of our outcomes & benefits:
            </p>
            <ul class="space-y-3 text-gray-800 text-lg">
                <li class="flex items-start"><span class="text-[#3B7F7A] mr-2">•</span> Fewer care delays and adverse
                    events</li>
                <li class="flex items-start"><span class="text-[#3B7F7A] mr-2">•</span> Improved CMS HCAHPS and STAR
                    ratings</li>
                <li class="flex items-start"><span class="text-[#3B7F7A] mr-2">•</span> Reduced risk and greater
                    compliance</li>
                <li class="flex items-start"><span class="text-[#3B7F7A] mr-2">•</span> Higher patient satisfaction and
                    engagement</li>
                <li class="flex items-start"><span class="text-[#3B7F7A] mr-2">•</span> Equitable access for every
                    community you serve</li>
            </ul>
        </div>
    </div>



</section>
<section class="bg-[#1F3131] py-28 text-center">
    <div class="max-w-3xl mx-auto px-4">
        <!-- Heading -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#F9F8F6] tracking-tight" data-aos="fade-up"
            data-aos-delay="100" data-aos-duration="800">
            Let's Translate What Matters
        </h1>

        <!-- Subheading -->
        <p class="mt-6 text-base lg:text-lg text-[#F9F8F6] leading-relaxed" data-aos="fade-up" data-aos-delay="200"
            data-aos-duration="600">
            Looking for a partner who understands that translation<br class="hidden sm:block">
            is mission-critical, not just transactional?
        </p>
        <p class="mt-4 text-base lg:text-lg text-[#F9F8F6]" data-aos="fade-up" data-aos-delay="300"
            data-aos-duration="600">
            Let's build something lasting—together.
        </p>

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-6" data-aos="fade-up"
            data-aos-delay="400" data-aos-duration="700">
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






<?php get_footer(); ?>