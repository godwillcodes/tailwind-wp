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
                    class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center px-6
        opacity-0 group-hover:opacity-100 transition-all duration-100 ease-out
        bg-[linear-gradient(180deg,_rgba(152,196,65,0)_46.15%,_rgba(152,196,65,0.5)_80%,_rgba(0,97,85,0.5)_100%)] scale-95 group-hover:scale-100">

                    <a href="#"
                        class="text-xl md:text-2xl  px-6 md:px-20 font-semibold inline-flex items-center gap-2 text-black mb-6 transition-transform duration-500 ease-in-out group-hover:translate-y-1">
                        Explore our Approach
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-12 w-12 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-12 w-12 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
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
                        Multilingual communication that feels like home wherever you appear. We help you build trust and
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
                <img src=" /wp-content/uploads/Rectangle-21027.png" alt="Team collaboration"
                    class=" h-full w-full object-cover rounded-[6px] p-10 md:p-20 " />
            </div>
        </div>
    </div>


   




    </div>



</section>


<section class="bg-[#1F3131] text-white py-20 px-10 md:px-0 ">

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
            <?php for ($i = 0; $i < 9; $i++) { ?>
            <div class="bg-[#006155] text-black rounded-[4px] shadow-md p-10 flex flex-col justify-between"
                data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                <img src=" /wp-content/uploads/Union.png" class="mb-6 h-16 w-16" alt="">
                <h3 class="text-xl text-white font-semibold mb-4">Industry <?= $i + 1 ?></h3>
                <p class="text-white mb-3 mt-8 font-normal text-lg">
                    Tailored solutions that understand your unique challenges and opportunities.
                </p>
            </div>
            <?php } ?>

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
            <img src=" /wp-content/uploads/Rectangle-21027.png" alt="Team discussing"
                class="w-full h-48 object-cover">
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

<section class="bg-[#F7F7F5] py-20  px-10 md:px-0">

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


        <div class="grid md:grid-cols-3 gap-12 max-w-7xl mx-auto">

            <?php for ($i = 0; $i < 6; $i++) { ?>
            <!-- Card 1 -->
            <div class="bg-white rounded border shadow-sm overflow-hidden flex flex-col">
                <img src=" /wp-content/uploads/Rectangle-21027.png" alt="Translation"
                    class="w-full h-60 object-cover">
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2">Translation</h3>
                    <p class="text-gray-700 mb-6 text-lg flex-1">Accurate, fast, and secure, in over 200 languages</p>
                    <a href="#"
                        class="inline-flex items-center gap-3 mt-12 text-sm font-semibold text-gray-900 hover:underline">
                        Learn more
                        <span class="ml-1 text-lg">→</span>
                    </a>
                    <div class="h-0.5 w-24 mt-1 bg-[#D16555]"></div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>





</section>




<?php
get_template_part( 'components/common/cta' ); 
get_footer(); 
?>