    <?php
    /**
     * Template Name: About Us
     * Description: 
     */
    get_header();
    ?>
    <header class="shadow-sm relative bg-cover bg-no-repeat bg-bottom" role="banner"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/icons/3.svg'); ?>');">
        <div class="bg-[#1F3131] pt-6 pb-8 md:pt-8 md:pb-12">
            <nav aria-label="Primary desktop navigation" class="hidden md:block">
                <?php get_template_part('components/navigation/desktop'); ?>
            </nav>
            <nav aria-label="Primary mobile navigation" class="md:hidden">
                <?php get_template_part('components/navigation/mobile'); ?>
            </nav>
        </div>

        <div class="relative">
            <!-- Content container -->
            <div class="relative z-10 flex items-center">
                <div class="max-w-6xl mx-auto w-full px-6 md:px-10 lg:px-0 text-white">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-10 items-center lg:mt-6 lg:mb-48">
                        <!-- Row 1 -->
                        <div>
                            <h1 class="text-3xl lg:text-6xl font-bold leading-tight" data-aos="fade-up" data-aos-delay="130">
                                Communication is not <span class="text-[#D16555]">just</span> about language
                            </h1>
                        </div>
                        <div class="flex justify-center">
                            <img src="http://pg.local/wp-content/uploads/Group-1000002996.png" alt="Illustration"
                                class=" object-cover w-full h-auto" data-aos="fade-up" data-aos-delay="160">
                        </div>
                        <!-- Row 2 -->
                        <div class="flex justify-center">
                            <img src="http://pg.local/wp-content/uploads/Group-1000002996.png" alt="Illustration"
                                class=" object-cover w-full h-auto">
                        </div>
                        <div>
                            <h1 class="text-3xl lg:text-6xl font-bold leading-tight" data-aos="fade-up" data-aos-delay="180">
                                It’s about <span class="text-[#D16555]">systems, trust,</span> and <span class="text-[#D16555]">shared</span> understanding.
                            </h1>
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
                    <h2 class="text-3xl sm:text-5xl md:text-6xl font-bold">From interpreter to industry-shaping leader</h2>
                </div>
                <div>
                    <p class=" text-lg lg:text-xl font-normal">
                        In 2013, Mohamed Hussein, a first-generation Somali American and seasoned interpreter, founded
                        Piedmont Global with a simple but powerful idea: Communication isn’t just about language. It’s about
                        systems, trust, and shared understanding.
                    </p>
                    <p class="text-lg lg:text-xl  mt-6 md:mt-8 font-normal">
                        What began as a one-person operation built on lived experience and insight has grown into a trusted
                        partner for some of the world’s most complex and mission-driven organizations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-12 md:pb-10 bg-[#F9F8F6]">
    <div class="max-w-7xl mx-auto w-full px-6 md:px-10 lg:px-0 text-black">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-start">
        
        <!-- Sticky Content -->
        <div class="relative">
            <div class="sticky top-24">
            <p class="text-lg lg:text-xl font-normal">
                Piedmont Global is a Strategic Globalization Organization (SGO) integrating cultural fluency,
                strategic insight, and custom technology to help clients scale with speed, navigate complexity, and
                operate seamlessly across cultures, markets, and systems.
            </p>
            <p class="text-lg lg:text-xl mt-6 md:mt-8 font-normal">
                Whether you’re expanding internationally or serving diverse communities at home, we help you build
                the infrastructure for lasting, measurable impact.
            </p>
            </div>
        </div>

        <!-- Scrollable Image -->
        <div>
            <img src="http://pg.local/wp-content/uploads/iStock-1454186321-3.png" 
                alt="Globalization illustration" 
                class="shadow-md object-cover w-full max-h-[500px] sm:max-h-[500px]" 
                loading="lazy" decoding="async">
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
                <div>
                    <img src="http://pg.local/wp-content/uploads/iStock-1454186321-1.webp" alt="Illustration"
                        class="rounded-lg shadow-md object-cover object-top-[-30px] w-full max-h-[300px] lg:max-h-[500px]">
                </div>
                <!-- Row 1 -->
                <div>
                    <p class="text-lg font-medium text-gray-700 mb-6">What We Deliver</p>

                    <h2 class="text-3xl md:text-5xl max-w-md font-bold">We help
                        organizations
                        lead and grow — globally, fluently,
                        and confidently.</h2>

                </div>

            </div>
        </div>
    </section>

    <section class="pb-12 md:pb-20 px-6 lg:px-0 bg-[#F9F8F6]">
        <p class="text-lg font-medium text-center text-[#F9F8F6] mb-6">Our Solutions Create</p>

        <div class="aboutus-carousel owl-carousel">
            <!-- Card 1 -->
            <div class="group bg-[#006155]  p-6 text-white flex flex-col items-start 
                transition-all duration-500 ease-out 
                hover:-translate-y-2  hover:bg-[#037a68] 
                " data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="mb-6" aria-hidden="true">
                    <img src="http://pg.local/wp-content/uploads/Union.png" alt=""
                        class="w-8 h-8 object-contain transition-transform duration-500 group-hover:scale-110">
                </div>

                <h3 class="text-2xl font-semibold mb-4">Scalable operations in new markets</h3>

                <div class="h-48" aria-hidden="true"></div>
                <p class="text-base opacity-90 transition-opacity duration-500 group-hover:opacity-100">
                    so you’re built for growth, not just expansion
                </p>
            </div>

            <!-- Add more cards here -->
        </div>
    </section>

    <section style="background: linear-gradient(to bottom, #F9F8F6 0%, #F7F7F5 50%, #98C44180 100%);"
        aria-labelledby="case-study-title">
        <div class="text-center py-40 max-w-2xl mx-auto">
            <p class="text-lg font-medium text-center text-gray-700 mb-6">Our Solutions Create</p>
            <p class="text-xl md:text-5xl font-bold">This is Strategic Globalization—done from the inside out.</p>
        </div>
    </section>
    <section class="bg-[#1F3131] py-24 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="text-5xl font-bold text-white mb-2">Our Values</h2>
                <p class="text-gray-300 mt-4 text-lg max-w-2xl mx-auto">
                    These aren’t just words on a wall at HQ; they’re how we show up for our clients, colleagues, and
                    communities.
                </p>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Left Tall Image with Content (spans 2 rows) -->
                <div class="md:row-span-2 relative overflow-hidden shadow-lg rounded-[4px] h-96 md:h-auto"
                    style="background-image: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158'); background-size: cover; background-position: center;">
                    <div class="absolute inset-0 bg-black/30 rounded-[4px]"></div>
                    <div class="relative z-10 flex flex-col justify-end h-full w-[65%] ">
                        <div class="bg-[#006155] px-8 py-8 text-white shadow-md">
                            <h3 class="text-2xl font-bold mb-6">Respect</h3>
                            <p class="text-base leading-relaxed">We operate with professionalism, honesty, and care.</p>
                        </div>
                    </div>
                </div>

                <!-- Responsibility Card -->
                <div class="bg-[#DFDAD4] p-8 flex flex-col justify-center text-black shadow-lg rounded-[4px]  min-h-48">
                    <h3 class="text-2xl font-bold mb-6">Responsibility</h3>
                    <p class="text-base leading-relaxed">We own outcomes and lead by example.</p>
                </div>

                <!-- Top Right Image -->
                <div class="relative overflow-hidden shadow-lg  border-white rounded-[4px] min-h-48">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df" alt="Team collaboration"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-black/10 rounded-2xl"></div>
                </div>

                <!-- Bottom Right Image -->
                <div class="relative overflow-hidden shadow-lg rounded-[4px] min-h-48">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" alt="Team meeting"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-black/10 rounded-2xl"></div>
                </div>

                <!-- Integrity Card -->
                <div class="bg-[#5B3FBF] p-8 flex flex-col justify-center text-white shadow-lg rounded-[4px] min-h-48">
                    <h3 class="text-2xl font-bold mb-6">Integrity</h3>
                    <p class="text-base leading-relaxed">We act with transparency and uphold our values consistently.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-20 gap-8 max-w-7xl mx-auto py-16 lg:py-24">
    <!-- 30%: Sticky Title -->
    <div class="lg:col-span-6">
        <div class="lg:sticky lg:top-24">
        <p class="text-3xl md:text-5xl font-bold leading-tight">
            From Startup to Strategic Partner
        </p>
        </div>
    </div>

    <!-- 25%: Vertical Timeline -->
    <div class="lg:col-span-5 relative flex justify-center hidden lg:flex">
        <!-- Vertical line -->
        <div class="w-px bg-gray-300 h-full"></div>

        <!-- Timeline dots -->
        <div class="absolute left-1/2 top-1/4 w-3 h-3 bg-purple-800 rounded-full -translate-x-1/2"></div>
        <div class="absolute left-1/2 top-1/2 w-3 h-3 bg-purple-800 rounded-full -translate-x-1/2"></div>
        <div class="absolute left-1/2 top-3/4 w-3 h-3 bg-purple-800 rounded-full -translate-x-1/2"></div>
    </div>

    <!-- 45%: Timeline Cards -->
    <div class="lg:col-span-9 space-y-24">
        <!-- Card 1 -->
        <div class="relative">
        <!-- Arrow pointing to card -->
        <div
            class="hidden lg:block absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-[12px] border-t-transparent border-b-[12px] border-b-transparent border-r-[16px] border-r-purple-800">
        </div>

        <div
            class="bg-purple-800 text-white p-6 md:p-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
            <h3 class="text-xl md:text-2xl font-bold mb-3">5 acquisitions</h3>
            <p class="text-purple-100 text-base md:text-lg">Expanding capability and reach</p>
        </div>
        </div>

        <!-- Card 2 -->
        <div class="relative">
        <div
            class="hidden lg:block absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-[12px] border-t-transparent border-b-[12px] border-b-transparent border-r-[16px] border-r-purple-800">
        </div>

        <div
            class="bg-purple-800 text-white p-6 md:p-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
            <h3 class="text-xl md:text-2xl font-bold mb-3">Inc. 5000</h3>
            <p class="text-purple-100 text-base md:text-lg">Fastest Growing Company — 3 years running</p>
        </div>
        </div>

        <!-- Card 3 -->
        <div class="relative">
        <div
            class="hidden lg:block absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-[12px] border-t-transparent border-b-[12px] border-b-transparent border-r-[16px] border-r-purple-800">
        </div>

        <div
            class="bg-purple-800 text-white p-6 md:p-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
            <h3 class="text-xl md:text-2xl font-bold mb-3">Fortune 50 Global 100</h3>
            <p class="text-purple-100 text-base md:text-lg">Recognized for impact & growth</p>
        </div>
        </div>
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