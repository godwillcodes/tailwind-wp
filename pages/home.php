<?php
/**
 * Template Name: Home
 * Description: 
 */
get_header();
get_template_part( 'components/banner/primary' );
?>
<section class="bg-[#1F3131] text-white py-20 px-4">
    <div class="max-w-7xl mx-auto ">
        <h2 class="text-3xl md:text-4xl font-semibold mb-12 text-center">What brings you here today?</h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <?php if (have_rows('what_brings_you_here_today')): ?>
            <?php while (have_rows('what_brings_you_here_today')): the_row(); 
            $title       = get_sub_field('title');
            $description = get_sub_field('description');
            $link        = get_sub_field('link_');
            $size        = get_sub_field('size_of_card'); // only "small"
            if (strtolower($size) !== 'small') {
                continue;
            }
        ?>
            <div class="relative group overflow-hidden rounded shadow-md h-full bg-[#F9F8F6] text-black p-10"
                data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-out-cubic">

                <!-- Default Content -->
                <div class="relative z-10 text-start group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
                    <?php if ($title): ?>
                    <h3
                        class="text-2xl font-semibold transition-transform duration-500 group-hover:-translate-y-2 max-w-[250px]">
                        <?php echo esc_html($title); ?>
                    </h3>
                    <?php endif; ?>

                    <?php if ($description): ?>
                    <p class="text-gray-700 mt-4 transition-opacity duration-500">
                        <?php echo esc_html($description); ?>
                    </p>
                    <?php endif; ?>

                    <div class="h-20 md:h-40"></div>


                    <a href="<?php echo esc_url($link); ?>"
                        class="inline-flex items-center gap-1 text-sm font-medium mt-6 border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300">
                        Learn more <span class="text-lg">→</span>
                    </a>

                </div>

                <!-- Hover Content -->
                <div
                    class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center px-6 opacity-0 group-hover:opacity-100 transition-all duration-100 ease-out bg-[linear-gradient(180deg,_rgba(152,196,65,0)_46.15%,_rgba(152,196,65,0.5)_80%,_rgba(0,97,85,0.5)_100%)] scale-95 group-hover:scale-100">
                    <a href="<?php echo esc_url($link); ?>" 
   class="flex flex-col items-center justify-center gap-6 text-center text-xl md:text-2xl px-6 md:px-20 font-semibold text-black mb-6 transition-transform duration-500 ease-in-out group-hover:translate-y-1">

    <span>Explore our Approach</span>

    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-side.svg'); ?>"
        alt="Arrow Icon"
        class="h-10 w-10 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110">
</a>

                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>


        <!-- Government CTA -->
        <?php if (have_rows('what_brings_you_here_today')): ?>
        <?php while (have_rows('what_brings_you_here_today')): the_row(); 
        $title       = get_sub_field('title');
        $description = get_sub_field('description');
        $link        = get_sub_field('link_');
        $size        = get_sub_field('size_of_card'); // only "big"
        if (strtolower($size) !== 'big') {
            continue;
        }
    ?>
        <div class="bg-[#F9F8F6] text-black mt-12 rounded-lg p-8 text-center group relative overflow-hidden"
            data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-out-cubic">

            <div class="relative z-10 transition-opacity duration-500 ease-in-out group-hover:opacity-0">
                <?php if ($title): ?>
                <h3 class="text-2xl font-semibold mb-2 transition-transform duration-500 group-hover:-translate-y-2">
                    <?php echo esc_html($title); ?>
                </h3>
                <?php endif; ?>

                <?php if ($description): ?>
                <p class="text-gray-700 mb-4 transition-opacity duration-500">
                    <?php echo esc_html($description); ?>
                </p>
                <?php endif; ?>

                <div class="h-20"></div>


                <a href="<?php echo esc_url($link); ?>"
                    class="inline-flex items-center gap-1 text-sm font-medium mt-6 border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300">
                    Learn More <span class="text-lg">→</span>
                </a>

            </div>

            <div
                class="absolute inset-0 z-20 flex flex-col items-center justify-center px-6 text-center
                        opacity-0 group-hover:opacity-100 transition-all duration-200 ease-out
                        bg-[linear-gradient(180deg,_rgba(152,196,65,0)_46.15%,_rgba(152,196,65,0.5)_80%,_rgba(0,97,85,0.5)_100%)] scale-95 group-hover:scale-100">


                 <a href="<?php echo esc_url($link); ?>" 
   class="flex flex-col items-center justify-center gap-6 text-center text-xl md:text-2xl px-6 md:px-20 font-semibold text-black mb-6 transition-transform duration-500 ease-in-out group-hover:translate-y-1">

    <span>Explore our Approach</span>

    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-side.svg'); ?>"
        alt="Arrow Icon"
        class="h-10 w-10 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110">
