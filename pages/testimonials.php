<?php
/**
 * Template Name: Testimonials
 * Description:
 */
get_header();
?>

<!-- Hero -->
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
        <h1 class="text-2xl md:text-4xl lg:text-4xl font-bold"
            data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
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

<!-- Testimonials -->
<section class="relative bg-white py-20 px-6 lg:px-0">
  <div class="max-w-7xl mx-auto">

    <?php if (!empty($testimonials)): ?>
    <ul class="testimonial-carousel owl-carousel" role="list" aria-label="Testimonials">
      <?php $i=0; foreach ($testimonials as $testimonial): $i++; ?>
      <article 
        class="relative bg-[linear-gradient(to_bottom,_#1F3131_50%,_#006155_100%)] border border-[#F9F8F6] rounded-xl my-10 p-10 flex flex-col shadow-md transition duration-300 hover:shadow-xl min-h-[400px]"
        data-aos="fade-up"
        data-aos-delay="<?php echo $i * 150; ?>"
        data-aos-duration="600"
        role="listitem"
        aria-label="Testimonial"
      >
        <!-- Decorative Quote -->
        <div class="mx-auto -mt-20 mb-6 bg-[#D16555] text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
            <path d="M7.17 6A5.004 5.004 0 002 11v7a5 5 0 005 5h1v-8H6v-4h5V6H7.17zM18 6a5.004 5.004 0 00-5 5v7a5 5 0 005 5h1v-8h-2v-4h5V6h-4z" />
          </svg>
        </div>

        <!-- Testimonial Content -->
        <blockquote class="text-white text-base leading-relaxed font-light mb-8 text-start flex-grow">
          <p>“<?php echo esc_html($testimonial['description']); ?>”</p>
        </blockquote>

        <!-- Author -->
        <footer class="pt-6 border-t border-[#F9F8F6]/30 text-start">
          <h3 class="text-base font-semibold text-white">
            <?php echo esc_html($testimonial['title']); ?>
          </h3>
          <?php if (!empty($testimonial['location'])): ?>
            <p class="text-sm text-[#F9F8F6]/80">
              <?php echo esc_html($testimonial['location']); ?>
            </p>
          <?php endif; ?>
        </footer>
      </article>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>

  </div>
</section>

<!-- Partners -->
<section class="bg-white pb-16 px-6 lg:px-0">
  <div class="max-w-7xl mx-auto">

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full mb-20 gap-6">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 max-w-lg" data-aos="fade-up">
        The trusted partner for local and global growth
      </h2>
    </div>

    <?php if (have_rows('partners_repeater', 'option')): ?>
    <ul class="owl-carousel owl-theme mb-16 partners-carousel" role="list" aria-roledescription="carousel" aria-label="Partners">
      <?php $j=0; while (have_rows('partners_repeater', 'option')): the_row(); $j++; ?>
      <li 
        role="listitem" 
        data-aos="fade-up" 
        data-aos-delay="<?php echo $j * 100; ?>" 
        data-aos-duration="500"
      >
        <a href="<?php the_sub_field('url'); ?>" target="_blank" rel="noopener">
          <img 
            src="<?php the_sub_field('partner_logo'); ?>" 
            alt="<?php the_sub_field('partner_name') ?: 'Partner Logo'; ?>" 
            class="h-24 w-auto mx-auto object-contain transition duration-300 ease-in-out grayscale hover:grayscale-0" 
          />
        </a>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>

  </div>
</section>

<!-- Recognition -->
<section class="bg-white pb-16 px-6 lg:px-0">
  <div class="max-w-7xl mx-auto">
    <div class="rounded-lg border border-[#DFDAD4] p-8 md:p-12 shadow-md">
      <h3 class="text-2xl md:text-3xl text-[#1F3131] font-semibold mb-8">
        We’ve been recognized
      </h3>

      <?php if (have_rows('recognized_by', 'option')): ?>
      <ul class="owl-carousel owl-theme recognized-carousel" role="list" aria-roledescription="carousel" aria-label="Recognitions">
        <?php $k=0; while (have_rows('recognized_by', 'option')): the_row(); $k++; ?>
        <li 
          role="listitem"
          data-aos="fade-up"
          data-aos-delay="<?php echo $k * 120; ?>"
          data-aos-duration="500"
        >
          <a href="<?php the_sub_field('url'); ?>" target="_blank" rel="noopener">
            <span class="flex items-center justify-center h-32 w-32 rounded-full bg-gradient-to-b from-gray-100 to-green-100 shadow-sm">
              <img 
                src="<?php the_sub_field('logo'); ?>" 
                alt="<?php the_sub_field('recognition_name') ?: 'Recognition Logo'; ?>" 
                class="max-h-24 max-w-24 object-contain transition duration-300 ease-in-out grayscale hover:grayscale-0" 
              />
            </span>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php
get_template_part( 'components/common/cta' ); 
get_footer();
