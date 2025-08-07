<?php
/**
 * Template Name: Home
 * Description: Immersive countdown teaser — ultra-minimal, scrollable, evolution-themed.
 */
get_header();
get_template_part( 'components/banner/primary' );
?>
<section class="bg-[#1F3131] text-white py-16 px-4">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-semibold mb-12">What brings you here today?</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white text-black rounded-lg p-8 shadow-md">
        <h3 class="text-xl font-semibold">Ready to streamline and scale?</h3>
        <p class="text-gray-700 mt-2">Simplify vendors, strengthen compliance, and enhance quality</p>
        <a href="#" class="inline-flex items-center gap-1 text-sm font-medium mt-6 border-b border-red-500">
          Learn more <span class="text-lg">→</span>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="bg-white text-black rounded-lg p-8 shadow-md">
        <h3 class="text-xl font-semibold">Planning to grow globally?</h3>
        <p class="text-gray-700 mt-2">Expand with clarity, cultural fluency, and scalable solutions</p>
        <a href="#" class="inline-flex items-center gap-1 text-sm font-medium mt-6 border-b border-red-500">
          Learn more <span class="text-lg">→</span>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="bg-white text-black rounded-lg p-8 shadow-md">
        <h3 class="text-xl font-semibold">Need language support now?</h3>
        <p class="text-gray-700 mt-2">Get fast access to interpreters, translators, and localization experts</p>
        <a href="#" class="inline-flex items-center gap-1 text-sm font-medium mt-6 border-b border-red-500">
          Learn more <span class="text-lg">→</span>
        </a>
      </div>
    </div>

    <!-- Government CTA -->
    <div class="bg-white text-black mt-12 rounded-lg p-8 text-center">
      <h3 class="text-xl font-semibold mb-2">Are you a government agency?</h3>
      <p class="text-gray-700 mb-4">Visit Piedmont Global Federal for our government solutions.</p>
      <a href="#" class="inline-flex items-center gap-1 text-sm font-medium border-b border-red-500">
        Visit Piedmont Global Federal <span class="text-lg">→</span>
      </a>
    </div>
  </div>
</section>


<?php
get_template_part( 'components/common/cta' ); 
get_footer(); 
?>