</a>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>


    </div>
</section>


<section class="bg-[#F7F7F5] py-16 px-6 md:px-0">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full mb-20 gap-6">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 max-w-xl" data-aos="fade-right">
                The trusted partner for local and global growth
            </h2>

        </div>

        <?php if (have_rows('partners_repeater', 'option')): ?>
        <div class="owl-carousel owl-theme mb-16 partners-carousel">
            <?php while (have_rows('partners_repeater', 'option')): the_row(); ?>
            <div class="item">
                <a href="<?php the_sub_field('url'); ?>" target="_blank" rel="noopener">
                   <img src="<?php the_sub_field('partner_logo'); ?>" 
     alt="Piedmont Global Partner"
     class="h-24 w-auto mx-auto object-contain transition duration-300 ease-in-out grayscale hover:grayscale-0" />

                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>





        <div class="grid gap-6 md:grid-cols-2 mb-8">
            <?php if (have_rows('the_trusted_partner_for_local_and_global_growth_cards')): ?>
            <?php while (have_rows('the_trusted_partner_for_local_and_global_growth_cards')): the_row(); 
                $image       = get_sub_field('image'); // URL string
                $title       = get_sub_field('title');
                $description = get_sub_field('description');
            ?>
            <div class="items-justify gap-4 border border-[#DFDAD4] rounded-lg p-12 shadow-md">
                <?php if (!empty($image)): ?>
                <div class="flex-shrink-0">
                    <img src="<?php echo esc_url($image); ?>" alt="Piedmont Global Image" class="h-12 w-12" />
                </div>
                <?php endif; ?>
                <div class="pt-4">
                    <?php if (!empty($title)): ?>
                    <h3 class="text-2xl text-[#1F3131] font-semibold">
                        <?php echo esc_html($title); ?>
                    </h3>
                    <?php endif; ?>
                    <?php if (!empty($description)): ?>
                    <p class="text-gray-600 text-lg pt-2">
                        <?php echo esc_html($description); ?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>




        <div class=" rounded-lg border border-[#DFDAD4] p-8 md:p-12 shadow-md">
            <h3 class="text-2xl md:text-3xl text-[#1F3131] font-semibold mb-8">
                We’ve been recognized
            </h3>
            <?php if (have_rows('recognized_by', 'option')): ?>
            <div class="owl-carousel owl-theme recognized-carousel">
                <?php while (have_rows('recognized_by', 'option')): the_row(); ?>
                <a href="<?php the_sub_field('url'); ?>" target="_blank" rel="noopener">
                    <span
                        class="flex items-center justify-center h-32 w-32 rounded-full bg-gradient-to-b from-gray-100 to-green-100 shadow-sm"
                        aria-label="Piedmont Global Recognition">
                       <img src="<?php the_sub_field('logo'); ?>" 
                        alt="Piedmont Global Recognition"
                        class="max-h-24 max-w-24 object-contain transition duration-300 ease-in-out grayscale hover:grayscale-0" />

                    </span>
                </a>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>




    </div>
</section>

