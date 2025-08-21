<?php
get_header();
?>

<section class="shadow-sm">
    <div class="bg-[#1F3131] pt-8 pb-12">
        <?php get_template_part('components/navigation/desktop'); ?>
        <?php get_template_part('components/navigation/mobile'); ?>
    </div>



    <div class="h-[500px] md:h-[400px] lg:h-[554px] bg-cover bg-top relative"
        style="background-image: linear-gradient(180deg, rgba(31,49,49,0.5) 0%, #1F3131 80%), url('/wp-content/uploads/f8278d0f0f3c9dc8bdd12184679c36dfb77b57e3.png');">
        <div class="absolute inset-0 flex items-end">
            <div class="max-w-7xl mx-auto w-full px-10 lg:px-0 pb-4 md:pb-12 lg:pb-12 text-white">
                <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold" data-aos="fade-up" data-aos-delay="200">
                    <?php the_title(); ?>
                </h1>
                <p class="text-base lg:text-lg my-4 max-w-4xl" data-aos="fade-up" data-aos-delay="400">
                    <?php the_field('tagline'); ?>
                </p>
                <a href="#"
                    class="inline-block bg-[#98C441] text-[#1F3131] px-5 py-2 mt-4 font-bold text-lg shadow-md hover:bg-[#8AB738] focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#98C441] transition">
                    Explore our model
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-[linear-gradient(to_bottom,_#006155_1%,_#1F3131_40%)] w-full py-20 shadow-sm">
    <div class="max-w-7xl mx-auto px-8 lg:px-0 flex flex-col md:flex-row gap-8">
        <!-- Column 1: Title + Description (2/3 width) -->
        <div class="md:w-2/3 space-y-6">
            <h2 class="text-[#98C441] text-lg  mb-4">
                Translation Outcomes
            </h2>
            <p class="text-white text-base md:text-xl leading-relaxed max-w-3xl">
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque labore expedita perspiciatis repudiandae possimus, sit deleniti blanditiis earum eaque aliquam quas ea asperiores voluptatem ducimus minima hic voluptates magni delectus? </p>
        </div>

        <!-- Column 2: Additional Description (1/3 width) -->
        <div class="md:w-1/3 flex items-center">
            <p class="text-white text-base leading-relaxed">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aut consequuntur nulla vero nam sequi deserunt saepe. Odit quo veritatis unde, nam dignissimos laboriosam eveniet nihil repellendus velit totam. Sit? </p>
        </div>
    </div>
</section>


<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-0">
        <!-- Section Header -->
        <div class="mb-12">
            <p class="text-lg font-medium  mb-2">Industries we support</p>
            <h2 class="text-3xl sm:text-4xl md:text-5xl max-w-4xl font-extrabold mb-6 leading-[98%]">
                Tailored solutions for regulated, high-impact sectors.
            </h2>
        </div>

        <!-- Features Grid -->
        <div class="grid gap-6 grid-cols-1 lg:grid-cols-2">
            <!-- ISO-Certified Quality (Full width on large screens) -->
            <div
                class="block md:flex flex-col md:flex-row items-center md:justify-between p-6 sm:p-8 md:p-12 border border-[#DFDAD4] rounded-lg lg:col-span-2">
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <h3 class="text-2xl sm:text-3xl md:text-3xl font-semibold text-gray-900">
                        ISO-Certified Quality
                    </h3>
                </div>
                <div class="flex flex-wrap justify-center md:justify-end gap-4 md:gap-4">
                    <?php for ($i = 0; $i <2  ; $i++) { ?>
                    <a href="" target="_blank" rel="noopener">
                        <span
                            class="flex items-center justify-center h-24 w-24 sm:h-28 sm:w-28 md:h-32 md:w-32 rounded-full bg-gradient-to-b from-gray-100 to-green-100 shadow-sm"
                            aria-label="Piedmont Global Recognition">
                            <img src="http://pg.local/wp-content/uploads/fc6c468ca3bf0a126824235c072b86a661d06935.png"
                                alt="Piedmont Global Recognition"
                                class="max-h-20 max-w-20 sm:max-h-24 sm:max-w-24 md:max-h-20 md:max-w-20 object-contain">
                        </span>
                    </a>
                    <?php } ?>
                </div>
            </div>

            <?php for ($i = 0; $i < 2; $i++) { ?>

            <!-- Integrated Workflow -->
            <div class="items-justify gap-4 border border-[#DFDAD4] rounded-lg p-12 shadow-md">
                <div class="flex-shrink-0">
                    <span
                        class="flex items-center justify-center h-16 w-16 lg:h-24 lg:w-24 rounded-full bg-gradient-to-b from-gray-100 to-green-100 shadow-sm"
                        aria-label="Piedmont Global Recognition">
                        <img src="http://pg.local/wp-content/uploads/fc6c468ca3bf0a126824235c072b86a661d06935.png"
                            alt="Piedmont Global Recognition"
                            class="max-h-10 lg:max-h-16 max-w-10 lg:max-w-16 object-contain">
                    </span>
                </div>
                <div class="pt-4">
                    <h3 class="text-xl lg:text-2xl text-[#1F3131] font-semibold">
                        200+ Languages </h3>
                    <p class="text-gray-600 text-base lg:text-lg pt-2">
                        Supporting copy can go here and further drive home this point by balancing this space </p>
                </div>
            </div>
            <?php } ?>

            <!-- Global Reach, Local Sensitivity -->

        </div>

    </div>
</section>

<section class="bg-[#1F3131] py-28 text-center">
    <div class="max-w-3xl mx-auto px-4">
        <!-- Heading -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#F9F8F6] tracking-tight">
            Let’s Translate What Matters
        </h1>

        <!-- Subheading -->
        <p class="mt-6 text-base lg:text-lg text-[#F9F8F6] leading-relaxed">
            Looking for a partner who understands that translation<br class="hidden sm:block">
            is mission-critical, not just transactional?
        </p>
        <p class="mt-4 text-base lg:text-lg text-[#F9F8F6]">
            Let’s build something lasting—together.
        </p>

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-6">
            <a href="#"
                class="bg-[#8DC63F] hover:bg-[#7AB22E] text-black font-medium px-6 py-3 text-base lg:text-lg transition">
                Schedule a Consultation
            </a>
            <a href="#" class="flex items-center text-[#F9F8F6] font-medium text-base lg:text-lg hover:underline">
                Download Language Access Guide
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>


<?php get_footer(); ?>