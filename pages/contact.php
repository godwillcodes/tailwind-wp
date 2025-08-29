<?php
/**
 * Template Name: Contact
 * Description: 
 */
get_header();
?>
<header class="shadow-sm bg-[#1F3131]" role="banner">
    <div class="bg-[#1F3131] pt-8 pb-12">
        <nav aria-label="Primary desktop navigation">
            <?php get_template_part('components/navigation/desktop'); ?>
        </nav>
        <nav aria-label="Primary mobile navigation">
            <?php get_template_part('components/navigation/mobile'); ?>
        </nav>
    </div>

    <div class="relative h-[300px] md:h-[400px] bg-cover bg-no-repeat bg-right-bottom"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/icons/single-industries.svg'); ?>');">

        <!-- gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#1F3131]/90 via-[#1F3131]/70 to-transparent"
            aria-hidden="true"></div>

        <!-- Content container -->
        <div class="relative z-10 h-full flex items-center">
            <div class="max-w-7xl mx-auto w-full px-10 lg:px-0 pb-4 md:pb-12 lg:pb-12 text-white">

                <h2 class="text-4xl lg:text-5xl font-bold" data-aos="fade-up" data-aos-delay="200">
                    Contact Piedmont Global</h2>
                <p class="text-base lg:text-lg my-4 max-w-2xl" data-aos="fade-up" data-aos-delay="300">
                    Let's build what's next together. Reach out to discuss your needs and discover how we can help you
                    achieve your goals.
                </p>

            </div>
        </div>
    </div>
</header>


<section class="relative w-full bg-white py-24 px-6 md:px-12">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10">

        <!-- Left Column -->
        <div class="sticky top-24 text-black p-10 flex flex-col justify-center rounded-md h-fit order-2 lg:order-1"
            style="background: linear-gradient(144.23deg, rgba(223, 218, 212, 0.3) 13.38%, rgba(152, 196, 65, 0.3) 148.4%);">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">Start Your Strategic Globalization Journey.</h2>
            <p class="text-lg leading-relaxed text-gray-700">
                Expansion doesn’t have to feel complex. At Piedmont Global, we equip you with the people, systems, and
                strategies to move with clarity and land with impact.
            </p>
            <p class="text-lg leading-relaxed mt-6 text-gray-700">
                Whether you’re building cultural fluency, scaling operations, or exploring global growth, our
                consultants are here to guide you. Share your goals, and we’ll reach out within one business day to
                schedule your consultation.
            </p>

            <dl class="mt-8 text-lg text-gray-800">
                <h3 class="font-black text-lg text-primary">Reach out</h3>
                <div class="mt-3">
                    <dt class="sr-only">Phone number</dt>
                    <dd class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-secondary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="ml-3"> <a href="tel:+18778974858" class="hover:text-secondary">+1 877 897
                                4858</a></span>
                    </dd>
                </div>
                <div class="mt-3">
                    <dt class="sr-only">Email</dt>
                    <dd class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-secondary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="ml-3"><a href="mailto:info@piedmontglobal.com"
                                class="hover:text-secondary">info@piedmontglobal.com</a></span>
                    </dd>
                </div>
            </dl>
            <div class="flex py-4 space-x-6 md:order-2 mt-10">
                <a target="_blank" href="https://www.linkedin.com/company/piedmontglobal"
                    class="text-gray-400 hover:text-black">
                    <span class="sr-only">Linkdin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-8 w-8" viewBox="0 0 50 50">
                        <path
                            d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z">
                        </path>
                    </svg>
                </a>
                <a target="_blank" href="https://www.instagram.com/piedmontglobal/"
                    class="text-gray-400 hover:text-black">
                    <span class="sr-only">Instagram</span>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-8 w-8" viewBox="0 0 24 24">
                        <path
                            d="M 8 3 C 5.2 3 3 5.2 3 8 L 3 16 C 3 18.8 5.2 21 8 21 L 16 21 C 18.8 21 21 18.8 21 16 L 21 8 C 21 5.2 18.8 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.7 5 19 6.3 19 8 L 19 16 C 19 17.7 17.7 19 16 19 L 8 19 C 6.3 19 5 17.7 5 16 L 5 8 C 5 6.3 6.3 5 8 5 z M 17 6 C 16.4 6 16 6.4 16 7 C 16 7.6 16.4 8 17 8 C 17.6 8 18 7.6 18 7 C 18 6.4 17.6 6 17 6 z M 12 7 C 9.2 7 7 9.2 7 12 C 7 14.8 9.2 17 12 17 C 14.8 17 17 14.8 17 12 C 17 9.2 14.8 7 12 7 z M 12 9 C 13.7 9 15 10.3 15 12 C 15 13.7 13.7 15 12 15 C 10.3 15 9 13.7 9 12 C 9 10.3 10.3 9 12 9 z">
                        </path>
                    </svg>
                </a>
                <a target="_blank" href="https://www.facebook.com/piedmontglobal"
                    class="text-gray-400 hover:text-black">
                    <span class="sr-only">Facebook</span>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-8 w-8" viewBox="0 0 50 50">
                        <path
                            d="M42,3H8C5.2,3,3,5.2,3,8v34c0,2.8,2.2,5,5,5h34c2.8,0,5-2.2,5-5V8C47,5.2,44.8,3,42,3z M37,19h-2c-2.1,0-3,0.5-3,2v3h5 l-1,5h-4v16h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                        </path>
                    </svg>
                </a>



                <a target="_blank" href="https://x.com/piedmont_global" class="text-gray-400 hover:text-black">
                    <span class="sr-only">Twitter</span>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-8 w-8" viewBox="0 0 50 50">
                        <path
                            d="M 11 4 C 7.134 4 4 7.134 4 11 L 4 39 C 4 42.866 7.134 46 11 46 L 39 46 C 42.866 46 46 42.866 46 39 L 46 11 C 46 7.134 42.866 4 39 4 L 11 4 z M 13.085938 13 L 21.023438 13 L 26.660156 21.009766 L 33.5 13 L 36 13 L 27.789062 22.613281 L 37.914062 37 L 29.978516 37 L 23.4375 27.707031 L 15.5 37 L 13 37 L 22.308594 26.103516 L 13.085938 13 z M 16.914062 15 L 31.021484 35 L 34.085938 35 L 19.978516 15 L 16.914062 15 z">
                        </path>
                    </svg>
                </a>


            </div>
        </div>

        <!-- Right Column -->
        <div class="border border-gray-300 rounded-md p-8 bg-white shadow-sm order-1 lg:order-2"
 data-aos="fade-down">
            <h3 class="text-xl md:text-3xl font-semibold text-gray-900">
                Ready to move forward?<br> Connect with one of our Strategic Globalization Experts
            </h3>
            <div class="mt-10">
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                <script>
                hbspt.forms.create({
                    portalId: "22423917",
                    formId: "31843c1a-e41e-40d8-adca-534050c8a846",
                    region: "na1"
                });
                </script>
            </div>

        </div>
    </div>