<section class="bg-[#F7F7F5] py-16 px-6 md:px-0 ">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full mb-20 gap-6">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900" data-aos="fade-right">
                From translation to<br />transformation
            </h2>
            <a href="#"
                class="inline-flex items-center text-lg font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300"
                data-aos="fade-left" data-aos-delay="100">
                Explore full capabilities <span class="ml-1 text-lg">→</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2  gap-10 lg:gap-32">
            <div data-aos="fade-up" data-aos-delay="150" class="flex-1 ">
                <div class="space-y-10">
                    <?php if (have_rows('capabilities')): ?>
                    <?php 
        $row_count = count(get_field('capabilities')); 
        $index = 0;
        ?>
                    <?php while (have_rows('capabilities')): the_row(); 
            $title       = get_sub_field('title');
            $description = get_sub_field('description');
        ?>
                    <div class="<?php echo $index < ($row_count - 1) ? 'pb-6 border-b border-gray-300' : ''; ?>">
                        <?php if (!empty($title)): ?>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                            <?php echo esc_html($title); ?>
                        </h3>
                        <?php endif; ?>
                        <?php if (!empty($description)): ?>
                        <p class="text-gray-700 text-lg">
                            <?php echo esc_html($description); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <?php $index++; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>

            <div class="" data-aos="fade-down" data-aos-delay="100">
                <div class="rounded-[4px] overflow-hidden mx-6 md:mx-0" style="background: linear-gradient(180deg, #550061 0%, #550061 70%, #D16555 100%);

      ">
                    <img src="/wp-content/uploads/Rectangle-21027.png" alt="Team collaboration"
                        class=" h-full w-full object-cover rounded-[6px] p-6 md:p-20 " />
                </div>
            </div>
        </div>







    </div>



</section>


<section class="bg-[#1F3131] text-white py-20 px-6 md:px-0">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full mb-20 gap-6">
            <h2 class="text-3xl md:text-5xl font-bold text-white max-w-lg" data-aos="fade-right">
                Deep industry insight. Proven across sectors.
            </h2>
            <a href="#"
                class="inline-flex items-center text-lg font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300"
                data-aos="fade-left" data-aos-delay="100">
                Explore industry solutions <span class="ml-1 text-lg">→</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            // Create a new query for the 'industry' post type
            $industries_query = new WP_Query([
                'post_type' => 'industry',
                'posts_per_page' => -1, // Retrieve all posts
                'post_status' => 'publish' // Only get published posts
            ]);
            $i = 0; // Initialize a counter for the AOS delay

            if ($industries_query->have_posts()) :
                while ($industries_query->have_posts()) : $industries_query->the_post();
                    // Get custom fields for each post
                    $icon = get_field('industry_icon');
                    $tagline = get_field('industry_tagline');
            ?>
            <a href="<?php the_permalink(); ?>" class="group">
                <div class="bg-[#006155] text-white rounded-[4px] shadow-md p-10 flex flex-col justify-between transition-transform duration-300 transform group-hover:scale-95"
                    data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                    <?php if ($icon) : ?>
                    <img src=" <?php echo wp_kses_post($icon); ?>" class="mb-6 h-16 w-16" alt="">
                    <?php endif; ?>
                    <h3 class="text-xl text-white font-semibold mb-4"><?php the_title(); ?></h3>
                    <?php if ($tagline) : ?>
                    <p class="text-white mb-3 mt-8 font-normal text-lg">
                        <?php echo wp_kses_post($tagline); ?>
                    </p>
                    <?php endif; ?>
                </div>
            </a>
            <?php
                    $i++; // Increment the counter
                endwhile;
                wp_reset_postdata(); // Restore the original post data
            endif;
            ?>
        </div>
    </div>
</section>

