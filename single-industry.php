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
        <div class="absolute inset-0 bg-gradient-to-r from-[#1F3131]/90 via-[#1F3131]/70 to-transparent"
            aria-hidden="true"></div>

        <!-- Content container -->
        <div class="relative z-10 h-full flex items-center">
            <div class="max-w-7xl mx-auto w-full px-6 lg:px-0 pb-4 md:pb-12 lg:pb-12 text-white">
                <p class="text-lg font-medium text-[#F9F8F6]" data-aos="fade-up" data-aos-duration="400">
                    <?php the_title(); ?>
                </p>
                <h1 class="text-2xl mt-4 md:text-4xl lg:text-5xl font-bold" data-aos="fade-up" data-aos-duration="400" data-aos-delay="50">
                    <?php the_field('industry_callout'); ?>
                </h1>
                <p class="text-base lg:text-lg my-4 max-w-4xl" data-aos="fade-up" data-aos-duration="400" data-aos-delay="100">
                    <?php the_field('industry_description'); ?>
                </p>
                <a href="/contact"
                    class="inline-flex items-center gap-2 bg-[#98C441] text-[#1F3131] px-4 py-2 mt-4 font-bold text-base shadow-md rounded-0 hover:bg-[#8AB738] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#98C441] focus:ring-offset-[#1F3131] transition-colors duration-200"
                    aria-label="Schedule a consultation - opens contact form">
                    <span>Schedule a Consultation</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>

