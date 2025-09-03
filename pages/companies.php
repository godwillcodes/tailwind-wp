<?php
/**
 * Template Name: Companies
 * Description:
 */
get_header();
get_template_part( 'components/banner/single-common' );
?>

<section class="bg-[#F9F8F6] py-20 px-6">
  <div class="max-w-5xl mx-auto">
    <!-- Heading -->
    <div class="text-center mb-16 px-4 sm:px-0">
      <h2 class="text-3xl md:text-5xl font-bold text-gray-900 text-center">Our Story of Growth</h2>
      <p class="mt-4 text-lg text-gray-600">Key milestones that shaped our path and continue to define our future.</p>
    </div>

    <!-- Timeline Container -->
    <div class="relative">
      <!-- Timeline Line -->
      <div class="absolute left-6 sm:left-7 top-0 bottom-0 w-1 bg-[#98c441]"></div>

      <!-- Timeline Items -->
      <div class="space-y-20">
        <?php if ( have_rows('companies_repeater') ) : ?>
          <?php while ( have_rows('companies_repeater') ) : the_row(); 
            $logo        = get_sub_field('logo'); // now returns URL string
            $year        = get_sub_field('year');
            $title       = get_sub_field('title');
            $description = get_sub_field('description');
          ?>
            <div class="relative flex items-start">
              <!-- Year Circle -->
              <div class="absolute left-0 flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 bg-[#006040] rounded-full text-white text-sm sm:text-base font-bold shadow-lg z-10">
                <?php echo esc_html($year); ?>
              </div>
              <!-- Content Card -->
              <div class="ml-16 sm:ml-20 flex-1">
                <div class="flex flex-col md:flex-row md:items-center gap-6 bg-white shadow-lg rounded-xl p-12 hover:shadow-xl transition-shadow duration-300">
                  <?php if ( $logo ) : ?>
                    <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr($title); ?> Piedmont Global" class="w-40 h-auto object-contain flex-shrink-0 mx-auto md:mx-0">
                  <?php endif; ?>
                  <div class="flex-1">
                    <?php if ( $description ) : ?>
                      <p class="text-gray-700 text-lg leading-relaxed"><?php echo wp_kses_post($description); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php
get_template_part( 'components/common/cta' );
get_footer();
