<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PiedmontGlobal
 */

get_header();
?>
<header class="relative w-full text-[#F9F8F6] overflow-hidden" style="background: linear-gradient(0deg, var(--Primary-Background, #1F3131), var(--Primary-Background, #1F3131)),
linear-gradient(1.48deg, rgba(0, 97, 85, 0) 72.24%, #006155 135.34%);
">
    <?php get_template_part('components/navigation/desktop'); ?>
    <?php get_template_part('components/navigation/mobile'); ?>

    <div class="w-full pt-[30%] lg:pt-[5%] px-6 lg:px-0 relative z-20 pb-10 lg:pb-60">
        <div class="text-start gap-y-4 max-w-7xl mx-auto">
            <h2 class="text-4xl py-5  md:text-5xl max-w-4xl font-extrabold  leading-[98%]">
                <?php the_title(); ?>
            </h2>

            <div class="text-[#F9F8F6] text-base font-light"><?php echo get_the_date(); ?></div>

            <div class="flex items-center gap-4 mt-10">
                <?php if ($image = get_field('author_image')): ?>
                <img src="<?php echo esc_url($image); ?>" alt="Profile"
                    class="w-[60px] h-[60px] object-cover object-center">
                <?php endif; ?>

                <div>
                    <?php if ($name = get_field('author_name')): ?>
                    <div class="text-[#F9F8F6] text-base font-bold">
                        <?php echo esc_html($name); ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($designation = get_field('author_designation')): ?>
                    <div class="text-[#F9F8F6] text-base font-light">
                        <?php echo esc_html($designation); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</header>


<section class=" lg:py-0 py-20">
    <div class="max-w-7xl mx-auto px-8 lg:px-0">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
            class="w-full h-auto lg:h-[600px] relative z-10  mt-0 md:-mt-48 object-cover object-center">
    </div>
</section>

<section class="py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-0">
        <?php 
      $content = get_post_field('post_content', get_the_ID());
      $word_count = str_word_count( wp_strip_all_tags( $content ) );
      $min_words_for_toc = 500; 
      
      // Check if content has headings (h2-h6) for TOC
      $has_headings = preg_match('/<h([2-6])(.*?)>(.*?)<\/h[2-6]>/', $content);
      $has_toc = ($word_count >= $min_words_for_toc && $has_headings);
    ?>

        <div class="grid grid-cols-1 <?php echo $has_toc ? 'lg:grid-cols-3 gap-12 lg:gap-20' : ''; ?>">

            <!-- TOC -->
            <?php if ($has_toc): ?>
            <aside class="lg:col-span-1 lg:sticky lg:top-32 self-start order-1 lg:order-1">
                <div class="table-of-contents bg-white p-6">
                    <?php 
                    // Generate TOC if not already generated
                    if (empty($GLOBALS['pg_toc'])) {
                        pg_generate_toc($content);
                    }
                    echo $GLOBALS['pg_toc']; 
                    ?>
                </div>
            </aside>
            <?php endif; ?>

            <!-- Blog Content -->
            <article
                class="<?php echo $has_toc ? 'lg:col-span-2' : 'col-span-1'; ?> prose prose-lg max-w-none text-black order-2 lg:order-2">

                <?php the_content(); ?>
            </article>

        </div>
    </div>
</section>


<section class="pb-40 pt-20"
    style="background: linear-gradient(to bottom, #F7F7F5 0%, #F7F7F5 70%, #98C44180 85%, #00615580 100%);">

    <div class="max-w-3xl mx-auto px-8 lg:px-0 text-center">
        <h2 class="text-3xl lg:text-5xl font-bold text-black mb-6">
            Ready to move from translation to transformation?
        </h2>
        <a href="/contact"
            class="inline-block bg-[#98C441] text-black px-6 py-3 font-bold text-base lg:text-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#98C441] focus:ring-offset-2 focus:ring-offset-[#1F311]">
            Connect with our team
        </a>
    </div>
</section>


<style>
html {
    scroll-behavior: smooth;
}

/* Account for sticky header when scrolling to headings */
h2[id^="toc-"], h3[id^="toc-"], h4[id^="toc-"], h5[id^="toc-"], h6[id^="toc-"] {
    scroll-margin-top: 120px; /* Desktop - increased for better visibility */
}

@media (max-width: 1023px) {
    h2[id^="toc-"], h3[id^="toc-"], h4[id^="toc-"], h5[id^="toc-"], h6[id^="toc-"] {
        scroll-margin-top: 140px; /* Mobile - increased for better visibility */
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const links = document.querySelectorAll(".toc-link");
    const sections = Array.from(links).map(link => {
        const id = link.getAttribute("href");
        return document.querySelector(id);
    });
    
    // Debug: Log TOC elements found
    console.log('TOC Links found:', links.length);
    console.log('TOC Sections found:', sections.length);

    function onScroll() {
        let currentIndex = 0;
        // Account for sticky header - use responsive offset
        const headerOffset = window.innerWidth >= 1024 ? 120 : 140; // Increased values for better visibility
        
        sections.forEach((section, i) => {
            if (section && section.offsetTop <= window.scrollY + headerOffset) {
                currentIndex = i;
            }
        });

        links.forEach(link => link.classList.remove("font-bold"));
        if (links[currentIndex]) {
            links[currentIndex].classList.add("font-bold");
        }
    }

    // Also handle window resize to recalculate on orientation change
    window.addEventListener('resize', onScroll);

    window.addEventListener("scroll", onScroll);
    onScroll();
});
</script>
<?php
get_footer();