<?php
/**
 * Template Name: SMS Opt-In
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

    <div class="h-[500px] md:h-[400px] lg:h-[554px] bg-cover bg-top relative"
        style="background-image: linear-gradient(180deg, rgba(31,49,49,0.5) 0%, #1F3131 80%), url('<?php echo esc_url($featured_image); ?>');">
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

                <a href="/contact" data-aos="fade-up" data-aos-delay="600" data-aos-duration="500"
                    class="inline-block bg-[#98C441] text-[#1F3131] px-5 py-2 mt-4 font-bold text-base shadow-md hover:bg-[#8AB738] focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#98C441] transition">
                    Request Demo
                </a>
            </div>
        </div>
    </div>
</section>
<section class="bg-[#F7F7F5] py-16 px-6 md:px-0">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
    
    <!-- Copy Section (fixed on scroll for desktop) -->
    <div class="prose text-gray-800 max-w-xl md:sticky md:top-24 self-start">
      <?php the_content(); ?>
    </div>

    <!-- Form Section -->
    <div class="bg-[#006155] rounded-xl shadow-lg p-6 sm:p-8 text-white w-full">
      <h2 class="text-2xl font-bold mb-6">SMS Opt-In Form</h2>
            <div class="text-lg">
                <?php echo do_shortcode('[forminator_form id="211"]'); ?>
            </div>
    </div>
  </div>
</section>

<style>
    #forminator-module-211 label, #forminator-module-211 span, #forminator-module-211 .forminator-label, #forminator-module-211 .forminator-button-submit, #forminator-module-211 .forminator-radio-label {
        font-size: 16px !important;
    }
    .forminator-button-submit{
        font-size: 16px !important;
        padding: 12px 24px;
        background-color: #98c441 !important;
    }
</style>


<?php
get_template_part( 'components/common/cta' ); 
get_footer(); 