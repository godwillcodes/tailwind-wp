<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PiedmontGlobal
 */

?>

<footer class="bg-[linear-gradient(to_bottom,_#1F3131_50%,_#006155_100%)] text-white pt-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-12 md:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 pb-12">

            <!-- Column 1 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Solutions</h4>
                <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
                    <?php
                    $args = array(
                        'post_type'      => 'solutions',
                        'posts_per_page' => -1,
                        'post_status'    => 'publish',
                        'order'          => 'ASC',
                        'orderby'        => 'title'
                    );
                    $solutions_query = new WP_Query($args);

                    if ($solutions_query->have_posts()) :
                        while ($solutions_query->have_posts()) : $solutions_query->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="hover:text-white">
                            <?php the_title(); ?>
                        </a>
                    </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>


            <!-- Column 2 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Industries</h4>
                <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
                    <?php
        $industries = new WP_Query([
            'post_type' => 'industry',
            'posts_per_page' => -1, // Get all posts
            'post_status' => 'publish', // Get only published posts
            'orderby' => 'title', // Order by title
            'order' => 'ASC' // In ascending order
        ]);

        if ($industries->have_posts()) :
            while ($industries->have_posts()) : $industries->the_post();
        ?>
                    <li><a href="<?php the_permalink(); ?>" class="hover:text-white"><?php the_title(); ?></a></li>
                    <?php
            endwhile;
            wp_reset_postdata(); // Reset the post data to the main query
        endif;
        ?>
                </ul>
            </div>

            <!-- Column 3 -->
            <div>
    <h4 class="text-lg font-semibold mb-4">Products</h4>
    <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
        <?php
        $menu_items = wp_get_nav_menu_items(6);

        if ($menu_items) {
            foreach ($menu_items as $menu_item) {
                echo '<li><a href="' . esc_url($menu_item->url) . '" class="hover:text-white">' . esc_html($menu_item->title) . '</a></li>';
            }
        }
        ?>
    </ul>
</div>


            <!-- Column 4 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Company</h4>
                <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
    <?php
    $menu_items = wp_get_nav_menu_items(7);

    if ($menu_items) {
        foreach ($menu_items as $menu_item) {
            echo '<li><a href="' . esc_url($menu_item->url) . '" class="hover:text-white">' . esc_html($menu_item->title) . '</a></li>';
        }
    }
    ?>
</ul>


                <!-- Newsletter -->
                <!-- Newsletter -->
                <div class="col-span-full mt-12">
                    <h5 class="text-lg font-semibold mb-2">Newsletter</h5>
                    <form class="relative w-full max-w-md">
                        <input type="email" placeholder="Your email"
                            class="w-full pr-12 px-3 py-2 bg-transparent border border-[#F9F8F6]/50 rounded-md text-white placeholder:text-[#F9F8F6]/50 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        <button type="submit"
                            class="absolute right-2 top-1/2 -translate-y-1/2 text-[#F9F8F6] hover:text-white"
                            aria-label="Subscribe">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Logo, Address, Footer Image -->
    <div class="flex flex-col md:flex-row items-start justify-between max-w-7xl mx-auto px-10 md:px-5 pt-8 gap-8">
        <!-- Logo and Address -->
        <div class="flex flex-col space-y-8">
            <?php
      $custom_logo_id = get_theme_mod('custom_logo');
      if ($custom_logo_id) {
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-10 md:h-16 w-auto mb-4" />';
      } else {
        echo '<span class="text-xl font-bold">' . get_bloginfo('name') . '</span>';
      }
      ?>
            <p class="not-italic text-base text-[#F9F8F6] leading-relaxed">
                1234 Example Street<br>
                Nairobi, Kenya
            </p>

            <p class="not-italic text-base text-[#F9F8F6] leading-relaxed"><a href="tel:+254700000000">+254 700 000
                    000</a>
                <br>
                <a href="mailto:info@example.com">info@example.com</a>
            </p>


        </div>

        <!-- Footer Image -->
        <div class="w-full md:w-auto md:flex-1 md:pl-12 ">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/footer.png'); ?>"
                alt="Footer Image" class="w-full relative left-0 md:left-[40%]" />
        </div>

    </div>
</footer>



</div><!-- #page -->

<?php wp_footer(); ?>

<script>
jQuery(document).ready(function($) {
    $('.partners-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: { items: 2 },
            640: { items: 3 },
            1024: { items: 5 }
        }
    });
});

</script>



<script>
jQuery(document).ready(function($) {
    $('.recognized-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 3
            },
            768: {
                items: 5
            },
            1024: {
                items: 7.5
            }
        }
    });
});
</script>


</body>

</html>