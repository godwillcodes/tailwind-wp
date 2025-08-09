<?php
/**
 * Template Name: Home
 * Description: Immersive countdown teaser — ultra-minimal, scrollable, evolution-themed.
 */
get_header();
get_template_part( 'components/banner/primary' );
?>
<section class="bg-[#1F3131] text-white py-20 px-4">
    <div class="max-w-7xl mx-auto ">
        <h2 class="text-3xl md:text-4xl font-semibold mb-12 text-center">What brings you here today?</h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <?php for ($i = 0; $i < 3; $i++) { ?>
            <div class="relative group overflow-hidden rounded shadow-md h-full bg-white text-black p-10"
                data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-out-cubic">
                <!-- Default Content -->
                <div class="relative z-10 text-start group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
                    <h3 class="text-2xl font-semibold transition-transform duration-500 group-hover:-translate-y-2">
                        Ready to streamline and scale?
                    </h3>
                    <p class="text-gray-700 mt-2 transition-opacity duration-500">
                        Simplify vendors, strengthen compliance, and enhance quality
                    </p>
                    <div class="h-20 md:h-40"></div>
                    <a href="#"
                        class="inline-flex items-center gap-1 text-sm font-medium mt-6 border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300">
                        Learn more <span class="text-lg">→</span>
                    </a>
                </div>

                <!-- Hover Content with Gradient Background -->
                <div
                    class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center px-6 opacity-0 group-hover:opacity-100 transition-all duration-100 ease-out bg-[linear-gradient(180deg,_rgba(152,196,65,0)_46.15%,_rgba(152,196,65,0.5)_80%,_rgba(0,97,85,0.5)_100%)] scale-95 group-hover:scale-100">

                    <a href="#"
                        class="text-xl md:text-2xl  px-6 md:px-20 font-semibold inline-flex items-center gap-2 text-black mb-6 transition-transform duration-500 ease-in-out group-hover:translate-y-1">
                        Explore our Approach
                    </a>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-side.svg'); ?>"
                        alt=" Arrow Icon"
                        class="h-10 w-10 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110">
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Government CTA -->
        <div class="bg-white text-black mt-12 rounded-lg p-8 text-center group relative overflow-hidden"
            data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-out-cubic">
            <div class="relative z-10 transition-opacity duration-500 ease-in-out group-hover:opacity-0">
                <h3 class="text-2xl font-semibold mb-2 transition-transform duration-500 group-hover:-translate-y-2">
                    Are you a government agency?
                </h3>
                <p class="text-gray-700 mb-4 transition-opacity duration-500">
                    Visit Piedmont Global Federal for our government solutions.
                </p>
                <div class="h-20"></div>
                <a href="#"
                    class="inline-flex items-center gap-1 text-sm font-medium mt-6 border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300">
                    Visit Piedmont Global Federal <span class="text-lg">→</span>
                </a>
            </div>

            <div
                class="absolute inset-0 z-20 flex flex-col items-center justify-center px-6 text-center
        opacity-0 group-hover:opacity-100 transition-all duration-200 ease-out
        bg-[linear-gradient(180deg,_rgba(152,196,65,0)_46.15%,_rgba(152,196,65,0.5)_80%,_rgba(0,97,85,0.5)_100%)] scale-95 group-hover:scale-100">
                <a href="#"
                    class="text-xl md:text-2xl max-w-xs mx-auto font-semibold inline-flex items-center gap-2 text-black mb-6 transition-transform duration-500 ease-in-out group-hover:translate-y-1">
                    Explore Government Solutions
                </a>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-side.svg'); ?>"
                    alt=" Arrow Icon"
                    class="h-10 w-10 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110">
            </div>
        </div>

    </div>
</section>


<section class="bg-[#F7F7F5] py-20 px-10 md:px-0">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full mb-20 gap-6">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 max-w-xl" data-aos="fade-right">
                The trusted partner for local and global growth
            </h2>

        </div>

        <div class="owl-carousel owl-theme mb-16 partners-carousel">
            <?php for ($i = 0; $i < 2; $i++) { ?>
            <div class="item">
                <img src="http://piedmontglobal.local/wp-content/uploads/Group-10322.png" alt="READ"
                    class="h-12 w-auto mx-auto object-contain" />
            </div>
            <?php } ?>

        </div>



        <div class="grid gap-6 md:grid-cols-2 mb-16">
            <?php for ($i = 0; $i < 2; $i++) { ?>
            <div class=" items-start gap-4 border border-[#DFDAD4] rounded-lg p-12 shadow-md">
                <div class="flex-shrink-0">
                    <img src="http://piedmontglobal.local/wp-content/uploads/Vector.png" alt="" aria-hidden="true"
                        class="h-12 w-12" />
                </div>
                <div class="pt-4">
                    <h3 class="text-2xl text-[#1F3131] font-semibold">200+ Languages</h3>
                    <p class="text-gray-600 tex-lg pt-2">Supporting copy can go here and further drive home this point
                        by balancing
                        this space</p>
                </div>
            </div>
            <?php } ?>

        </div>



        <div class="bg-white rounded-lg border border-[#DFDAD4] p-8 md:p-12 shadow-md">
            <h3 class="text-2xl md:text-3xl text-[#1F3131] font-semibold mb-8">
                We’ve been recognized
            </h3>

            <div class="owl-carousel owl-theme recognized-carousel">
                <?php for ($i = 0; $i < 12; $i++) { ?>
                <span
                    class="flex items-center justify-center h-32 w-32 rounded-full bg-gradient-to-b from-gray-100 to-green-100 shadow-sm"
                    aria-label="Environmental Sustainability Award">
                    <img src="http://piedmontglobal.local/wp-content/uploads/fc6c468ca3bf0a126824235c072b86a661d06935.png"
                        alt="Environmental Sustainability Award" class="max-h-20 max-w-20 object-contain" />
                </span>
                <?php } ?>
            </div>
        </div>




    </div>
</section>

<section class="bg-[#F7F7F5] py-20 ">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full mb-20 gap-6">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900" data-aos="fade-right">
                From translation to<br />transformation
            </h2>
            <a href="#"
                class="inline-flex items-center text-lg font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300"
                data-aos="fade-left" data-aos-delay="100">
                Explore full capabilities <span class="ml-1 text-lg">→</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-32">
            <div data-aos="fade-up" data-aos-delay="150" class="flex-1 px-10 md:px-0">
                <div class="space-y-10">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="<?= $i < 2 ? 'pb-6 border-b border-gray-300' : '' ?>">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Reach people, fluently</h3>
                        <p class="text-gray-700 text-lg">
                            Multilingual communication that feels like home wherever you appear. We help you build trust
                            and
                            understanding through culturally attuned CX, comms, and digital content.
                        </p>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="" data-aos="fade-down" data-aos-delay="100">
                <div class="rounded-[8px] overflow-hidden mx-10 md:mx-0" style="
        background: linear-gradient(0deg, #550061, #550061),
        linear-gradient(0.03deg, #D16555 0.04%, rgba(171, 157, 186, 0) 50.01%);
      ">
                    <img src="/wp-content/uploads/Rectangle-21027.png" alt="Team collaboration"
                        class=" h-full w-full object-cover rounded-[6px] p-10 md:p-20 " />
                </div>
            </div>
        </div>







    </div>



</section>


<section class="bg-[#1F3131] text-white py-20 px-10 md:px-0">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full mb-20 gap-6">
            <h2 class="text-3xl md:text-5xl font-bold text-white max-w-lg" data-aos="fade-right">
                Deep industry insight. Proven across sectors.
            </h2>
            <a href="#"
                class="inline-flex items-center text-lg font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300"
                data-aos="fade-left" data-aos-delay="100">
                Explore industry solutions <span class="ml-1 text-lg">→</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            // Create a new query for the 'industry' post type
            $industries_query = new WP_Query([
                'post_type' => 'industry',
                'posts_per_page' => -1, // Retrieve all posts
                'post_status' => 'publish' // Only get published posts
            ]);
            $i = 0; // Initialize a counter for the AOS delay

            if ($industries_query->have_posts()) :
                while ($industries_query->have_posts()) : $industries_query->the_post();
                    // Get custom fields for each post
                    $icon = get_field('industry_icon');
                    $tagline = get_field('industry_tagline');
            ?>
            <a href="<?php the_permalink(); ?>" class="group">
                <div class="bg-[#006155] text-white rounded-[4px] shadow-md p-10 flex flex-col justify-between transition-transform duration-300 transform group-hover:scale-95"
                    data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                    <?php if ($icon) : ?>
                    <img src=" <?php echo wp_kses_post($icon); ?>" class="mb-6 h-16 w-16" alt="">
                    <?php endif; ?>
                    <h3 class="text-xl text-white font-semibold mb-4"><?php the_title(); ?></h3>
                    <?php if ($tagline) : ?>
                    <p class="text-white mb-3 mt-8 font-normal text-lg">
                        <?php echo wp_kses_post($tagline); ?>
                    </p>
                    <?php endif; ?>
                </div>
            </a>
            <?php
                    $i++; // Increment the counter
                endwhile;
                wp_reset_postdata(); // Restore the original post data
            endif;
            ?>
        </div>
    </div>
</section>

<section class="bg-[#f9f9f6] py-20 px-6 md:px-20">
    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8 items-stretch">

        <!-- 2/3 Column -->
        <div class="md:col-span-2 bg-white rounded border border-[#DFDAD4] p-8 shadow-sm flex flex-col">
            <div class="text-green-600 text-7xl mb-4">“</div>
            <p class="text-3xl text-gray-800 font-medium flex-grow max-w-xl">
                We needed more than a vendor. Piedmont Global showed up with strategy, execution, and results.
            </p>
            <div class="mt-6">
                <p class="font-semibold text-gray-900">Healthcare Network Director</p>
                <p class="text-gray-600">Midwest U.S.</p>
            </div>
        </div>

        <!-- 1/3 Column -->
        <div class="bg-white rounded border border-[#DFDAD4] overflow-hidden shadow-sm">
            <img src=" /wp-content/uploads/Rectangle-21027.png" alt="Team discussing" class="w-full h-48 object-cover">
            <div class="py-6 px-8">
                <p class="text-6xl font-bold text-gray-900 mb-4">56%</p>

                <p class="text-gray-700 mb-4 text-lg max-w-xs">
                    Reduction in turnaround time for high-volume, high-stakes translation projects.
                </p>
                <a href="#"
                    class="inline-flex items-center mt-10 text-base font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300"
                    data-aos="fade-left" data-aos-delay="100">
                    View Case Study <span class="ml-1 text-lg">→</span>
                </a>
            </div>
        </div>

    </div>
</section>

<section class="h-[200px] bg-repeat-x bg-top pb-10 bg-[#F9F8F6]"
    style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/icons/pattern-2.svg' ); ?>')">
</section>

<section class="bg-[#F7F7F5] py-20 px-10 md:px-0">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full mb-20 gap-6">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 max-w-2xl" data-aos="fade-right">
                Solutions built for your moment and your mission
            </h2>
            <a href="#"
                class="inline-flex items-center text-lg font-medium border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300"
                data-aos="fade-left" data-aos-delay="100">
                Explore full capabilities <span class="ml-1 text-lg">→</span>
            </a>
        </div>

        <!-- Solutions Grid -->
        <div class="grid md:grid-cols-3 gap-12 max-w-7xl mx-auto">
            <?php
            $args = array(
                'post_type'      => 'solutions',
                'posts_per_page' => 6,
            );
            $solutions_query = new WP_Query($args);

            if ($solutions_query->have_posts()) :
                $delay = 0;
                while ($solutions_query->have_posts()) : $solutions_query->the_post();
                    $tagline = get_field('solution_tagline');
                    $image = get_field('solution_featured_image');
                    $image_url = is_array($image) && isset($image['url']) ? $image['url'] : '/wp-content/uploads/Rectangle-21027.png';
            ?>

            <!-- Individual Solution Card -->
            <a href="<?php the_permalink(); ?>"
                class="group relative bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden flex flex-col transform transition-all duration-500 hover:-translate-y-1 hover:shadow-sm  focus:outline-none focus:ring-4 focus:ring-[#D16555] focus:ring-offset-2"
                data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" data-aos-duration="600"
                aria-label="Learn more about <?php the_title_attribute(); ?>">

                <!-- Card Image -->
                <div class="overflow-hidden">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>"
                        class="w-full h-60 object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                </div>

                <!-- Card Content -->
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2"><?php the_title(); ?></h3>
                    <div class="text-gray-700 mb-6 text-lg flex-1">
                        <?php echo wp_kses_post($tagline); ?>
                    </div>
                    <div class="h-6 md:h-20"></div>

                    <!-- Learn More Indicator -->
                    <div
                        class="flex items-center mt-auto text-sm font-semibold text-gray-900 transition-colors duration-300 group-hover:text-[#D16555]">
                        Learn more
                        <span class="ml-2 text-lg transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="h-0.5 w-8 mt-1 bg-[#D16555] transition-all duration-300 group-hover:w-24"></div>
                </div>
            </a>

            <?php
                $delay += 100;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>





<?php
get_template_part( 'components/common/cta' ); 
get_footer(); 
?>