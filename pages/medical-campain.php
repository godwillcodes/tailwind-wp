<?php
/**
 * Template Name: Medical Campain
 * Description: 
 */
get_header();
?>
<header class="relative w-full text-white overflow-hidden" style="background-image: url('http://pg.local/wp-content/uploads/Hero-1-Dark.png'); 
               background-size: cover; 
               background-position: center;">

    <?php get_template_part('components/navigation/desktop'); ?>
    <?php get_template_part('components/navigation/mobile'); ?>

    <div class="w-full pt-[30%] lg:pt-[12%] px-6 lg:px-0 relative z-20 pb-10 lg:pb-40">
        <div class="text-start gap-y-8 max-w-7xl mx-auto">

            <h1 class="text-lg max-w-3xl font-extrabold mb-6 leading-[98%]">
                <?php the_title(); ?>
            </h1>

            <h2 class="text-4xl py-3 md:text-5xl max-w-3xl font-extrabold mb-6 leading-[98%]">
                One Partner for Language Access that Works – For Everyone
            </h2>

            <p class="text-base lg:text-lg my-4 max-w-4xl">
                From interpreters to intake forms, we make communication easy
                for patients—and even easier for providers.
            </p>

            <a href="#" class="group inline-flex items-center gap-2 mt-8 bg-[#98C441] text-[#1F3131] px-6 py-3 
                      font-semibold text-base shadow-md transition-all duration-300 hover:bg-[#8AB738] 
                      focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 
                      focus-visible:ring-[#98C441]">
                <span>Schedule a Consultation</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
            </a>

        </div>
    </div>
</header>


<section class="bg-white py-20 px-6 md:px-10 lg:px-0">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl py-3 md:text-4xl max-w-3xl mx-auto font-extrabold mb-6 leading-[98%]">
            Who We Serve
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-start">

            <?php for ($i = 0; $i < 4; $i++) { ?>
            <div class="group bg-[#006155] p-6 text-[#F9F8F6] flex flex-col items-start transition-all duration-500 ease-out hover:-translate-y-2 hover:bg-[#037a68] aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="mb-6" aria-hidden="true">
                    <img src="http://pg.local/wp-content/uploads/mediation.svg" alt=""
                        class="w-8 h-8 object-contain transition-transform duration-500 group-hover:scale-110">
                </div>



                <div class="h-48" aria-hidden="true"></div>
                <h3 class="text-2xl font-semibold mb-4">Healthcare Providers</h3>
                <p class="text-lg opacity-90 max-w-sm transition-opacity duration-500 group-hover:opacity-100">
                    (so your brand and mission resonate across cultures) </p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="pb-12 md:pb-10">
    <div class="max-w-7xl mx-auto w-full px-6 md:px-10 lg:px-0 text-black">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center">

            <!-- Sticky Content -->
            <div class="relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="700"
                data-aos-easing="ease-out-cubic">
                <div class="sticky top-24">
                    <h2 class="text-4xl py-3 md:text-4xl font-extrabold mb-6 leading-[98%]">
                        Why It Matters
                    </h2>
                    <div class=" text-lg  font-normal space-y-4 mb-10">

                        <p>Built for healthcare systems, backed by expert insight, and designed to improve every step of
                            the care journey.</p>

                    </div>
                    <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="flex gap-4 mt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dot3.svg" alt="">
                        <p class="text-lg  font-normal space-y-4">People in the U.S. speak a language other than English
                            at home.</p>

                    </div>
                    <?php } ?>


                </div>
            </div>

            <!-- Scrollable Image -->
            <div data-aos="fade-down" data-aos-duration="700" data-aos-easing="ease-out-cubic"
                class="aos-init aos-animate">
                <img src="http://pg.local/wp-content/uploads/920a12d43a05b9e1c1075877b1e363c8c895c6a2.jpg"
                    alt="Globalization illustration" class="shadow-md object-cover w-full h-[300px] md:h-[500px]"
                    loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>


<section>
    <div class="max-w-7xl mx-auto w-full px-6 py-20 md:px-10 lg:px-0 text-black">
        <p class="text-xl font-medium text-black">What We Offer</p>
        <h2 class="text-4xl mt-3 md:text-4xl font-extrabold mb-6 leading-[98%]">
            Strategic Language Access for Healthcare
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-12 md:gap-5 items-center">
            <?php for ($i = 0; $i < 5; $i++) { ?>
            <div class="bg-[#006155] shadow-lg p-6 text-white flex flex-col items-start transition-transform duration-200 hover:scale-95 hover:shadow-xl focus-within:ring-2 focus-within:ring-[#98C441] focus-within:ring-offset-2 focus-within:ring-offset-[#1F3131] aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="400" data-aos-delay="250">

                <div class="mb-6" aria-hidden="true">
                    <img src="http://pg.local/wp-content/uploads/school.svg" alt="" class="w-8 h-8 object-contain">
                </div>

                <div class="h-24" aria-hidden="true"></div>

                <h3 class="text-2xl font-semibold mb-2">
                    Multilingual Workforce Training </h3>

                <p class="text-base opacity-90">
                    Safety, onboarding, and compliance materials </p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="py-20 px-6 md:px-20">
    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8 items-stretch">

        <!-- 2/3 Column -->
        <div class="md:col-span-2 bg-[#DFDAD433] rounded border border-[#DFDAD4] p-8 shadow-sm flex flex-col">
            <img src="http://pg.local/wp-content/themes/tailwind-wp/assets/icons/quote.svg" alt="Nonprofit Client"
                class="h-10 w-10 mb-4">
                <div class="h-24"></div>
            <p class="text-base md:text-3xl text-gray-800 font-medium flex-grow max-w-xl">
            PGLS made the transition extremely easy and smooth… They’ve been outstanding to work with. </p>
           
        </div>



        <!-- 1/3 Column -->
        <div class="bg-[#006155] rounded border border-[#DFDAD4] overflow-hidden shadow-sm">
        
            <div class="py-6 px-8 space-y-1 text-white">
                <img src="https://gtindependence.com/wp-content/themes/gtindependence/images/logo-white.png" class="w-32 h-auto object-contain mb-4" alt="">
                <p class="text-lg font-semibold">Jeremy Gump</p>
                <p class="text-lg">CAO, GT Independence.</p>
                <div class="h-24"></div>
                <a href="#"
                    class="inline-flex items-center mt-10 text-sm text-white font-medium border-b-2 border-[#ffffff] hover:border-[#ffffff] transition-colors duration-300 aos-init aos-animate"
                    data-aos="fade-left" data-aos-delay="100">
                    View Case Study <span class="ml-1 text-lg">→</span>
                </a>
            </div>
        </div>


    </div>
</section>
<section class="bg-[#1F3131] py-28 text-center" aria-labelledby="industry-cta-title">
    <div class="max-w-3xl mx-auto px-4">
        <!-- Heading -->
        <h2 id="industry-cta-title" class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#F9F8F6] tracking-tight"
            data-aos="fade-up" data-aos-duration="400">
            Let’s Build a Better Patient Experience.
        </h2>

        <!-- Subheading -->
        <p class="mt-6 text-base lg:text-lg text-[#F9F8F6] leading-relaxed" 
           data-aos="fade-up" data-aos-duration="400" data-aos-delay="50">
           Connect with a healthcare strategist today to assess your current language access approach and explore what’s possible.
        </p>

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-6" 
             data-aos="fade-up" data-aos-duration="400" data-aos-delay="100">
            <a href="/contact"
                class="bg-[#8DC63F] hover:bg-[#7AB22E] text-black font-medium px-6 py-3 text-base lg:text-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#7AB22E] focus:ring-offset-2 focus:ring-offset-[#1F3131]"
                aria-label="Schedule a consultation - opens contact form">
                Schedule a Consultation
            </a>
            <a href="#" 
               class="flex items-center text-[#F9F8F6] font-medium text-base lg:text-lg hover:underline focus:outline-none focus:ring-2 focus:ring-[#F9F8F6] focus:ring-offset-2 focus:ring-offset-[#1F3131] transition-colors duration-200">
               Download Language Access Guide
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>
<?php
get_footer(); 