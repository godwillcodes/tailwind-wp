<!-- Desktop Navigation Component -->
<!-- Desktop Navigation Component -->
<header class="hidden lg:block fixed w-full top-0 z-50 transition-colors duration-300" x-data="{ 
        scrolled: false, 
        logoDefault: '<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod("custom_logo"), "full" )[0] ); ?>',
        logoScrolled: '<?php echo esc_url( get_template_directory_uri() . "/assets/icons/pglogo-light.svg" ); ?>'
        }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 100 })"
    :class="{ 'bg-gradient-to-b from-[#F9F8F6]/95 to-[#F9F8F6]/70 mt-0 backdrop-blur-xl shadow-[0_4px_30px_rgba(0,0,0,0.1)] text-black': scrolled }">
    <div class="max-w-7xl mx-auto py-4 px-6 lg:px-0 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Home">
                <img :src="scrolled ? logoScrolled : logoDefault" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>"
                    class="h-8 w-auto transition-all duration-300" />
            </a>
        </div>


        <!-- Navigation -->
        <nav class="flex items-center space-x-6 text-base font-medium transition-colors duration-300"
            :class="scrolled ? 'text-black' : 'text-white'" x-data="{ open: false }"
            @keydown.escape.window="open = false">
            <!-- Solutions Dropdown -->
            <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button @click="open = !open"
                    class="inline-flex items-center gap-1 hover:text-[#98C441] transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#98C441]"
                    :aria-expanded="open.toString()" aria-haspopup="true">
                    <span class="font-normal">Solutions</span>
                    <svg class="w-5 h-5 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                    </svg>
                </button>
                <!-- Dropdown Panel -->
                <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300 delay-100"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-2"
                    class="absolute left-1/2 top-full  z-40 mt-4 w-96 -translate-x-1/2 rounded bg-gradient-to-b from-white/95 to-white/90 backdrop-blur-xl shadow-[0_4px_30px_rgba(0,0,0,0.1)]  p-6 overflow-hidden  "
                    @click.away="open = false" role="menu" aria-label="Solutions menu">

                    <div class="space-y-1">
                        <?php 
                        // Get all terms in the 'solution' taxonomy
                        $terms = get_terms([
                            'taxonomy' => 'solution',
                            'hide_empty' => false, // set true to hide terms not assigned to any post
                        ]);

                        if (!empty($terms) && !is_wp_error($terms)) :
                            foreach ($terms as $term) : ?>
                        <a href="<?php echo esc_url(get_term_link($term)); ?>"
                            class="flex flex-col space-y-1 py-2 transition-all duration-300 transform group outline-none w-full">
                            <div class="w-full">
                                <p
                                    class="text-base font-semibold text-[#1F3131] group-hover:text-[#98C441] transition-colors duration-300">
                                    <?php echo esc_html($term->name); ?>
                                </p>
                                <?php if (!empty($term->description)) : ?>
                                <div class="text-sm font-normal text-gray-600  w-full">
                                    <?php echo wp_kses_post($term->description); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </a>

                        <?php endforeach;
                        else: ?>
                        <p>No taxonomy terms found in the 'solution' taxonomy.</p>
                        <?php endif; ?>
                        <a href="<?php echo esc_url(site_url('/solutions')); ?>"
                            class="flex flex-col space-y-1 pt-4 border-t border-gray-200 transition-all duration-300 transform group outline-none">
                            <div class="flex items-center justify-center">
                                <p
                                    class="text-sm font-bold text-[#1F3131] text-center group-hover:text-[#98C441] transition-colors duration-300">
                                    Explore All Solutions
                                </p>
                                <!-- Right Arrow SVG -->
                                <svg class="w-4 h-4 ml-2 text-[#1F3131] group-hover:text-[#98C441] transition-colors duration-300"
                                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <!-- Industries Dropdown -->
            <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button @click="open = !open"
                    class="inline-flex items-center gap-1 hover:text-[#98C441] transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#98C441]"
                    :aria-expanded="open.toString()" aria-haspopup="true">
                    <span class="font-normal">Industries</span>
                    <svg class="w-5 h-5 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                    </svg>
                </button>
                <!-- Dropdown Panel -->
                <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300 delay-100"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-2"
                    class="absolute left-1/2 top-full  z-40 mt-4 w-96 -translate-x-1/2 rounded bg-gradient-to-b from-white/95 to-white/90 backdrop-blur-3xl shadow-[0_4px_30px_rgba(0,0,0,0.1)]  p-6 overflow-hidden  "
                    @click.away="open = false" role="menu" aria-label="Solutions menu">

                    <div class="space-y-1">
                        <?php
                        $solutions = new WP_Query([
                            'post_type' => 'industry',
                            'posts_per_page' => -1,
                            'post_status' => 'publish'
                        ]);
                        if ($solutions->have_posts()) :
                            while ($solutions->have_posts()) : $solutions->the_post(); ?>
                        <a href="<?php the_permalink(); ?>"
                            class="flex flex-col space-y-1 pt-2 transition-all duration-300 transform group outline-none">
                            <div>
                                <?php
                                        // Get the custom fields
                                        $tagline = get_field('industry_tagline');
                                        ?>

                                <p
                                    class="text-base font-semibold text-[#1F3131] group-hover:text-[#98C441] transition-colors duration-300">
                                    <?php the_title(); ?>
                                </p>

                                <?php
                                        // Display the tagline if it exists
                                        if ($tagline) : ?>
                                <div class="text-sm font-normal text-gray-600 mt-1">
                                    <?php echo wp_kses_post($tagline); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </a>
                        <?php endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                        <a href="<?php echo esc_url(site_url('/industries')); ?>"
                            class="flex flex-col space-y-1 pt-4 border-t border-gray-200 transition-all duration-300 transform group outline-none">
                            <div class="flex items-center justify-center">
                                <p
                                    class="text-sm font-bold text-[#1F3131] text-center group-hover:text-[#98C441] transition-colors duration-300">
                                    Explore All Industries
                                </p>
                                <!-- Right Arrow SVG -->
                                <svg class="w-4 h-4 ml-2 text-[#1F3131] group-hover:text-[#98C441] transition-colors duration-300"
                                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <!-- ABOUT US DROPDOWN -->
            <div class="relative" x-data="{ openAbout: false }" @mouseenter="openAbout = true"
                @mouseleave="openAbout = false">
                <button @click="openAbout = !openAbout"
                    class="inline-flex items-center gap-1 hover:text-[#98C441] transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#98C441]"
                    :aria-expanded="openAbout.toString()" aria-haspopup="true">
                    <span class="font-normal">About PGLS</span>
                    <svg class="w-5 h-5 transition-transform duration-200" :class="{ 'rotate-180': openAbout }"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                    </svg>
                </button>
                <div x-show="openAbout" x-cloak x-transition:enter="transition ease-out duration-300 delay-100"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-2"
                    class="absolute left-1/2 top-full z-40 mt-4 w-80 -translate-x-1/2 rounded bg-gradient-to-b from-white/95 to-white/90 backdrop-blur-3xl shadow-[0_4px_30px_rgba(0,0,0,0.1)] p-6 overflow-hidden"
                    @click.away="openAbout = false" role="menu" aria-label="About menu">

                    <div class="space-y-6">
                        <?php
            $menu_items = wp_get_nav_menu_items(13); // About menu
            if ($menu_items) {
                foreach ($menu_items as $menu_item) {
                    echo '<a href="' . esc_url($menu_item->url) . '" class="block text-base font-normal text-[#1F3131] hover:text-[#98C441] transition-colors duration-300">'
                        . esc_html($menu_item->title) .
                        '</a>';
                }
            }
            ?>
                    </div>
                </div>
            </div>

            <!-- RESOURCES DROPDOWN -->
            <div class="relative" x-data="{ openResources: false }" @mouseenter="openResources = true"
                @mouseleave="openResources = false">
                <button @click="openResources = !openResources"
                    class="inline-flex items-center gap-1 hover:text-[#98C441] transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#98C441]"
                    :aria-expanded="openResources.toString()" aria-haspopup="true">
                    <span class="font-normal">Resources</span>
                    <svg class="w-5 h-5 transition-transform duration-200" :class="{ 'rotate-180': openResources }"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                    </svg>
                </button>
                <div x-show="openResources" x-cloak x-transition:enter="transition ease-out duration-300 delay-100"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-2"
                    class="absolute left-1/2 top-full z-40 mt-4 w-96 -translate-x-1/2 rounded bg-gradient-to-b from-white/95 to-white/90 backdrop-blur-3xl shadow-[0_4px_30px_rgba(0,0,0,0.1)] p-6 overflow-hidden"
                    @click.away="openResources = false" role="menu" aria-label="Resources menu">

                    <div class="space-y-6">
                        <?php
            $menu_items = wp_get_nav_menu_items(14); // Resources menu
            if ($menu_items) {
                foreach ($menu_items as $menu_item) {
                    echo '<a href="' . esc_url($menu_item->url) . '" class="block text-base font-normal text-[#1F3131] hover:text-[#98C441] transition-colors duration-300">'
                        . esc_html($menu_item->title) .
                        '</a>';
                }
            }
            ?>
                    </div>
                </div>
            </div>



        </nav>

        <!-- CTA Button -->
        <div>
            <a href="/contact"
                class="inline-block bg-[#98C441] text-[#1F3131] px-5 py-2 font-medium text-base shadow-md hover:bg-[#8AB738] focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#98C441] transition">
                Request Demo
            </a>
        </div>
    </div>
</header>