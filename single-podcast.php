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

                <h1 class="text-2xl mt-4 md:text-4xl lg:text-5xl font-bold" data-aos="fade-up" data-aos-duration="400"
                    data-aos-delay="50">
                    <?php the_title(); ?>
                </h1>
                <p class="text-base lg:text-lg my-4 max-w-4xl" data-aos="fade-up" data-aos-duration="400"
                    data-aos-delay="100">
                    Conversations that explore language, culture, and the people driving global communication.
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

<section class="bg-[#F9F8F6] py-20">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'posts_per_page' => 6,
    'paged'          => $paged
    ];

    $query = new WP_Query($args);
    ?>
    <div class="max-w-7xl mx-auto px-6 lg:px-0">
        <div class="grid grid-cols-1 gap-6 mt-0 lg:-mt-56 relative z-10">
            <?php 
      $counter = 0; 
      while ($query->have_posts()) : $query->the_post(); 
        $delay = $counter * 100; 
    ?>
            <article
                class="group flex flex-col md:flex-row shadow-md rounded-lg border border-gray-200 overflow-hidden transition-transform duration-300 hover:shadow-lg">

                <!-- Video -->
                <div class="w-full md:w-1/2 aspect-video md:aspect-auto">
                    <iframe
                        class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                        src="https://www.youtube.com/embed/your-video-id" title="Episode <?php echo $counter + 1; ?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- Content -->
                <div class="p-6 md:p-8 bg-white w-full md:w-1/2 flex flex-col justify-center">
                    <div class="text-lg text-[#D16555] font-bold mb-2">
                        Episode <?php echo $counter + 1; ?>
                    </div>
                    <div class="text-gray-500 text-base mb-2">Mark Byrne</div>
                    <h3 class="text-xl font-semibold text-[#1F3131] mb-3">The Language Access Lectern</h3>
                    <p class="text-gray-600 text-base leading-relaxed">
                        In Episode 2 of The eLearning Lounge, we had the distinct pleasure of hosting Dr. Jeanine
                        DeFalco, a pioneering expert in adaptive training technologies and ethical AI design. Dr.
                        DeFalco, who has been recognized with awards like the NTSA Modeling Simulation Award and
                        acknowledgment at the I/ITSEC conference, shared invaluable insights into her work, from her
                        groundbreaking contributions to the Generalized Intelligent Framework for Tutoring (GIFT) to her
                        current role in developing innovative training solutions for the U.S. Navy’s Electric Boat
                        division.
                    </p>
                </div>
            </article>
            <?php 
      $counter++; 
      endwhile; 
    ?>
        </div>
    </div>

</section>

<section class="pb-40 pt-20"
    style="background: linear-gradient(to bottom, #F7F7F5 0%, #F7F7F5 70%, #98C44180 85%, #00615580 100%);">
    <div class="max-w-3xl mx-auto px-8 lg:px-0 text-center">
        <h2 class="text-3xl lg:text-5xl font-bold text-black mb-6" data-aos="fade-up" data-aos-duration="200"
            data-aos-delay="200" data-aos-easing="ease-out">
            Ready to move from translation to transformation?
        </h2>
        <a href="/contact"
            class="inline-block bg-[#98C441] text-black px-6 py-3 font-bold text-base lg:text-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#98C441] focus:ring-offset-2 focus:ring-offset-[#1F311]"
            data-aos="fade-up" data-aos-duration="400" data-aos-delay="300" data-aos-easing="ease-out">
            Connect with our team
        </a>
    </div>
</section>


<?php
get_template_part( 'components/common/cta' ); 
get_footer(); 
?>