</section>

<section class="w-full max-w-7xl mx-auto px-6 md:px-0 pb-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

        <!-- Card -->
        <div
            class="text-black border border-[#F9F8F6] shadow-lg p-6 flex flex-col items-start space-y-4 hover:shadow-xl transition">
            <div class="p-3 rounded-xl">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/building.svg'); ?>"
                    alt="Headquarters" class="h-10 w-10">
            </div>
            <h3 class="font-semibold text-lg">Headquarters</h3>
            <p class="text-base leading-relaxed">1010 N. Glebe RD, STE 450; Arlington, VA 22201</p>
        </div>

        <!-- Card -->
        <div
            class="text-black border border-[#F9F8F6] shadow-lg p-6 flex flex-col items-start space-y-4 hover:shadow-xl transition">
            <div class="p-3 rounded-xl">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/building.svg'); ?>"
                    alt="Minnesota" class="h-10 w-10">
            </div>
            <h3 class="font-semibold text-lg">Minnesota</h3>
            <p class="text-base leading-relaxed">1625 Park AVE; Minneapolis, MN 55404</p>
        </div>

        <!-- Card -->
        <div
            class="text-black border border-[#F9F8F6] shadow-lg p-6 flex flex-col items-start space-y-4 hover:shadow-xl transition">
            <div class="p-3 rounded-xl">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/building.svg'); ?>"
                    alt="Washington" class="h-10 w-10">
            </div>
            <h3 class="font-semibold text-lg">Washington</h3>
            <p class="text-base leading-relaxed">104 S. Freya ST, STE 116; Spokane, WA 99202</p>
        </div>

        <!-- Card -->
        <div
            class="text-black border border-[#F9F8F6] shadow-lg p-6 flex flex-col items-start space-y-4 hover:shadow-xl transition">
            <div class="p-3 rounded-xl">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/building.svg'); ?>"
                    alt="Nairobi" class="h-10 w-10">
            </div>
            <h3 class="font-semibold text-lg">Nairobi</h3>
            <p class="text-base leading-relaxed">The Address, 12th Floor |
                Muthangari Drive (off Waiyaki Way)</p>
        </div>

    </div>
