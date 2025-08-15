<section  class="relative bg-[linear-gradient(to_bottom,_#1F3131_85%,_#006155_100%)] h-auto lg:h-[80vh] w-full text-white overflow-hidden">
    <!-- Navigation -->
    <?php get_template_part('components/navigation/desktop'); ?>
    <?php get_template_part('components/navigation/mobile'); ?>

    <div class="w-full pt-[10%] px-6 md:px-12 relative z-20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
            <!-- Left Column -->
            <div class="md:col-span-7 space-y-6 order-1">
                <div class="text-3xl md:text-5xl leading-[40px] md:leading-[50px] font-semibold" data-aos="fade-up"
                    data-aos-delay="200"
                    data-aos-duration="1000">
                    <?php echo wp_kses_post ( get_field('bannner_title') ); ?>
                </div>
                <div class="text-xl leading-relaxed font-normal" data-aos="fade-up"
                    data-aos-delay="400"
                    data-aos-duration="1000">
                    <?php echo wp_kses_post ( get_field('banner_description') ); ?>
                </div>

                <div class="flex flex-wrap items-center gap-7" data-aos="fade-up"
                    data-aos-delay="600"
                    data-aos-duration="1000">
                    <a href="<?php echo wp_kses_post ( get_field('primary_button_link') ); ?>" class="inline-block bg-[#98C441] text-[#1F3131] px-5 py-3 font-semibold text-base shadow-md hover:bg-[#8AB738] focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#98C441] transition">
                                            <?php echo wp_kses_post ( get_field('primary_button_title') ); ?>

                    </a>
                    <a href="<?php echo wp_kses_post ( get_field('secondary_button_link') ); ?>" class=" flex items-center text-white text-base font-semibold hover:underline">
                        <?php echo wp_kses_post ( get_field('secondary_button_title') ); ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-right.svg'); ?>" class="ml-2 h-6 w-6" alt="">
                    </a>
                </div>
            </div>

            <!-- Right Column Image -->
            <div class="md:col-span-5 order-2 flex justify-center md:justify-end">
                <img src="<?php echo esc_url(get_field('banner_image')); ?>"
                     alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                     class="w-full max-w-[440px] h-auto shadow-md md:absolute md:bottom-[-50%] md:right-0 md:z-20">
            </div>
        </div>
    </div>

    <!-- Bottom Pattern -->
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/pattern-1.svg'); ?>"
         alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
         class="absolute bottom-[-19%] left-0 w-full h-[300px] z-10">
</section>
