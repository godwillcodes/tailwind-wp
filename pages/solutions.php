<?php
/**
 * Template Name: Solutions
 * Description: Solutions page template for Piedmont Global.
 */
get_header();
get_template_part( 'components/banner/secondary' );
?> 

<div class="bg-[#F9F8F6] text-center px-6 sm:px-8 lg:px-0 py-12 sm:py-16 mx-auto">
    <h3 class="font-bold text-base sm:text-lg">Why Partner with Piedmont Global?</h3>
    <h4 class="font-black text-2xl sm:text-3xl lg:text-4xl my-4 sm:my-6 leading-snug">
        We don’t just fill gaps. <br class="hidden sm:block"> We build what others overlook.
    </h4>
    <p class="max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">
        Partnering with us means gaining an embedded team of experts who help you navigate complexity, reduce risk, and deliver measurable impact. Whether you're scaling globally or serving diverse communities locally, we give you the strategy, systems, and support to connect confidently and securely.
    </p>
</div>

<section class="bg-[#F7F7F5] py-12 sm:py-16 px-6 sm:px-8 lg:px-0">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full mb-8 sm:mb-10 gap-4 sm:gap-6">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 max-w-2xl" data-aos="fade-right">
                Our Solutions Suite
            </h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10 lg:gap-12 max-w-7xl mx-auto">
            <?php
            $args = array(
                'post_type'      => 'solutions',
                'posts_per_page' => -1,
            );
            $solutions_query = new WP_Query($args);

            if ($solutions_query->have_posts()) :
                $delay = 0;
                while ($solutions_query->have_posts()) : $solutions_query->the_post();
                    $tagline = get_field('solution_tagline');
                    $image = get_field('solution_featured_image');
                    $image_url = is_array($image) && isset($image['url']) ? $image['url'] : '/wp-content/uploads/Rectangle-21027.png';
            ?>
            <a href="<?php the_permalink(); ?>"
                class="group relative bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden flex flex-col transform transition-all duration-500 hover:-translate-y-1 hover:shadow-sm focus:outline-none focus:ring-4 focus:ring-[#D16555] focus:ring-offset-2"
                data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" data-aos-duration="600"
                aria-label="Learn more about <?php the_title_attribute(); ?>">

                <div class="overflow-hidden">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>"
                        class="w-full h-48 sm:h-56 md:h-60 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                </div>

                <div class="p-4 sm:p-6 flex flex-col flex-1">
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-2"><?php the_title(); ?></h3>
                    <div class="text-gray-700 mb-4 sm:mb-6 text-base sm:text-lg flex-1">
                        <?php echo wp_kses_post($tagline); ?>
                    </div>
                    <div class="h-4 sm:h-6 md:h-20"></div>

                    <div class="flex items-center mt-auto text-sm font-semibold text-gray-900 transition-colors duration-300 group-hover:text-[#D16555]">
                        Learn more
                        <span class="ml-2 text-lg transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="h-0.5 w-8 mt-1 bg-[#D16555] transition-all duration-300 group-hover:w-24"></div>
                </div>
            </a>
            <?php
                $delay += 100;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>



<?php
get_template_part( 'components/common/cta' ); 
get_footer(); 
?>