<?php
/**
 * Template Name: Testimonials
 * Description: 
 */
get_header();
?>
<section class="shadow-sm">
    <div class="bg-[#1F3131] pt-8 pb-12">
        <?php
        get_template_part('components/navigation/desktop');
        get_template_part('components/navigation/mobile');
        ?>
    </div>

     <div class="h-[300px] md:h-[300px] lg:h-[344px] bg-cover bg-center relative"
        style="background-image: linear-gradient(180deg, rgba(31,49,49,0.5) 0%, #1F3131 80%), url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>');">
        <div class="absolute inset-0 flex items-end">
            <div class="max-w-7xl mx-auto w-full px-10 lg:px-0 pb-4 md:pb-12 lg:pb-12 text-white">
                <h1 class="text-2xl md:text-4xl lg:text-4xl font-bold" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <?php the_title(); ?>
                </h1>

                <?php if (get_field('page_subheadline')): ?>
    <p class="text-base lg:text-lg my-4 max-w-4xl" 
       data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
        <?php the_field('page_subheadline'); ?>
    </p>
<?php endif; ?>

                
            </div>
        </div>
    </div>
</section>

<?php 
$testimonials = [];
if (have_rows('testimonials', 'option')):
    while (have_rows('testimonials', 'option')): the_row();
        $testimonials[] = [
            'description' => get_sub_field('description'),
            'title'       => get_sub_field('title'),
            'location'    => get_sub_field('location'),
        ];
    endwhile;
endif;
?>

<section class="relative bg-white py-24 px-6 lg:px-0">
    <div class="max-w-7xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="relative bg-white border border-[#F9F8F6]  p-10 flex flex-col shadow-sm transition-transform duration-300 hover:scale-[0.99] hover:shadow-md">
    <!-- Decorative Quote -->
    <div class="mx-auto -mt-12 mb-6 bg-[#006155] text-white w-16 h-16 rounded-full flex items-center justify-center shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
            <path d="M7.17 6A5.004 5.004 0 002 11v7a5 5 0 005 5h1v-8H6v-4h5V6H7.17zM18 6a5.004 5.004 0 00-5 5v7a5 5 0 005 5h1v-8h-2v-4h5V6h-4z"/>
        </svg>
    </div>

    <!-- Testimonial Content -->
    <p class="text-gray-800 text-lg leading-loose font-light italic mb-8 text-center">
        “<?php echo esc_html($testimonial['description']); ?>”
    </p>

    <!-- Author -->
    <div class="mt-auto pt-6 border-t border-gray-200 text-center">
        <p class="text-lg md:text-xl font-semibold text-gray-900">
            <?php echo esc_html($testimonial['title']); ?>
        </p>
        <p class="text-sm md:text-base text-gray-500">
            <?php echo esc_html($testimonial['location']); ?>
        </p>
    </div>
</div>

            <?php endforeach; ?>
        </div>
    </div>
</section>






<?php
get_template_part( 'components/common/cta' ); 
get_footer(); 