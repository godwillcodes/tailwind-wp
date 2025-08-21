<?php
get_header();

$term = get_queried_object(); // Current taxonomy term
$term_key = $term->taxonomy . '_' . $term->term_id;

$featured_image = get_field('featured_image', $term_key);
$tagline = get_field('tagline', $term_key);
$section_title = get_field('section_title', $term_key);
$primary_description = get_field('primary_description', $term_key);
$supporting_description = get_field('supporting_description', $term_key);
$eyebrow_text = get_field('eyebrow_text', $term_key);
$sub_solutions_section_title = get_field('sub_solutions_section_title', $term_key);
$sub_solutions_section_description = get_field('sub_solutions_section_description', $term_key);
$why_piedmont_global_eyebrow = get_field('why_piedmont_global_eyebrow', $term_key);
$why_piedmont_global_section_title = get_field('why_piedmont_global_section_title', $term_key);
$why_piedmont_global_description = get_field('why_piedmont_global_description', $term_key);
$why_piedmont_global_cards = get_field('why_piedmont_global_cards', $term_key);
$industries_section = get_field('industries_section', $term_key); // ACF Relationship field
?>

<section class="shadow-sm">
    <div class="bg-[#1F3131] pt-8 pb-12">
        <?php
        get_template_part('components/navigation/desktop');
        get_template_part('components/navigation/mobile');
        ?>
    </div>

    <div class="h-[500px] md:h-[400px] lg:h-[554px] bg-cover bg-top relative"
        style="background-image: linear-gradient(180deg, rgba(31,49,49,0.5) 0%, #1F3131 80%), url('<?php echo esc_url($featured_image); ?>');">
        <div class="absolute inset-0 flex items-end">
            <div class="max-w-7xl mx-auto w-full px-10 lg:px-0 pb-4 md:pb-12 lg:pb-12 text-white">
                <h1 class="text-2xl md:text-4xl lg:text-4xl font-bold" data-aos="fade-up" data-aos-delay="200">
                    <?php echo esc_html($term->name); ?>
                </h1>

                <?php if ($tagline): ?>
                <p class="text-base lg:text-lg my-4 max-w-4xl" data-aos="fade-up" data-aos-delay="400">
                    <?php echo esc_html($tagline); ?>
                </p>
                <?php endif; ?>

                <a href="#"
                    class="inline-block bg-[#98C441] text-[#1F3131] px-5 py-2 mt-4 font-bold text-base shadow-md hover:bg-[#8AB738] focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#98C441] transition">
                    Explore our model
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-[linear-gradient(to_bottom,_#006155_0.1%,_#1F3131_20%)] w-full py-20 shadow-sm">
    <div class="max-w-7xl mx-auto px-8 lg:px-0 flex flex-col md:flex-row gap-8">
        <div class="md:w-2/3 space-y-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="900"
            data-aos-easing="ease-out-cubic">
            <?php if ($section_title): ?>
            <h2 class="text-[#98C441] text-xl mb-4"><?php echo wp_kses_post($section_title); ?></h2>
            <?php endif; ?>

            <?php if ($primary_description): ?>
            <div class="text-white prose text-base md:text-xl leading-relaxed max-w-3xl">
                <?php echo wp_kses_post($primary_description); ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="md:w-1/3 flex items-center" data-aos="fade-down" data-aos-delay="250" data-aos-duration="1000"
            data-aos-easing="ease-out-cubic">
            <?php if ($supporting_description): ?>
            <div class="text-white text-base leading-relaxed">
                <?php echo wp_kses_post($supporting_description); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="relative py-20 bg-[#F7F7F5]">
    <div class="max-w-7xl mx-auto px-8 lg:px-0 text-center mb-16">
        <h2 class="text-base text-[#1F3131] font-bold mb-4 tracking-wide" data-aos="fade-up" data-aos-delay="50"
            data-aos-duration="500">
            <?php echo wp_kses_post($eyebrow_text); ?>
        </h2>

        <h3 class="text-3xl lg:text-5xl font-extrabold leading-tight max-w-4xl mx-auto text-[#0F1E1E]"
            data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
            <?php echo esc_html($sub_solutions_section_title); ?>
        </h3>

        <div class="text-base lg:text-xl text-[#1F3131] max-w-3xl mx-auto mt-4" data-aos="fade-up" data-aos-delay="150"
            data-aos-duration="900">
            <?php echo wp_kses_post($sub_solutions_section_description); ?>
        </div>

        <hr class="border-t-[0.5px] border-[#1F3131] mt-10" />
    </div>
    <?php
        $args = [
            'post_type'      => 'solutions',
            'tax_query'      => [
                [
                    'taxonomy' => $term->taxonomy,
                    'field'    => 'term_id',
                    'terms'    => $term->term_id,
                ],
            ],
            'posts_per_page' => -1,
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()):
            $posts = $query->posts; // store posts
    ?>
    <div class="max-w-6xl mx-auto px-8 lg:px-0 flex flex-col lg:flex-row gap-12 relative z-10 min-h-[600px]">
        <nav class="hidden lg:flex lg:w-1/3 w-full text-xs md:text-lg bg-white bg-opacity-30 backdrop-blur-md rounded-lg p-6 shadow-lg lg:bg-transparent lg:p-0 lg:shadow-none sticky top-32 self-start flex-col gap-6 overflow-x-visible pb-0 scroll-smooth no-scrollbar"
            aria-label="What We Offer Navigation">
            <?php
                $count = 1;
                foreach ($posts as $post):
                    setup_postdata($post); ?>
            <button
                class="menu-btn <?php echo $count === 1 ? 'opacity-100 border-l-4 border-l-[#98C441] pl-4 text-left text-[#0F1E1E] font-semibold' : 'opacity-50 border-l-0 pl-4 text-left text-[#555F58] font-medium'; ?> transition-opacity duration-400 ease-in-out transform hover:scale-[1.02]"
                data-target="section-<?php echo $count; ?>" <?php echo $count === 1 ? 'aria-current="true"' : ''; ?>>
                <?php the_title(); ?>
            </button>
            <?php
                    $count++;
                endforeach;
                wp_reset_postdata();
                ?>
        </nav>

        <div class="lg:w-2/3 w-full flex flex-col gap-16 overflow-y-scroll h-[85vh] mt-8 scroll-smooth" tabindex="0"
            aria-label="What We Offer Content">
            <?php
                $count = 1;
                foreach ($posts as $post):
                    setup_postdata($post);
                    $featured_image = get_the_post_thumbnail_url($post->ID, 'full');
                    $solution_tagline = get_field('solution_tagline', $post->ID);
                    ?>
            <div id="section-<?php echo $count; ?>" data-aos="fade-up" data-aos-delay="<?php echo $count * 100; ?>"
                data-aos-duration="700"
                class="relative w-full lg:w-[80%] mx-auto rounded-xl overflow-hidden shadow-lg group cursor-pointer"
                onclick="window.location.href='<?php echo get_the_permalink($post->ID); ?>'">
                <?php if ($featured_image): ?>
                <img src="<?php echo esc_url($featured_image); ?>"
                    class="w-full h-64 md:h-80 lg:h-96 object-cover transition-transform duration-500 group-hover:scale-105"
                    alt="<?php echo esc_attr(get_the_title($post->ID)); ?>" loading="lazy" />
                <?php endif; ?>

                <div
                    class="absolute inset-0 bg-gradient-to-b from-black/40 to-black/70 flex flex-col justify-end p-6 transition-all duration-300 group-hover:from-black/50 group-hover:to-black/80">
                    <h2 class="text-xl md:text-2xl font-extrabold text-white">
                        <?php echo esc_html(get_the_title($post->ID)); ?>
                    </h2>

                    <div class="mt-2 text-white text-base md:text-lg max-w-prose">
                        <?php
                            if ($solution_tagline) {
                                echo wp_kses_post($solution_tagline);
                            } else {
                                echo wp_trim_words(get_the_content(null, false, $post->ID), 35, '...');
                            }
                        ?>
                    </div>

                    <span
                        class="mt-4 inline-block bg-[#98C441] text-[#1F3131] font-bold px-4 py-2 rounded-md text-sm self-start transition-opacity duration-300 opacity-90 group-hover:opacity-100">
                        Read More
                    </span>
                </div>
            </div>
            <?php
                    $count++;
                endforeach;
                wp_reset_postdata();
                ?>
        </div>
    </div>
    <?php else: ?>
    <p class="text-center text-lg text-[#1F3131] mt-12">No data yet.</p>
    <?php endif; ?>
</section>

<?php if ($why_piedmont_global_cards): ?>
<section class="py-24 text-white bg-[linear-gradient(to_bottom,_#1F3131_50%,_#006155_100%)]">
    <div class="max-w-7xl mx-auto px-6 lg:px-0 text-center lg:text-left">
        <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="900"
            class="text-lg font-medium text-[#F9F8F6] mb-3"><?php echo esc_html($why_piedmont_global_eyebrow); ?></p>

        <h2 data-aos="fade-up" data-aos-delay="200" data-aos-duration="700"
            class="text-3xl sm:text-4xl md:text-5xl max-w-4xl font-extrabold mb-6 leading-[98%]">
            <?php echo esc_html($why_piedmont_global_section_title); ?>
        </h2>

        <p data-aos="fade-up" data-aos-delay="300" data-aos-duration="600"
            class="text-base sm:text-lg text-gray-300 max-w-2xl lg:mx-0 mb-12">
            <?php echo esc_html($why_piedmont_global_description); ?>
        </p>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <?php 
            $delay = 0;
            foreach ($why_piedmont_global_cards as $card): 
                $delay += 100;  // increment delay for staggered animation
            ?>
            <div class="bg-[#006155] p-6 flex flex-col h-full transition-transform duration-300 ease-in-out hover:scale-[1.03] hover:shadow-lg hover:bg-[#007766]" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($delay); ?>" data-aos-duration="600">
                <?php if (!empty($card['card_title'])): ?>
                <h3 class="font-semibold text-lg capitalize lg:text-xl mb-4 text-start w-full lg:max-w-[80px]">
                    <?php echo esc_html($card['card_title']); ?>
                </h3>
                <?php endif; ?>

                <div class="flex-grow h-40"></div>

                <?php if (!empty($card['card_description'])): ?>
                <p class="text-gray-100 text-base capitalize text-start lg:text-lg leading-relaxed">
                    <?php echo esc_html($card['card_description']); ?>
                </p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<?php endif; ?>

<?php if (!empty($industries_section)): ?>
<section class="py-20 bg-[#F9F9F6] text-[#1F3131]">
    <div class="max-w-7xl mx-auto px-6 lg:px-0">
        <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="900" class="text-lg font-medium mb-2">Industries we support</p>

        <h2 data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" class="text-3xl sm:text-4xl md:text-5xl max-w-4xl font-extrabold mb-6 leading-[98%]">
            Tailored solutions for regulated, high-impact sectors.
        </h2>

        <div class="grid gap-x-24 gap-y-6 sm:grid-cols-2 mt-16">
            <?php foreach ($industries_section as $industry):
                    $title = get_the_title($industry);
                    $desc = get_field('industry_tagline', $industry->ID);
                    ?>
            <a href="<?php echo esc_url(get_permalink($industry->ID)); ?>"
                class="group block border-b border-gray-300 px-4 py-6 transition-colors duration-200 ease-in-out hover:border-[#98C441]"
                aria-label="<?php echo esc_attr($title . ': ' . $desc); ?>">
                <div class="flex flex-col sm:flex-row items-center sm:items-center justify-between gap-4">
                    <div class="flex-1">
                        <h3
                            class="font-semibold text-lg sm:text-xl text-[#1F3131] transition-colors duration-200 ease-in-out group-hover:text-[#0F2A2A]">
                            <?php echo esc_html($title); ?>
                        </h3>
                        <?php if ($desc): ?>
                        <div class="max-w-md">
                            <div
                                class="mt-2 text-base lg:text-lg text-gray-500  transition-colors duration-200 ease-in-out group-hover:text-gray-700">
                                <?php echo wp_kses_post($desc); ?>
                            </div>
                        </div>

                        <?php endif; ?>
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/wierd-arrow.svg'); ?>"
                        alt="" aria-hidden="true"
                        class="w-8 h-8 sm:w-10 sm:h-10 flex-shrink-0 transform transition duration-200 ease-in-out group-hover:rotate-45 group-hover:scale-110">
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-0">
        <!-- Section Header -->
        <div class="mb-12">
            <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="900" class="text-lg font-medium  mb-2">Key Features</p>
            <h2 data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" class="text-3xl sm:text-4xl md:text-5xl max-w-3xl font-extrabold mb-6 leading-[98%]">
                What Sets Our Translation Models Apart
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

<?php get_footer(); ?>