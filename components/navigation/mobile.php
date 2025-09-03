<div
    class="max-w-7xl mx-auto px-6 py-6 fixed top-0 w-full z-50 bg-[#1F3131] flex lg:hidden justify-between items-center">
    <div class="flex items-center">
    <?php
$custom_logo_id = get_theme_mod('custom_logo');
$home_url = esc_url(home_url('/'));

if ($custom_logo_id) {
  $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
  echo '<a href="' . $home_url . '" class="inline-block">
          <img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-8 w-auto" />
        </a>';
} else {
  echo '<a href="' . $home_url . '" class="text-xl font-bold">' . get_bloginfo('name') . '</a>';
}
?>

    </div>

    <div x-data="{ open: false, submenu: null }" @keydown.escape.window="open = false; submenu = null" x-cloak>
        <button @click="open = true" aria-label="Open main menu" class="focus:outline-none">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/menu.svg'); ?>"
                class="h-6 w-auto" alt="Menu Icon">
        </button>

        <!-- Overlay -->
        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm"
            @click="open = false; submenu = null" aria-hidden="true"></div>

        <!-- Mobile Menu -->
        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-y-0 opacity-100"
            x-transition:leave-end="translate-y-full opacity-0"
            class="fixed inset-x-4 bottom-4 z-50 rounded-2xl bg-white/20 backdrop-blur-2xl ring-1 ring-white/10 shadow-xl p-6 text-white"
            style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(20px);" role="dialog"
            aria-label="Mobile menu">

            <!-- Main Menu -->
            <div x-show="submenu === null" x-transition>
                <div class="flex justify-end mb-6">
                    <button @click="open = false" class="text-white hover:text-gray-300 focus:outline-none">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav class="space-y-4">
                    <button @click="submenu = 'solutions'"
                        class="w-full text-left text-base font-semibold text-white hover:text-[#98C441] transition flex items-center justify-between">
                        Solutions
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    <button @click="submenu = 'industries'"
                        class="w-full text-left text-base font-semibold text-white hover:text-[#98C441] transition flex items-center justify-between">
                        Industries
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    <button @click="submenu = 'resources'"
                        class="w-full text-left text-base font-semibold text-white hover:text-[#98C441] transition flex items-center justify-between">
                        Resources
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    <button @click="submenu = 'about'"
                        class="w-full text-left text-base font-semibold text-white hover:text-[#98C441] transition flex items-center justify-between">
                        About Us
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                   
                </nav>

                <div class="mt-6">
                    <a href=/contact"
                        class="block w-full text-center bg-[#98C441] text-[#1F3131] font-medium py-2 rounded-lg hover:bg-[#8ABF3B] transition">Request
                        Demo</a>
                </div>
            </div>

            <!-- Submenus -->
            <div x-show="submenu !== null" x-transition>
                <div class="flex justify-between items-center mb-6">
                    <button @click="submenu = null" class="text-white hover:text-gray-300 focus:outline-none">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <span class="text-base font-semibold"
                        x-text="submenu.charAt(0).toUpperCase() + submenu.slice(1)"></span>
                    <button @click="open = false" class="text-white hover:text-gray-300 focus:outline-none">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Solutions -->
                <div x-show="submenu === 'solutions'" x-transition class="space-y-3">
                    <?php 
                $terms = get_terms([
                    'taxonomy'   => 'solution',
                    'hide_empty' => false,
                ]);
                if (!empty($terms) && !is_wp_error($terms)) :
                    foreach ($terms as $term) : ?>
                    <a href="<?php echo esc_url(get_term_link($term)); ?>"
                        class="block text-white hover:text-[#98C441]">
                        <?php echo esc_html($term->name); ?>
                    </a>
                    <?php endforeach; endif; ?>
                    <a href=/solutions"
                        class="block text-base my-12 font-semibold text-white hover:text-[#98C441] transition">Explore
                        All Solutions</a>
                </div>

                <!-- Industries -->
                <div x-show="submenu === 'industries'" x-transition class="space-y-3">
                    <?php
                $industries = new WP_Query([
                    'post_type'      => 'industry',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                ]);
                if ($industries->have_posts()) {
                    while ($industries->have_posts()) {
                        $industries->the_post();
                        echo '<a href="' . esc_url(get_permalink()) . '" class="block text-white hover:text-[#98C441]">' . esc_html(get_the_title()) . '</a>';
                    }
                    wp_reset_postdata();
                }
                ?>
                    <a href="/industries" class="block text-base font-semibold text-white hover:text-[#98C441] my-12 transition">Explore
                        All Industries</a>
                </div>

                <!-- Resources -->
                <div x-show="submenu === 'resources'" x-transition class="space-y-3">
                    <?php
                $menu_items = wp_get_nav_menu_items(14); // Resources menu
                if ($menu_items) {
                    foreach ($menu_items as $menu_item) {
                        echo '<a href="' . esc_url($menu_item->url) . '" class="block text-white hover:text-[#98C441]">' . esc_html($menu_item->title) . '</a>';
                    }
                }
                ?>
                </div>

                <!-- About -->
                <div x-show="submenu === 'about'" x-transition class="space-y-3">
                    <?php
                $menu_items = wp_get_nav_menu_items(13); // About menu
                if ($menu_items) {
                    foreach ($menu_items as $menu_item) {
                        echo '<a href="' . esc_url($menu_item->url) . '" class="block text-white hover:text-[#98C441]">' . esc_html($menu_item->title) . '</a>';
                    }
                }
                ?>
                </div>

                <div class="mt-6">
                    <a href="/contact"
                        class="block w-full text-center bg-[#98C441] text-[#1F3131] font-medium py-2 rounded-lg hover:bg-[#8ABF3B] transition">Request
                        Demo</a>
                </div>
            </div>
        </div>
    </div>

</div>