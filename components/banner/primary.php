<section  class="relative bg-[linear-gradient(to_bottom,_#1F3131_85%,_#006155_100%)] h-auto md:h-[80vh] w-full text-white overflow-hidden">
    <!-- Navigation -->
    <?php get_template_part('components/navigation/desktop'); ?>
    <?php get_template_part('components/navigation/mobile'); ?>

    <div class="w-full pt-20 px-6 md:px-12 relative z-20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
            <!-- Left Column -->
            <div class="md:col-span-7 space-y-6 order-1">
                <h1 class="text-3xl md:text-5xl leading-[40px] md:leading-[50px] font-semibold" data-aos="fade-up"
                    data-aos-delay="200"
                    data-aos-duration="1000">
                    Strategic globalization.<br>
                    Human connection.<br>
                    Seamless delivery.
                </h1>
                <p class="text-xl leading-relaxed" data-aos="fade-up"
                    data-aos-delay="400"
                    data-aos-duration="1000">
                    We help you with the ​people, capabilities, and strategies you need to lead with clarity, confidence, and cultural fluency. Let’s build real connection across markets, channels, and communities.
                </p>
                <div class="flex flex-wrap items-center gap-7" data-aos="fade-up"
                    data-aos-delay="600"
                    data-aos-duration="1000">
                    <a href="#" class="inline-block bg-[#98C441] text-[#1F3131] px-5 py-3 font-medium text-base shadow-md hover:bg-[#8AB738] focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#98C441] transition">
                        Talk to our team
                    </a>
                    <a href="#" class="flex items-center text-white text-base font-medium hover:underline">
                        What is Strategic Globalization?
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-right.svg'); ?>" class="ml-2 h-4 w-4" alt="">
                    </a>
                </div>
            </div>

            <!-- Right Column Image -->
            <div class="md:col-span-5 order-2 flex justify-center md:justify-end">
                <img src=" /wp-content/uploads/iStock-1454186321-1.webp"
                     alt="Feature Image"
                     class="w-full max-w-[440px] h-auto shadow-md md:absolute md:bottom-[-60%] md:right-0 md:z-20">
            </div>
        </div>
    </div>

    <!-- Bottom Pattern -->
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/pattern-1.svg'); ?>"
         alt="Hero Pattern"
         class="absolute bottom-[-120px] left-0 w-full h-[300px] z-10">
</section>