<main id="maincontent">

    <section class="bg-white lg:pt-0 pt-10" aria-labelledby="why-piedmont-title">
        <div class="max-w-7xl mx-auto px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left side: Title and Description -->
            <div>
                <h2 id="why-piedmont-title" class="text-2xl mt-4 md:text-4xl lg:text-5xl max-w-sm font-bold mb-6"
                    data-aos="fade-up" data-aos-duration="400">
                    <?php the_field('why_piedmont_global_title'); ?>
                </h2>
                <div class="text-base md:text-lg text-black max-w-xl mb-6 prose" data-aos="fade-up" data-aos-duration="400" data-aos-delay="50">
                    <?php echo wp_kses_post(get_field('why_piedmont_global_description')); ?>
                </div>
            </div>

            <!-- Right side: Image -->
            <div class="flex justify-center lg:justify-end" data-aos="fade-up" data-aos-duration="400" data-aos-delay="100">
                <?php 
                $why_piedmont_photo = get_field('why_piedmont_global_photo');
                $industry_title = get_the_title();
                ?>
                <img src="<?php echo esc_url($why_piedmont_photo); ?>"
                    alt="Piedmont Global team working with <?php echo esc_attr($industry_title); ?> clients" 
                    class="max-w-full h-auto" />
            </div>

        </div>
    </section>

    <section class="max-w-7xl mx-auto flex flex-col md:flex-row gap-12 w-full px-8 py-24 lg:px-0"
        aria-labelledby="industry-challenge-title">
        <!-- Left -->
        <div class="w-full md:w-[38%] text-start" data-aos="fade-up" data-aos-duration="400">
            <div class="flex flex-col justify-between p-10 lg:p-16 w-full h-full"
                style="background: linear-gradient(144.23deg, rgba(223, 218, 212, 0.3) 13.38%, rgba(152, 196, 65, 0.3) 148.4%);">
                <h2 id="industry-challenge-title" class="text-lg font-medium text-[#1F3131]">Industry Challenge</h2>
                <div class="h-20 lg:h-36" aria-hidden="true"></div>
                <div class="text-lg lg:text-2xl text-[#1F3131] mt-8 font-bold">
                    <?php echo wp_kses_post(get_field('gradient_section_description')); ?>
                </div>
            </div>
        </div>

        <!-- Middle -->
        <div class="hidden lg:block w-full md:w-[12%] text-center" aria-hidden="true"></div>

        <!-- Right -->
        <div class="w-full md:w-[50%] text-start relative" data-aos="fade-up" data-aos-duration="400" data-aos-delay="50"
            aria-labelledby="secondary-title">
            <h2 id="secondary-title" class="text-2xl mt-4 md:text-4xl lg:text-5xl max-w-md font-bold mb-6">
                <?php the_field('secondary_title'); ?>
            </h2>
            <div class="text-base lg:text-lg prose text-black max-w-xl mb-6">
                <?php echo wp_kses_post(get_field('secondary_description')); ?>
            </div>

            <a href="/contact"
                class="lg:absolute lg:bottom-10 inline-flex items-center text-base lg:text-lg font-medium border-b-2 border-[#D16555] hover:border-[#D16555] focus:outline-none focus:ring-2 focus:ring-[#D16555] focus:ring-offset-2 transition-colors duration-200"
                aria-label="Explore full capabilities - opens contact form">
                Explore full capabilities
                <span class="ml-1 text-lg" aria-hidden="true">→</span>
            </a>
        </div>
    </section>

    <section class="bg-[#1F3131] bg-cover bg-center relative"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/icons/1.svg'); ?>');"
        aria-labelledby="strategic-approach-title">
        <div class="max-w-7xl mx-auto py-20 px-6 lg:px-0">
            <header class="text-center space-y-4">
                <p class="text-lg text-[#F9F8F6]" data-aos="fade-up" data-aos-duration="400">
                    <?php the_field('our_strategic_approach_small_title'); ?>
                </p>
                <h2 id="strategic-approach-title"
                    class="font-bold text-2xl mt-4 md:text-4xl lg:text-5xl leading-[98%] tracking-[-0.02em] text-[#F9F8F6]"
                    data-aos="fade-up" data-aos-duration="400" data-aos-delay="50">
                    <?php the_field('our_strategic_approach_big_title'); ?>
                </h2>
                <p class="text-base md:text-lg leading-[160%] tracking-[-0.02em] max-w-3xl mx-auto font-normal text-[#F9F8F6]"
                    data-aos="fade-up" data-aos-duration="400" data-aos-delay="100">
                    <?php the_field('our_strategic_approach_description'); ?>
                </p>
            </header>

            <?php if (have_rows('green_cards_repeater')): ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 py-20 px-6 lg:px-0">
                <?php $card_index = 0; ?>
                <?php while (have_rows('green_cards_repeater')): the_row(); ?>
                <?php $card_index++; ?>
                <div class="bg-[#006155] shadow-lg p-6 text-white flex flex-col items-start transition-transform duration-200 hover:scale-95 hover:shadow-xl focus-within:ring-2 focus-within:ring-[#98C441] focus-within:ring-offset-2 focus-within:ring-offset-[#1F3131]"
                    data-aos="fade-up" data-aos-duration="400" data-aos-delay="<?php echo $card_index * 50; ?>">
                    
                    <?php $image_url = get_sub_field('icon'); ?>
                    <?php if ($image_url): ?>
                    <div class="mb-6" aria-hidden="true">
                        <img src="<?php echo esc_url($image_url); ?>" 
                             alt="" 
                             class="w-8 h-8 object-contain" />
                    </div>
                    <?php endif; ?>

                    <div class="h-24" aria-hidden="true"></div>

                    <h3 class="text-2xl font-semibold mb-2">
                        <?php the_sub_field('title'); ?>
                    </h3>

                    <p class="text-base opacity-90">
                        <?php the_sub_field('description'); ?>
                    </p>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <section style="background: linear-gradient(to bottom, #F7F7F5 0%, #F7F7F5 90%, #98C44180 100%);"
        aria-labelledby="case-study-title">
        <?php if (have_rows('case_study')): ?>
        <div class="max-w-7xl mx-auto px-4 py-24 grid grid-cols-1 md:grid-cols-12 gap-6">
            <?php while (have_rows('case_study')): the_row(); ?>
            <!-- Left Card (1/3 width) -->
            <div class="bg-[#8BC34A] p-8 flex flex-col justify-between text-white md:col-span-4" 
                 data-aos="fade-up" data-aos-duration="400">
                <div>
                    <p class="text-base font-medium mb-4 text-[#1F3131]">Case Study</p>
                    <h2 id="case-study-title" class="text-2xl md:text-3xl font-bold mb-6 text-white">
                        <?php the_sub_field('title'); ?>
                    </h2>
                </div>

                <div class="h-24" aria-hidden="true"></div>

                <p class="text-base text-[#1F3131] leading-relaxed opacity-90">
                    <?php the_sub_field('description'); ?>
                </p>
            </div>

            <!-- Right Card (2/3 width) -->
            <div class="bg-[#DFDAD433] border-[1px] border-[#DFDAD4] p-8 flex flex-col justify-between md:col-span-8"
                 data-aos="fade-up" data-aos-duration="400" data-aos-delay="50">
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/quote.svg'); ?>" 
                         alt="" 
                         class="h-20 w-20 mb-4" 
                         aria-hidden="true" />
                    <blockquote>
                        <p class="text-xl md:text-3xl font-normal leading-snug text-gray-800 mb-6">
                            "<?php the_sub_field('testimonial_description'); ?>"
                        </p>
                    </blockquote>
                </div>
                <footer class="flex flex-col md:flex-row md:items-center md:justify-between mt-auto gap-4">
                    <cite class="text-base font-semibold text-gray-900 not-italic">
                        <?php the_sub_field('testimonial_source'); ?>
                    </cite>
                    <?php $link = get_sub_field('case_study_link'); ?>
                    <?php if ($link): ?>
                    <a href="<?php echo esc_url($link); ?>"
                        class="inline-flex items-center w-auto text-base font-medium border-b-2 border-[#D16555] hover:border-[#D16555] focus:outline-none focus:ring-2 focus:ring-[#D16555] focus:ring-offset-2 transition-colors duration-200"
                        aria-label="Read full case study">
                        Explore full capabilities
                        <span class="ml-1 text-lg" aria-hidden="true">→</span>
                    </a>
                    
                    <?php endif; ?>
                </footer>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <div class="max-w-7xl mx-auto px-6 pb-24 grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch" 
             aria-labelledby="compliance-title">
            <!-- Left Box (Images Only) -->
            <div class="border border-[#DFDAD4] rounded-lg p-10 grid grid-cols-2 gap-6 place-items-center h-full"
                 aria-labelledby="compliance-logos-heading">
                <h3 id="compliance-logos-heading" class="sr-only">Compliance and certification logos</h3>
                <?php
                $logos = get_field('compliance_logos');
                if ($logos):
                    foreach ($logos as $index => $logo_url): ?>
                <img src="<?php echo esc_url($logo_url); ?>" 
                     alt="Compliance certification logo <?php echo $index + 1; ?>"
                     class="h-12 lg:h-20 object-contain" />
                <?php endforeach;
                endif; ?>
            </div>

            <!-- Right Content -->
            <div class="h-full flex flex-col justify-center" data-aos="fade-up" data-aos-duration="400">
                <h2 id="compliance-title" class="text-2xl mt-4 md:text-4xl lg:text-5xl max-w-md font-bold leading-tight text-gray-900 mb-6">
                    <?php the_field('compliance_title'); ?>
                </h2>
                <div class="text-lg prose text-gray-700 mb-6">
                    <?php echo wp_kses_post(get_field('compliance_description')); ?>
                </div>
            </div>
        </div>
    </section>

