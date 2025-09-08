<?php
/**
 * Template Name: Press
 * Description: 
 */
get_header();
?>

<header class="relative w-full text-white bg-[linear-gradient(to_bottom,_#1F3131_50%,_#006155_100%)] overflow-hidden">
    <?php get_template_part('components/navigation/desktop'); ?>
    <?php get_template_part('components/navigation/mobile'); ?>

    <div class="w-full pt-[30%] lg:pt-[12%] px-6 lg:px-0 relative z-20 pb-10 lg:pb-40">
        <div class="text-start gap-y-8 max-w-7xl mx-auto">


            <h2 class="text-4xl py-5  md:text-5xl max-w-4xl font-extrabold mb-6 leading-[98%]">
                <?php the_title(); ?>
            </h2>
        </div>
    </div>
</header>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = [
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'orderby'        => 'date',
  'order'          => 'DESC',
  'category_name'  => 'press',
  'posts_per_page' => 6,
  'paged'          => $paged
];

$query = new WP_Query($args);
?>

<section class="bg-[#F9F8F6] py-20">
  <div class="max-w-7xl mx-auto px-6 lg:px-0">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-0 lg:-mt-56 relative z-10 press-grid">
      <?php 
      $counter = 0; // Counter for staggered delays
      while ($query->have_posts()) : $query->the_post(); 
        $delay = $counter * 100; // 100ms delay between each card
      ?>
       <a href="<?php the_permalink(); ?>" 
   class="group block shadow-md rounded border border-[#ffffff]/40 rounded-t-[4px] transition-transform duration-300 hover:shadow-lg">
  <div class="overflow-hidden rounded-t-[4px]">
    <img src="<?php the_post_thumbnail_url(); ?>" 
         class="w-full h-60 object-cover object-top transition-transform duration-500 group-hover:scale-105" 
         alt="<?php the_title(); ?>">
  </div>
  <div class="p-8 bg-white">
    <div class="text-gray-500 text-sm mb-2"><?php echo get_the_date(); ?></div>
    <h3 class="text-2xl font-semibold text-[#1F3131] mb-2"><?php the_title(); ?></h3>
    <div class="h-6 md:h-10"></div>
    <span class="inline-flex items-center text-base font-medium border-b-2 border-[#D16555]">
      Read More <span class="ml-1 text-lg">→</span>
    </span>
  </div>
</a>

      <?php 
        $counter++; // Increment counter for next iteration
        endwhile; 
      ?>
    </div>
    
    <!-- Load More Button -->
    <div class="text-center mt-12">
      <button class="load-more-btn bg-[#98C441] text-black px-8 py-3 font-bold text-lg transition-colors duration-200 hover:bg-[#7BA035] focus:outline-none focus:ring-2 focus:ring-[#98C441] focus:ring-offset-2">
        Load More Posts
      </button>
    </div>
  </div>
</section>



<section class="pb-40 pt-20"
    style="background: linear-gradient(to bottom, #F7F7F5 0%, #F7F7F5 70%, #98C44180 85%, #00615580 100%);">

    <div class="max-w-3xl mx-auto px-8 lg:px-0 text-center">
        <h2 class="text-3xl lg:text-5xl font-bold text-black mb-6" 
            data-aos="fade-up" 
            data-aos-duration="400" 
            data-aos-delay="200"
            data-aos-easing="ease-out">
            Ready to move from translation to transformation?
        </h2>
        <a href="/contact"
            class="inline-block bg-[#98C441] text-black px-6 py-3 font-bold text-base lg:text-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#98C441] focus:ring-offset-2 focus:ring-offset-[#1F311]"
            data-aos="fade-up" 
            data-aos-duration="400" 
            data-aos-delay="300"
            data-aos-easing="ease-out">
            Connect with our team
        </a>
    </div>



</section>


<?php
get_template_part( 'components/common/cta' ); 
get_footer(); 
?>