<section class="bg-[#f9f9f6] py-20 px-6 md:px-20">
    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8 items-stretch">

        <!-- 2/3 Column -->
        <?php if (have_rows('testimonials', 'option')): ?>
        <?php 
        $testimonials = [];
        while (have_rows('testimonials', 'option')): the_row();
            $testimonials[] = [
                'description' => get_sub_field('description'),
                'title'       => get_sub_field('title'),
                'location'    => get_sub_field('location'),
            ];
        endwhile;

        if (!empty($testimonials)) {
            $random = $testimonials[array_rand($testimonials)];
        }
    ?>
        <?php if (!empty($random)): ?>
        <div class="md:col-span-2 bg-white rounded border border-[#DFDAD4] p-8 shadow-sm flex flex-col">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/quote.svg'); ?>"
                alt="<?php echo esc_html($random['title']); ?>" class="h-10 w-10 mb-4" />
            <p class="text-base md:text-3xl text-gray-800 font-medium flex-grow max-w-xl">
                <?php echo esc_html($random['description']); ?>
            </p>
            <div class="mt-6">
                <p class="font-semibold text-gray-900"><?php echo esc_html($random['title']); ?></p>
                <p class="text-gray-600"><?php echo esc_html($random['location']); ?></p>
            </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>



        <!-- 1/3 Column -->
        <?php
$args = [
    'post_type'      => 'case_study',
    'posts_per_page' => 1,
];

$query = new WP_Query($args);

if ($query->have_posts()):
    while ($query->have_posts()): $query->the_post();
        $percentage  = get_field('value');   // ACF field
        $description = get_field('description'); // ACF field
        $image       = get_field('image');       // ACF image field
        $link        = get_permalink();
?>
        <div class="bg-white rounded border border-[#DFDAD4] overflow-hidden shadow-sm">
            <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large', ['class' => 'w-full h-48 object-cover', 'alt' => get_the_title()]); ?>
            <?php endif; ?>
            <div class="py-6 px-8">
                <?php if ($percentage): ?>
                <p class="text-6xl font-bold text-gray-900 mb-4">
                    <?php echo esc_html($percentage); ?>
                </p>
                <?php endif; ?>

                <p class="text-gray-700 mb-4 text-lg max-w-xs">
                    <?php the_field('title'); ?>
                </p>

                <a href="<?php echo esc_url($link); ?>"
                    class="inline-flex items-center mt-10 text-base font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300"
                    data-aos="fade-left" data-aos-delay="100">
                    View Case Study <span class="ml-1 text-lg">→</span>
                </a>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
endif;
?>


    </div>
</section>

<section class="h-[450px] bg-repeat-x bg-top pb-10 bg-[#F9F8F6]"
    style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/icons/pattern-2.svg' ); ?>')">
</section>

<section class="h-auto md:h-[100vh] py-24 relative overflow-hidden"
    style="background: linear-gradient(to bottom, #F7F7F5 0%, #F7F7F5 70%, #98C44180 85%, #00615580 100%);">

    <div class="max-w-7xl mx-auto relative z-10 h-full flex flex-col">

        <!-- Sticky static header -->
        <header class="text-center max-w-2xl mx-auto sticky top-10 bg-[#F7F7F5] z-20 p-4">
            <h2 class="text-4xl md:text-5xl font-semibold mb-8">
                <?php echo esc_html( get_field('visual_moment_title') ); ?> </h2>
            <div class="text-[#1F3131] text-lg space-y-6">
    <?php echo wp_kses_post( get_field('visual_moment_subtitle') ); ?>
