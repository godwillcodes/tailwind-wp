<!-- Desktop Navigation Component -->
<header class="hidden md:block ">
    <div class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center">
            <?php
      $custom_logo_id = get_theme_mod('custom_logo');
      if ($custom_logo_id) {
          $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
          echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-10 w-auto" />';
      } else {
          echo '<span class="text-xl font-bold text-[#1F3131]">' . get_bloginfo('name') . '</span>';
      }
      ?>
        </div>

        <!-- Navigation -->
        <nav class="flex items-center space-x-8 text-base font-medium text-white" x-data="{ open: false }"
            @keydown.escape.window="open = false">
            <!-- Solutions Dropdown -->
            <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button @click="open = !open"
                    class="inline-flex items-center gap-1 hover:text-[#98C441] transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#98C441]"
                    :aria-expanded="open.toString()" aria-haspopup="true">
                    <span>Solutions</span>
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
                    class="absolute left-1/2 top-full z-40 mt-4 w-96 -translate-x-1/2 rounded-2xl bg-white/70 backdrop-blur-xl shadow-2xl ring-1 ring-white/10 p-6 overflow-hidden  border border-white/20"
                    @click.away="open = false" role="menu" aria-label="Solutions menu">
                    
                    <div aria-hidden="true"
                        class="absolute inset-0 z-[-1] before:content-[''] before:absolute before:inset-0 before:rounded-[40%] before:blur-[60px] before:opacity-30 before:scale-125 before:bg-[#98C441] before:-z-10">
                    </div>

                    <div class="space-y-1">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                        <a href="#"
                            class="flex items-start space-x-4 px-2 py-3 rounded-xl hover:bg-white/10 focus:bg-white/10 transition-colors duration-200 group outline-none focus:ring-2 focus:ring-[#98C441]"
                            role="menuitem" tabindex="0">
                            <div>
                                <p class="text-base font-semibold text-black">Translation</p>
                                <p class="text-sm font-normal text-black">Accurate, fast, and secure,  in over 200 languages.</p>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Solutions Dropdown -->
            <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button @click="open = !open"
                    class="inline-flex items-center gap-1 hover:text-[#98C441] transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#98C441]"
                    :aria-expanded="open.toString()" aria-haspopup="true">
                    <span>Industries</span>
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
                    class="absolute left-1/2 top-full z-40 mt-4 w-96 -translate-x-1/2 rounded-2xl bg-white/70 backdrop-blur-xl shadow-2xl ring-1 ring-white/10 p-6 overflow-hidden  border border-white/20"
                    @click.away="open = false" role="menu" aria-label="Solutions menu">
                    <div aria-hidden="true"
                        class="absolute inset-0 z-[-1] before:content-[''] before:absolute before:inset-0 before:rounded-[40%] before:blur-[60px] before:opacity-30 before:scale-125 before:bg-[#98C441] before:-z-10">
                    </div>

                    <div class="space-y-1">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                        <a href="#"
                            class="flex items-start space-x-4 px-2 py-3 rounded-xl hover:bg-white/10 focus:bg-white/10 transition-colors duration-200 group outline-none focus:ring-2 focus:ring-[#98C441]"
                            role="menuitem" tabindex="0">
                            <div>
                                <p class="text-base font-semibold text-black">Healthcare</p>
                                <p class="text-sm font-normal text-black">Close care gaps with culturally competent, ADA-compliant language access.</p>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <a href="#"
                class="hover:text-[#98C441]  transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#98C441]">Insights</a>
            <a href="#"
                class="hover:text-[#98C441] transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#98C441]">About</a>
            <a href="#"
                class="hover:text-[#98C441] transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#98C441]">Contact</a>


        </nav>

        <!-- CTA Button -->
        <div>
            <a href="#"
                class="inline-block bg-[#98C441] text-[#1F3131] px-5 py-3 rounded-md font-medium text-base shadow-md hover:bg-[#8AB738] focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#98C441] transition">
                Request Demo
            </a>
        </div>
    </div>
</header>