</main>

<section class="bg-[#1F3131] py-28 text-center" aria-labelledby="industry-cta-title">
    <div class="max-w-3xl mx-auto px-4">
        <!-- Heading -->
        <h2 id="industry-cta-title" class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#F9F8F6] tracking-tight"
            data-aos="fade-up" data-aos-duration="400">
           <?php the_field('industry_cta_title'); ?>
        </h2>

        <!-- Subheading -->
        <p class="mt-6 text-base lg:text-lg text-[#F9F8F6] leading-relaxed" 
           data-aos="fade-up" data-aos-duration="400" data-aos-delay="50">
           <?php the_field('industry_cta_description'); ?>
        </p>

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-6" 
             data-aos="fade-up" data-aos-duration="400" data-aos-delay="100">
            <a href="/contact"
                class="bg-[#8DC63F] hover:bg-[#7AB22E] text-black font-medium px-6 py-3 text-base lg:text-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#7AB22E] focus:ring-offset-2 focus:ring-offset-[#1F3131]"
                aria-label="Schedule a consultation - opens contact form">
                Schedule a Consultation
            </a>
            <a href="<?php the_field('industry_cta_secondary_button_link'); ?>" 
               class="flex items-center text-[#F9F8F6] font-medium text-base lg:text-lg hover:underline focus:outline-none focus:ring-2 focus:ring-[#F9F8F6] focus:ring-offset-2 focus:ring-offset-[#1F3131] transition-colors duration-200">
                <?php the_field('industry_cta_secondary_button_title'); ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>