</section>


<section class="bg-white text-white pb-20 px-4">
    <div class="max-w-7xl mx-auto">
        <hr>
        <h2 class="text-3xl  font-semibold mb-12 text-black text-center">What brings you here today?</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div
                class="relative group overflow-hidden rounded shadow-md bg-[#F9F8F6] text-black p-10 flex flex-col h-full">

                <!-- Top content -->
                <div
                    class="relative z-10 text-start group-hover:opacity-0 transition-opacity duration-500 ease-in-out flex-grow">
                    <h3
                        class="text-2xl font-semibold transition-transform duration-500 group-hover:-translate-y-2 max-w-[250px]">
                        Streamline and scale
                    </h3>
                    <p class="text-gray-700 mt-4 transition-opacity duration-500">
                        Simplify vendors, strengthen compliance, and enhance quality
                    </p>
                </div>

                <!-- CTA -->
                <a href="/about"
                    class="inline-flex w-fit items-center gap-1 text-base font-medium mt-20 border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300 relative z-10 group-hover:opacity-0 transition-opacity duration-500">
                    See how we partner <span class="text-lg">→</span>
                </a>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center px-6 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-out bg-gradient-to-b from-transparent via-[#98C44180] to-[#00615580] scale-95 group-hover:scale-100">
                    <a href="/about"
                        class="text-xl md:text-2xl px-6 md:px-20 font-semibold inline-flex items-center gap-2 text-black mb-6 transition-transform duration-500 ease-in-out group-hover:translate-y-1">
                        See how we partner
                    </a>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-side.svg'); ?>"
                        alt="Arrow Icon"
                        class="h-10 w-10 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110">
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="relative group overflow-hidden rounded shadow-md bg-[#F9F8F6] text-black p-10 flex flex-col h-full">

                <!-- Top content -->
                <div
                    class="relative z-10 text-start group-hover:opacity-0 transition-opacity duration-500 ease-in-out flex-grow">
                    <h3
                        class="text-2xl font-semibold transition-transform duration-500 group-hover:-translate-y-2 max-w-[250px]">
                        Plan for global growth
                    </h3>
                    <p class="text-gray-700 mt-4 transition-opacity duration-500">
                        Expand with clarity, cultural fluency, and scalable solutions
                    </p>
                </div>

                <!-- CTA -->
                <a href="/solutions"
                    class="inline-flex w-fit items-center gap-1 text-base font-medium mt-20 border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300 relative z-10 group-hover:opacity-0 transition-opacity duration-500">
                    Explore our approach <span class="text-lg">→</span>
                </a>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center px-6 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-out bg-gradient-to-b from-transparent via-[#98C44180] to-[#00615580] scale-95 group-hover:scale-100">
                    <a href="/solutions"
                        class="text-xl md:text-2xl px-6 md:px-20 font-semibold inline-flex items-center gap-2 text-black mb-6 transition-transform duration-500 ease-in-out group-hover:translate-y-1">
                        Explore our approach
                    </a>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-side.svg'); ?>"
                        alt="Arrow Icon"
                        class="h-10 w-10 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110">
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="relative group overflow-hidden rounded shadow-md bg-[#F9F8F6] text-black p-10 flex flex-col h-full">

                <!-- Top content -->
                <div
                    class="relative z-10 text-start group-hover:opacity-0 transition-opacity duration-500 ease-in-out flex-grow">
                    <h3
                        class="text-2xl font-semibold transition-transform duration-500 group-hover:-translate-y-2 max-w-[250px]">
                        Enhance workforce and customer experience
                    </h3>
                    <p class="text-gray-700 mt-4 transition-opacity duration-500">
                        Empower teams and engage communities with solutions proven across industries
                    </p>
                </div>

                <!-- CTA -->
                <a href="/industries"
                    class="inline-flex w-fit items-center gap-1 text-base font-medium mt-20 border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300 relative z-10 group-hover:opacity-0 transition-opacity duration-500">
                    Discover how we serve your industry <span class="text-lg">→</span>
                </a>

                <!-- Hover overlay -->
                <div
                    class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center px-6 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-out bg-gradient-to-b from-transparent via-[#98C44180] to-[#00615580] scale-95 group-hover:scale-100">
                    <a href="/industries"
                        class="text-xl md:text-2xl px-6 md:px-20 font-semibold inline-flex items-center gap-2 text-black mb-6 transition-transform duration-500 ease-in-out group-hover:translate-y-1">
                        Discover how we serve your industry
                    </a>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-side.svg'); ?>"
                        alt="Arrow Icon"
                        class="h-10 w-10 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110">
                </div>
            </div>

        </div>


        <!-- Additional CTAs below in 2 columns grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">

            <!-- Government solutions -->
            <div class="bg-[#F9F8F6] text-black rounded-lg p-8 text-start group relative overflow-hidden">
                <div class="relative z-10 transition-opacity duration-500 ease-in-out group-hover:opacity-0">
                    <h3
                        class="text-2xl font-semibold mb-2 transition-transform duration-500 group-hover:-translate-y-2">
                        Government solutions
                    </h3>
                    <p class="text-gray-700 mb-4 transition-opacity duration-500">
                        Secure, compliant, mission-critical support
                    </p>
                    <div class="h-20"></div>
                    <a href="http://piedmontglobalfederal.com" target="_blank"
                        class="inline-flex items-center gap-1 text-base font-medium mt-6 border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300">
                        Visit Piedmont Global Federal <span class="text-lg">→</span>
                    </a>
                </div>
                <div
                    class="absolute inset-0 z-20 flex flex-col items-center justify-center px-6 text-center
                             opacity-0 group-hover:opacity-100 transition-all duration-200 ease-out
                             bg-gradient-to-b from-transparent via-[#98C44180] to-[#00615580] scale-95 group-hover:scale-100">
                    <a href="http://piedmontglobalfederal.com" target="_blank"
                        class="text-xl md:text-2xl max-w-xs mx-auto font-semibold inline-flex items-center gap-2 text-black mb-6 transition-transform duration-500 ease-in-out group-hover:translate-y-1">
                        Visit Piedmont Global Federal
                    </a>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-side.svg'); ?>"
                        alt="Arrow Icon"
                        class="h-10 w-10 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110">
                </div>
            </div>

            <!-- Make smarter decisions -->
            <div class="bg-[#F9F8F6] text-black rounded-lg p-8 text-start group relative overflow-hidden">
                <div class="relative z-10 transition-opacity duration-500 ease-in-out group-hover:opacity-0">
                    <h3
                        class="text-2xl font-semibold mb-2 transition-transform duration-500 group-hover:-translate-y-2">
                        Make smarter decisions
                    </h3>
                    <p class="text-gray-700 mb-4 transition-opacity duration-500">
                        Leverage insights, compliance expertise, and data-driven intelligence for global operations
                    </p>
                    <div class="h-20"></div>
                    <a href="/data-services"
                        class="inline-flex items-center gap-1 text-base font-medium mt-6 border-b-2 border-[#D16555] hover:border-[#D16555] transition-colors duration-300">
                        Explore insights &amp; intelligence <span class="text-lg">→</span>
                    </a>
                </div>
                <div
                    class="absolute inset-0 z-20 flex flex-col items-center justify-center px-6 text-center
                             opacity-0 group-hover:opacity-100 transition-all duration-200 ease-out
                             bg-gradient-to-b from-transparent via-[#98C44180] to-[#00615580] scale-95 group-hover:scale-100">
                    <a href="/data-services"
                        class="text-xl md:text-2xl max-w-xs mx-auto font-semibold inline-flex items-center gap-2 text-black mb-6 transition-transform duration-500 ease-in-out group-hover:translate-y-1">
                        Explore insights &amp; intelligence
                    </a>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-side.svg'); ?>"
                        alt="Arrow Icon"
                        class="h-10 w-10 text-white bg-black p-3 rounded-full transition-transform duration-500 ease-in-out group-hover:scale-110">
                </div>
            </div>

        </div>
    </div>
</section>




<?php
get_footer(); 
?>