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
                <h4 class="text-lg font-semibold mb-4">Company</h4>
                <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
                    <li><a href="#" class="hover:text-white">About Us</a></li>
                    <li><a href="#" class="hover:text-white">Careers</a></li>
                    <li><a href="#" class="hover:text-white">Blog</a></li>
                    <li><a href="#" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Column 2 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Services</h4>
                <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
                    <li><a href="#" class="hover:text-white">Consulting</a></li>
                    <li><a href="#" class="hover:text-white">Development</a></li>
                    <li><a href="#" class="hover:text-white">Design</a></li>
                    <li><a href="#" class="hover:text-white">Support</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Resources</h4>
                <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
                    <li><a href="#" class="hover:text-white">Help Center</a></li>
                    <li><a href="#" class="hover:text-white">Guides</a></li>
                    <li><a href="#" class="hover:text-white">Security</a></li>
                    <li><a href="#" class="hover:text-white">API Docs</a></li>
                </ul>
            </div>

            <!-- Column 4 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Social</h4>
                <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
                    <li><a href="#" class="hover:text-white">Facebook</a></li>
                    <li><a href="#" class="hover:text-white">Twitter</a></li>
                    <li><a href="#" class="hover:text-white">LinkedIn</a></li>
                    <li><a href="#" class="hover:text-white">YouTube</a></li>
                </ul>

                <!-- Newsletter -->
                <!-- Newsletter -->
                <div class="col-span-full mt-8">
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
       alt="Footer Image"
       class="w-full relative left-0 md:left-[40%]" />
</div>

    </div>
</footer>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>