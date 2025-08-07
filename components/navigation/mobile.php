<!-- Mobile Nav Header (Two-Step Menu Structure) -->
<div class="max-w-7xl mx-auto px-6 py-6 flex md:hidden justify-between items-center">
  <!-- Logo -->
  <div class="flex items-center">
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    if ($custom_logo_id) {
      $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
      echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-8 w-auto" />';
    } else {
      echo '<span class="text-xl font-bold">' . get_bloginfo('name') . '</span>';
    }
    ?>
  </div>

  <!-- Menu Trigger -->
  <div x-data="{ open: false, submenu: null }" @keydown.escape.window="open = false; submenu = null" x-cloak>
    <button @click="open = true" aria-label="Open main menu" class="focus:outline-none">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/menu.svg'); ?>" class="h-6 w-auto" alt="Menu Icon">
    </button>

    <!-- Backdrop -->
    <div
      x-show="open"
      x-cloak
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm"
      @click="open = false; submenu = null"
      aria-hidden="true">
    </div>

    <!-- Menu Panel -->
    <div
      x-show="open"
      x-cloak
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="translate-y-full opacity-0"
      x-transition:enter-end="translate-y-0 opacity-100"
      x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="translate-y-0 opacity-100"
      x-transition:leave-end="translate-y-full opacity-0"
      class="fixed inset-x-4 bottom-4 z-50 rounded-2xl bg-white/20 backdrop-blur-2xl ring-1 ring-white/10 shadow-xl p-6 text-white"
      style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(20px);"
      role="dialog"
      aria-label="Mobile menu"
    >

      <!-- First Layer -->
      <div x-show="submenu === null" x-transition>
        <div class="flex justify-end mb-6">
          <button @click="open = false" class="text-white hover:text-gray-300 focus:outline-none">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <nav class="space-y-4">
          <button @click="submenu = 'solutions'" class="w-full text-left text-base font-semibold text-white hover:text-[#98C441] transition">Solutions</button>
          <button @click="submenu = 'industries'" class="w-full text-left text-base font-semibold text-white hover:text-[#98C441] transition">Industries</button>
          <a href="#" class="block text-base font-semibold text-white hover:text-[#98C441] transition">Home</a>
          <a href="#" class="block text-base font-semibold text-white hover:text-[#98C441] transition">About</a>
          <a href="#" class="block text-base font-semibold text-white hover:text-[#98C441] transition">Services</a>
          <a href="#" class="block text-base font-semibold text-white hover:text-[#98C441] transition">Contact</a>
        </nav>

        <div class="mt-6">
          <a href="#" class="block w-full text-center bg-[#98C441] text-[#1F3131] font-medium py-2 rounded-lg hover:bg-[#8ABF3B] transition">Request Demo</a>
        </div>
      </div>

      <!-- Second Layer - Solutions -->
      <div x-show="submenu === 'solutions'" x-transition>
        <div class="flex justify-between items-center mb-6">
          <button @click="submenu = null" class="text-white hover:text-gray-300 focus:outline-none">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <span class="text-base font-semibold">Solutions</span>
          <span class="w-5"></span>
        </div>
        <div class="space-y-3">
          <a href="#" class="block text-white hover:text-[#98C441]">Analytics</a>
          <a href="#" class="block text-white hover:text-[#98C441]">Engagement</a>
          <a href="#" class="block text-white hover:text-[#98C441]">Conversions</a>
        </div>
      </div>

      <!-- Second Layer - Industries -->
      <div x-show="submenu === 'industries'" x-transition>
        <div class="flex justify-between items-center mb-6">
          <button @click="submenu = null" class="text-white hover:text-gray-300 focus:outline-none">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <span class="text-base font-semibold">Industries</span>
          <span class="w-5"></span>
        </div>
        <div class="space-y-3">
          <a href="#" class="block text-white hover:text-[#98C441]">Finance</a>
          <a href="#" class="block text-white hover:text-[#98C441]">Healthcare</a>
          <a href="#" class="block text-white hover:text-[#98C441]">Retail</a>
        </div>
      </div>
    </div>
  </div>
</div>