<div>

        </header>

        <!-- Loop items stacked absolutely -->
        <div class="relative flex-1">
            <?php if (have_rows('visual_moment_stories')): ?>
            <?php $i = 0; ?>
            <?php while (have_rows('visual_moment_stories')): the_row(); ?>
            <?php
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $active_class = $i === 0 ? 'opacity-100 pointer-events-auto active' : 'opacity-0 pointer-events-none';
      ?>
            <div
                class="scroll-item absolute inset-0 max-w-2xl mx-auto text-center flex items-center justify-center flex-col transition-opacity duration-700 <?php echo $active_class; ?>">
                <h2 class="text-xl md:text-3xl font-semibold mb-8"><?php echo esc_html($title); ?></h2>
                <p class="text-[#1F3131] text-lg">
                    <?php echo esc_html($description); ?>
                </p>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>


    </div>

    <!-- Side images -->
    <img src=/wp-content/uploads/Rectangle-21027.png" alt="Left visual"
        id="imageLeft"
        class="absolute top-1/2 left-12 w-[177px] h-[177px] object-contain  z-5 transition-transform duration-700" />
    <img src=/wp-content/uploads/Rectangle-21027.png" alt="Right visual"
        id="imageRight"
        class="absolute top-1/2 right-12 w-[177px] h-[177px] object-contain z-5 transition-transform duration-700" />
</section>


<style>
/* For accessibility and smooth transitions */
.scroll-item {
    transition: opacity 0.7s ease, pointer-events 0.7s ease;
}

.scroll-item:not(.active) {
    pointer-events: none;
}
</style>







<section class="bg-[#F7F7F5] py-20 px-6 md:px-0">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full mb-20 gap-6">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 max-w-2xl" data-aos="fade-right">
                Solutions built for your moment and your mission
            </h2>
            <a href="#"
                class="inline-flex items-center text-lg font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300"
                data-aos="fade-left" data-aos-delay="100">
                Explore full capabilities <span class="ml-1 text-lg">→</span>
            </a>
        </div>

        <!-- Solutions Taxonomy Grid -->
        <div class="grid md:grid-cols-3 gap-12 max-w-7xl mx-auto">
            <?php
            // Get terms in 'solution' taxonomy
            $terms = get_terms([
                'taxonomy'   => 'solution', // adjust taxonomy slug accordingly
                'hide_empty' => false,
                'number'     => 6,
            ]);

            if (!is_wp_error($terms) && !empty($terms)) :
                $delay = 0;
                foreach ($terms as $term) :
                    // Get ACF fields for the term
                    $tagline = get_field('solution_tagline', $term->taxonomy . '_' . $term->term_id);
                    $image = get_field('featured_image', $term->taxonomy . '_' . $term->term_id);

                    // Fallback image URL if no image set
                    $image_url = $image && is_array($image) && isset($image['url'])
                        ? $image['url']
                        : '/wp-content/uploads/Rectangle-21027.png';

                    // Term archive link
                    $term_link = get_term_link($term);
                    if (is_wp_error($term_link)) {
                        continue; // skip if error getting link
                    }
                    ?>
            <!-- Individual Solution Taxonomy Card -->
            <a href="<?php echo esc_url($term_link); ?>"
                class="group relative bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden flex flex-col transform transition-all duration-500 hover:-translate-y-1 hover:shadow-sm"
                data-aos="fade-up" data-aos-delay="<?php echo esc_attr($delay); ?>" data-aos-duration="600"
                aria-label="Learn more about <?php echo esc_attr($term->name); ?>">

                <!-- Card Image -->
                <div class="overflow-hidden">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($term->name); ?>"
                        class="w-full h-60 object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                </div>

                <!-- Card Content -->
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2"><?php echo esc_html($term->name); ?></h3>
                    <div class="text-gray-700 mb-6 text-lg flex-1">
                        <?php echo wp_kses_post($tagline); ?>
                    </div>
                    <div class="h-6 md:h-20"></div>

                    <!-- Learn More Indicator -->
                    <div
                        class="flex items-center mt-auto text-sm font-semibold text-gray-900 transition-colors duration-300 group-hover:text-[#D16555]">
                        Learn more
                        <span class="ml-2 text-lg transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="h-0.5 w-8 mt-1 bg-[#D16555] transition-all duration-300 group-hover:w-24"></div>
                </div>
            </a>

            <?php
                    $delay += 100;
                endforeach;
            else :
                ?>
            <p class="text-center text-lg text-gray-900">No solutions found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>






<?php
get_template_part( 'components/common/cta' ); 
get_footer(); 
?>