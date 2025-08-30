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
                <h1 class="text-2xl md:text-4xl lg:text-4xl font-bold" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="800">
                    <?php the_title(); ?>
                </h1>

                <?php if (get_field('page_subheadline')): ?>
                <p class="text-base lg:text-lg my-4 max-w-4xl" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="600">
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

        <div class="testimonial-carousel owl-carousel grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($testimonials as $testimonial): ?>
            <div
                class="relative bg-[#006155] border border-[#F9F8F6] rounded-xl my-16 p-10 flex flex-col shadow-md transition duration-300 hover:shadow-xl hover:-translate-y-1 min-h-[400px]">

                <!-- Decorative Quote -->
                <div
                    class="mx-auto -mt-20 mb-6 bg-[#98C441] text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path
                            d="M7.17 6A5.004 5.004 0 002 11v7a5 5 0 005 5h1v-8H6v-4h5V6H7.17zM18 6a5.004 5.004 0 00-5 5v7a5 5 0 005 5h1v-8h-2v-4h5V6h-4z" />
                    </svg>
                </div>

                <!-- Testimonial Content -->
                <blockquote
                    class="text-white text-base leading-relaxed font-light mb-8 text-start flex-grow overflow-hidden">
                    "<?php echo esc_html($testimonial['description']); ?>"
                </blockquote>

                <!-- Author -->
                <footer class="pt-6 border-t border-[#F9F8F6]/30 text-start">
                    <p class="text-base font-semibold text-white">
                        <?php echo esc_html($testimonial['title']); ?>
                    </p>
                    <?php if (!empty($testimonial['location'])): ?>
                    <p class="text-sm  text-[#F9F8F6]/80">
                        <?php echo esc_html($testimonial['location']); ?>
                    </p>
                    <?php endif; ?>
                </footer>
            </div>
            <?php endforeach; ?>
        </div>

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
                    <img src="<?php the_sub_field('partner_logo'); ?>" alt="Piedmont Global Partner"
                        class="h-24 w-auto mx-auto object-contain transition duration-300 ease-in-out grayscale hover:grayscale-0" />

                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>










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
                        <img src="<?php the_sub_field('logo'); ?>" alt="Piedmont Global Recognition"
                            class="max-h-24 max-w-24 object-contain transition duration-300 ease-in-out grayscale hover:grayscale-0" />

                    </span>
                </a>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>




    </div>
</section>








<?php
get_template_part( 'components/common/cta' ); 
get_footer(); 