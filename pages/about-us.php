<?php
/**
 * Template Name: About Us
 * Description: 
 */
get_header();
?>
<header class="shadow-sm relative bg-cover bg-no-repeat bg-bottom" role="banner"
    style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/icons/3.svg'); ?>');">
    <div class="bg-[#1F3131] pt-4 sm:pt-6 pb-6 sm:pb-8 md:pt-8 md:pb-12">
        <nav aria-label="Primary desktop navigation" class="hidden md:block">
            <?php get_template_part('components/navigation/desktop'); ?>
        </nav>
        <nav aria-label="Primary mobile navigation" class="block md:hidden">
            <?php get_template_part('components/navigation/mobile'); ?>
        </nav>
    </div>

    <div class="relative">
        <div class="relative z-10 flex items-center">
            <div class="max-w-6xl mx-auto w-full px-4 sm:px-6 md:px-10 lg:px-0 text-white py-32 lg:py-32">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10 items-center about-header lg:mt-6 lg:mb-48">
                    <div>
                        <div class="text-3xl  lg:text-6xl font-bold leading-tight">
                            <?php echo wp_kses_post(get_field('primary_page_title')); ?>
                        </div>
                    </div>
                    <div class="hidden lg:flex justify-center">
                        <?php if (get_field('primary_page_image')) : ?>
                        <img src="<?php the_field('primary_page_image'); ?>"
                            class="object-cover w-full h-40 sm:h-48 md:h-[200px] object-top max-w-full" />
                        <?php endif; ?>
                    </div>

                    <div class="hidden lg:flex justify-center">
                        <?php if (get_field('secondary_page_image')) : ?>
                        <img src="<?php the_field('secondary_page_image'); ?>"
                            class="object-cover w-full h-40 sm:h-48 md:h-[200px] object-top max-w-full" />
                        <?php endif; ?>
                    </div>
                    <div>
                        <div class="text-3xl lg:text-6xl font-bold leading-tight">
                            <?php echo wp_kses_post(get_field('secondary_page_title')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<section class="py-12 md:py-20 bg-[#F9F8F6]">
    <div class="max-w-7xl mx-auto w-full px-6 md:px-10 lg:px-0 text-[#1F3131]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center">
            <!-- Row 1 -->
            <div>
                <h2 class="text-3xl sm:text-5xl md:text-6xl font-bold" data-aos="fade-up" data-aos-duration="700"
                    data-aos-easing="ease-out-cubic">
                    <?php echo wp_kses_post(get_field('introduction_title')); ?>
                </h2>
            </div>
            <div class="prose text-lg lg:text-xl font-normal space-y-4" data-aos="fade-down" data-aos-duration="700"
                data-aos-easing="ease-out-cubic">
                <?php echo wp_kses_post(get_field('introduction_content_section_1')); ?>
            </div>
        </div>
    </div>
</section>

<section class="pb-12 md:pb-10 bg-[#F9F8F6]">
    <div class="max-w-7xl mx-auto w-full px-6 md:px-10 lg:px-0 text-black">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-start">

            <!-- Sticky Content -->
            <div class="relative" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="sticky top-24">
                    <div class="prose text-lg lg:text-xl font-normal space-y-4">
                        <?php echo wp_kses_post(get_field('introduction_content_section_2')); ?>
                    </div>
                </div>
            </div>

            <!-- Scrollable Image -->
            <div data-aos="fade-down" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <img src="<?php echo wp_kses_post(get_field('mohameds_image')); ?>" alt="Globalization illustration"
                    class="shadow-md object-cover w-full max-h-[500px] sm:max-h-[500px]" loading="lazy"
                    decoding="async">
            </div>
        </div>
    </div>
</section>

<section class="py-10 lg:py-40 bg-[#F9F8F6]">
    <div class="text-center max-w-4xl mx-auto px-6 md:px-10 lg:px-0">
        <p class="text-lg font-medium text-gray-700 mb-6">Why we exist</p>
        <h1 id="animatedText" class="text-4xl md:text-5xl font-bold"></h1>
    </div>
</section>

<section class="pb-12 md:pb-20 bg-[#F9F8F6]">
    <div class="max-w-7xl mx-auto w-full px-6 md:px-10 lg:px-0 text-black">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 md:gap-32 items-center">
            <div data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <img src="<?php echo wp_kses_post(get_field('call_to_action_image')); ?>" alt="Illustration"
                    class=" shadow-md object-cover object-top-[-30px] w-full max-h-[300px] lg:max-h-[500px]">
            </div>
            <!-- Row 1 -->
            <div data-aos="fade-down" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <p class="text-lg font-medium text-gray-700 mb-6">
                    <?php echo wp_kses_post(get_field('call_to_action_subtitle')); ?></p>

                <h2 class="text-3xl md:text-5xl max-w-md font-bold">
                    <?php echo wp_kses_post(get_field('call_to_action_title')); ?></h2>

            </div>

        </div>
    </div>
</section>

<section class="pb-12 md:pb-20 px-6 lg:px-0 bg-[#F9F8F6]">
    <p class="text-xl font-medium text-center text-black mb-6">Our Solutions Create</p>

    <!-- //repeatable cards -->
    <?php if( have_rows('green_benefits_card_repeater') ): ?>
    <div class="aboutus-carousel owl-carousel">
        <?php while( have_rows('green_benefits_card_repeater') ): the_row(); ?>
        <?php 
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            ?>

        <!-- Card -->
        <div class="group bg-[#006155] p-6 text-[#F9F8F6] flex flex-col items-start 
                    transition-all duration-500 ease-out 
                    hover:-translate-y-2 hover:bg-[#037a68] 
                    " data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-out-cubic">
            <div class="mb-6" aria-hidden="true">
                <?php if($icon): ?>
                <img src="<?php echo esc_url($icon); ?>" alt=""
                    class="w-8 h-8 object-contain transition-transform duration-500 group-hover:scale-110">
                <?php endif; ?>
            </div>

            <?php if($title): ?>
            <h3 class="text-2xl font-semibold mb-4"><?php echo esc_html($title); ?></h3>
            <?php endif; ?>

            <div class="h-48" aria-hidden="true"></div>
            <?php if($description): ?>
            <p class="text-base opacity-90 transition-opacity duration-500 group-hover:opacity-100">
                <?php echo esc_html($description); ?>
            </p>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>

<section style="background: linear-gradient(to bottom, #F9F8F6 0%, #F7F7F5 50%, #98C44180 100%);"
    aria-labelledby="case-study-title">
    <div class="text-center py-40 max-w-2xl mx-auto">
        <p class="text-lg font-medium text-center text-gray-700 mb-6">
            <?php echo wp_kses_post(get_field('gradient_subtitle')); ?></p>
        <p class="text-xl md:text-5xl font-bold"><?php echo wp_kses_post(get_field('gradient_title')); ?></p>
    </div>
</section>

<section class="bg-[#1F3131] py-24 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">
        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-5xl font-bold text-white mb-2"><?php echo wp_kses_post(get_field('bentobox_title')); ?></h2>
            <div class="text-gray-300 mt-4 text-lg max-w-2xl mx-auto">
                <?php echo wp_kses_post(get_field('bentobox_description')); ?>
            </div>
        </div>

        <!-- Grid -->
        <?php if( have_rows('bentobox_repeater') ): ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php 
        $counter = 0;
        while ( have_rows('bentobox_repeater') ) : the_row();
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $image = get_sub_field('image'); // expected array with url
            $image_url = $image ? (is_array($image) && isset($image['url']) ? $image['url'] : $image) : '';

            if ( $counter % 3 == 0 ) : 
                // First item: Tall card with background image, overlay, text block
                ?>
            <div class="md:row-span-2 relative overflow-hidden shadow-lg rounded-[4px] h-96 md:h-auto"
                style="background-image: url('<?php echo esc_url($image_url); ?>'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-black/30 rounded-[4px]"></div>
                <div class="relative z-10 flex flex-col justify-end h-full w-[65%]">
                    <div class="bg-[#006155] p-8 flex flex-col justify-between text-[#F9F8F6] shadow-lg  min-h-48">
                        <h3 class="text-2xl font-bold"><?php echo esc_html($title); ?></h3>
                        <p class="text-base leading-relaxed"><?php echo esc_html($description); ?></p>
                    </div>

                </div>
            </div>
            <?php elseif ( $counter % 3 == 1 ): 
                // Second item: Card (text) on left, image block on right; actually, for grid formatting, output card here
                ?>
            <div class="bg-[#AB9DBA] p-8 flex flex-col justify-between text-white shadow-lg rounded-[4px] min-h-48">
                <h3 class="text-2xl font-bold"><?php echo esc_html($title); ?></h3>
                <p class="text-base leading-relaxed"><?php echo esc_html($description); ?></p>
            </div>

            <div class="relative overflow-hidden shadow-lg rounded-[4px] min-h-48">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>"
                    class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                <div class="absolute inset-0 bg-black/10 rounded-2xl"></div>
            </div>

            <?php elseif ( $counter % 3 == 2 ):
                // Third item: Image block
                ?>

            <div class="relative overflow-hidden shadow-lg rounded-[4px] min-h-48">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>"
                    class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                <div class="absolute inset-0 bg-black/10 rounded-2xl"></div>
            </div>
            <div class="bg-[#550061] p-8 flex flex-col justify-between text-white shadow-lg rounded-[4px] min-h-48">
                <h3 class="text-2xl font-bold"><?php echo esc_html($title); ?></h3>
                <p class="text-base leading-relaxed"><?php echo esc_html($description); ?></p>
            </div>

            <?php endif; ?>
            <?php 
            $counter++;
        endwhile;
        ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="grid grid-cols-1 lg:grid-cols-20 gap-8 max-w-7xl mx-auto py-16 lg:py-24 px-6 lg:px-0">
    <!-- 30%: Sticky Title -->
    <div class="lg:col-span-6">
        <div class="lg:sticky lg:top-24">
            <p class="text-3xl md:text-5xl font-bold leading-tight">From Startup to Strategic Partner</p>
        </div>
    </div>

    <!-- 25%: Vertical Timeline -->
    <div class="lg:col-span-5">
        <div class="lg:sticky lg:top-32">
            <p class="text-base text-left lg:text-center mx-auto font-bold leading-tight mb-8">Milestones along the way
            </p>

            <!-- Timeline bar -->
            <div class="flex justify-center hidden lg:flex">
                <div class="relative w-px bg-gray-300" style="height: 215px;">
                    <?php 
                        if (have_rows('timeline_repeater')):
                            $total_items = count(get_field('timeline_repeater'));
                            $count = 0;
                            while (have_rows('timeline_repeater')): the_row();
                                $count++;
                                $top_percent = $total_items > 1 ? (($count - 1) * 100 / ($total_items - 1)) : 0;
                        ?>
                    <div class="absolute left-1/2 w-3 h-3 rounded-full -translate-x-1/2"
                        style="top:<?= $top_percent ?>%;background: linear-gradient(180deg, #006155 0%, #98C441 100%);"></div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>


    <!-- 45%: Timeline Cards -->
    <div class="lg:col-span-9 space-y-24">
        <?php if (have_rows('timeline_repeater')):
            while (have_rows('timeline_repeater')): the_row();
                $title       = get_sub_field('title');
                $description = get_sub_field('description');
                $icon        = get_sub_field('icon'); // icon url or svg
            ?>
        <div class="relative">
            <div class="hidden lg:block absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-[12px] border-t-transparent border-b-[12px] border-b-transparent border-r-[16px] border-r-[#550061] text-[#550061]"
                style="
                color: #550061;
            "></div>
            <div
                class="bg-[#550061] text-[#F9F8F6] p-6 md:p-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col gap-4">
                <?php if ($title): ?>
                <h3 class="text-xl md:text-2xl font-bold"><?= esc_html($title); ?></h3>
                <?php endif; ?>
                <?php if ($description): ?>
                <p class="text-[#F9F8F6] text-base md:text-lg"><?= esc_html($description); ?></p>
                <?php endif; ?>
                <div class="h-12"></div>
                <?php if ($icon): ?>
                <img src="<?= esc_url($icon); ?>" alt="<?= esc_attr($title); ?>" class="w-6 h-6 mt-auto">
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>


<section class="max-w-7xl mx-auto px-6 lg:px-0 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Left Column -->
        <div>
            <?php 
            $images = get_field('affiliations'); // Gallery field returning URLs
            if ($images): 
                $col1 = [];
                $col2 = [];
                foreach ($images as $i => $image) {
                    if ($i % 2 == 0) {
                        $col1[] = $image;
                    } else {
                        $col2[] = $image;
                    }
                }
            ?>
            <div class="grid grid-cols-2 gap-6 items-center">
                <!-- Column 1 -->
                <div class="lg:space-y-16 space-y-6 lg:pt-24">
                    <?php foreach ($col1 as $img): ?>
                    <img src="<?= esc_url($img); ?>" alt=""
                        class=" h-[70px] w-[70px] lg:h-[150px] lg:w-[150px] object-contain transition duration-300 ease-in-out grayscale hover:grayscale-0">
                    <?php endforeach; ?>
                </div>

                <!-- Column 2 -->
                <div class="lg:space-y-16 space-y-6">
                    <?php foreach ($col2 as $img): ?>
                    <img src="<?= esc_url($img); ?>" alt=""
                        class="mx-auto h-[70px] w-[70px] lg:h-[150px] lg:w-[150px] object-contain transition duration-300 ease-in-out grayscale hover:grayscale-0">
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <!-- Right Column -->
        <div class="text-start lg:sticky lg:top-32 self-start">
            <p class="text-lg font-medium text-gray-700 mb-6">
                Affiliations & Certifications
            </p>
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                We are a certified minority-owned business and trusted partner for public and private institutions.
            </h2>
            <?php $certifications = get_field('certifications'); ?>

            <div class="flex flex-wrap md:flex-nowrap gap-4 items-center mt-10">
                <?php foreach ($certifications as $cert): ?>
                <img src="<?php echo esc_url($cert); ?>" alt=""
                    class="w-24 h-24 object-contain object-center transition duration-300 ease-in-out grayscale hover:grayscale-0">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="bg-[#1F3131]  pt-20 md:pt-20 px-6 lg:px-0">
    <div class="max-w-xl mx-auto text-center">
        <h2 class=" text-4xl md:text-5xl text-white font-semibold mb-4">Build What’s Next, With a Partner Who Gets It
        </h2>
        <p class="text-white mb-0 mt-4 text-base md:text-[24px]">Whether you're scaling internationally or strengthening
            local services, we help align your strategy with the people you serve.</p>
        <!-- //form goes here -->
    </div>
</section>

<style>
.fade-word {
    opacity: 0.1;
    transition: opacity 1s ease, color 1s ease;
}

.fade-word.visible {
    opacity: 1;
    color: #111827;
    /* Tailwind gray-900 for normal words */
}

.fade-word.highlight.visible {
    color: #D16555;
    /* highlight in soft red */
}

.about-header span {
    color: #D16555 !important;
}
</style>

<script>
const textElement = document.getElementById("animatedText");
const words = "Making cross-cultural operations easier, smarter, and more human.".split(" ");
const highlight = ["easier,", "smarter,", "more", "human."];

function runAnimation() {
    // render all words with low opacity
    textElement.innerHTML = words.map(word => {
        const isHighlight = highlight.includes(word);
        return `<span class="fade-word${isHighlight ? ' highlight' : ''}">${word}</span>`;
    }).join(" ");

    const spans = textElement.querySelectorAll(".fade-word");

    spans.forEach((span, i) => {
        setTimeout(() => {
            span.classList.add("visible");
        }, i * 300);
    });

    // reset after all words + extra delay
    const totalTime = spans.length * 300 + 1500;
    setTimeout(() => {
        spans.forEach(span => span.classList.remove("visible"));
        setTimeout(runAnimation, 500); // restart
    }, totalTime);
}

// start loop
runAnimation();
</script>


<?php
get_footer(); 