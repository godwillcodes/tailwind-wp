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

    <div class="w-full px-6 lg:px-0 relative z-20 py-16 lg:py-40">
        <div class="text-start gap-y-4 max-w-7xl mx-auto">
            <h2 class="text-4xl md:text-5xl max-w-4xl font-extrabold leading-[1.05] mb-6">
                <?php the_title(); ?> Ebook
            </h2>

            <div class="text-[#F9F8F6] text-lg font-light max-w-2xl mb-8">
                <?php the_content(); ?>
            </div>

            <a href="/contact"
                class="inline-flex items-center gap-2 bg-[#98C441] text-[#1F3131] px-4 py-2 mt-4 font-bold text-base shadow-md rounded-0 hover:bg-[#8AB738] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#98C441] focus:ring-offset-[#1F3131] transition-colors duration-200"
                aria-label="Download the ebook - scrolls to download form">
                <span>Schedule a Consultation</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
            </a>
        </div>
    </div>
</header>


<section>
<div class="relative bg-[#F9F8F6] py-20 overflow-hidden">
        <div class="max-w-7xl shadow-sm mx-auto px-6 lg:px-0 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 items-stretch">

                <!-- Left Column: Form -->
                <div id="download-form"
                    class="col-span-1 bg-[#006155] shadow-2xl  p-10 flex flex-col justify-center relative overflow-hidden group">
                    <h3 class="text-3xl font-bold text-white mb-4 max-w-sm">Get Your Free Copy of <?php the_title(); ?> eBook Now</h3>
                    <!-- <p class="text-white mb-2 text-lg">sent on email instantly</p> -->
                    <p class="text-white mb-2 text-lg">Provide your email and receive the eBook instantly delivered straight to your inbox, no waiting, no extra steps required.</p>

                    <?php echo do_shortcode('[forminator_form id="533"]'); ?>
                </div>

                <!-- Right Column: PNG Image with Hover Actions -->
                <div
                    class="col-span-1 relative group bg-white rounded-0 shadow-2xl flex items-center justify-center overflow-hidden">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                        class="w-full h-full max-h-[800px] object-contain drop-shadow-2xl transform transition duration-700 ease-in-out group-hover:scale-105 group-hover:rotate-1 group-hover:drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">
                </div>

            </div>
        </div>
    </div>
</section>



<section class="pb-40 "
    style="background: linear-gradient(to bottom, #F7F7F5 0%, #F7F7F5 70%, #98C44180 85%, #00615580 100%);">
    



    <div class="max-w-3xl mx-auto px-8 lg:px-0 text-center">
        <h2 class="text-3xl lg:text-5xl font-bold text-black mb-6">
            Ready to transform your global communication strategy?
        </h2>
        <p class="text-lg text-gray-700 mb-8">Let our experts help you implement the strategies from this ebook and accelerate your international growth.</p>
        <a href="/contact"
            class="inline-block bg-[#98C441] text-black px-6 py-3 font-bold text-base lg:text-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#98C441] focus:ring-offset-2 focus:ring-offset-[#1F311]">
            Get Your Free Consultation
        </a>
    </div>
</section>



<style>
 .forminator-label {
    color: #fff;
    font-size: 16px !important;
    font-weight: 700;
}
 .forminator-input {
    background-color: #fff;
    color: #000;
    font-size: 16px;
    border: 1px solid #fff;
    border-radius: 5px;
}

.forminator-design--default .forminator-button-submit {
    background-color: #98C441 !important;
    color: #006155;
    font-size: 16px !important;
    font-weight: 700;
}
 .forminator-submit:hover {
    background-color: #7BA035;
}
</style>


<?php
get_footer();