<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PiedmontGlobal
 */

?>

<footer class="bg-[linear-gradient(to_bottom,_#1F3131_50%,_#006155_100%)] text-white pt-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-12 md:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 pb-12">

            <!-- Column 1 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Solutions</h4>
                <?php
$terms = get_terms(array(
    'taxonomy'   => 'solution',  // your taxonomy slug
    'hide_empty' => true,        // only show terms with posts
    'orderby'    => 'name',
    'order'      => 'ASC',
));

if (!is_wp_error($terms) && !empty($terms)): ?>
    <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
        <?php foreach ($terms as $term): ?>
            <li>
                <a href="<?php echo esc_url(get_term_link($term)); ?>" class="hover:text-white">
                    <?php echo esc_html($term->name); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

            </div>


            <!-- Column 2 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Industries</h4>
                <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
                    <?php
        $industries = new WP_Query([
            'post_type' => 'industry',
            'posts_per_page' => -1, // Get all posts
            'post_status' => 'publish', // Get only published posts
            'orderby' => 'title', // Order by title
            'order' => 'ASC' // In ascending order
        ]);

        if ($industries->have_posts()) :
            while ($industries->have_posts()) : $industries->the_post();
        ?>
                    <li><a href="<?php the_permalink(); ?>" class="hover:text-white"><?php the_title(); ?></a></li>
                    <?php
            endwhile;
            wp_reset_postdata(); // Reset the post data to the main query
        endif;
        ?>
                </ul>
            </div>

            <!-- Column 3 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Products</h4>
                <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
                    <?php
        $menu_items = wp_get_nav_menu_items(6);

        if ($menu_items) {
            foreach ($menu_items as $menu_item) {
                echo '<li><a href="' . esc_url($menu_item->url) . '" class="hover:text-white">' . esc_html($menu_item->title) . '</a></li>';
            }
        }
        ?>
                </ul>
            </div>


            <!-- Column 4 -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Company</h4>
                <ul class="space-y-4 text-base font-normal text-[#F9F8F6]/70">
                    <?php
    $menu_items = wp_get_nav_menu_items(7);

    if ($menu_items) {
        foreach ($menu_items as $menu_item) {
            echo '<li><a href="' . esc_url($menu_item->url) . '" class="hover:text-white">' . esc_html($menu_item->title) . '</a></li>';
        }
    }
    ?>
                </ul>


                <!-- Newsletter -->
                <!-- Newsletter -->
                <div class="col-span-full mt-12">
                    <h5 class="text-lg font-semibold mb-2">Newsletter</h5>
                    <form class="relative w-full max-w-md">
                        <input type="email" placeholder="Your email"
                            class="w-full pr-12 px-3 py-2 bg-transparent border border-[#F9F8F6]/50 rounded-md text-white placeholder:text-[#F9F8F6]/50 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        <button type="submit"
                            class="absolute right-2 top-1/2 -translate-y-1/2 text-[#F9F8F6] hover:text-white"
                            aria-label="Subscribe">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Logo, Address, Footer Image -->
    <div class="flex flex-col md:flex-row items-start justify-between max-w-7xl mx-auto px-10 md:px-5 pt-8 gap-8">
        <!-- Logo and Address -->
        <div class="flex flex-col space-y-8 items-start">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $home_url = esc_url(home_url('/'));
            if ($custom_logo_id) {
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            echo '<a href="' . $home_url . '" aria-label="Homepage"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-10 object-contain md:h-16 w-auto mb-4" /></a>';
            } else {
            echo '<a href="' . $home_url . '" class="text-xl font-bold" aria-label="Homepage">' . get_bloginfo('name') . '</a>';
            }
            ?>
            <p class="not-italic text-base text-[#F9F8F6] leading-relaxed">
                <?php the_field('company_address', 'option'); ?>
            </p>

            <p class="not-italic text-base text-[#F9F8F6] leading-relaxed">
                <a href="tel:<?php echo preg_replace('/\s+/', '', get_field('company_phone_number', 'option')); ?>">
                    <?php the_field('company_phone_number', 'option'); ?>
                </a>
                <br>
                <a href="mailto:<?php the_field('company_mail', 'option'); ?>">
                    <?php the_field('company_mail', 'option'); ?>
                </a>
            </p>
            <p class="not-italic text-base text-[#F9F8F6] leading-relaxed">
                <?php
                $year = date('Y');
                echo '&copy; ' . $year . ' ' . get_bloginfo('name') . '. All rights reserved.';
                ?>
            </p>


        </div>

        <!-- Footer Image -->
        <div class="w-full md:w-auto md:flex-1 md:pl-12 ">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/footer.png'); ?>"
                alt="Footer Image" class="w-full relative left-0 md:left-[40%]" />
        </div>

    </div>
</footer>



</div><!-- #page -->

<?php wp_footer(); ?>

<script>
const buttons = document.querySelectorAll('.menu-btn');
const sections = document.querySelectorAll('div[id^="section-"]');
const rightContent = document.querySelector('.lg\\:w-2\\/3');

function clearActive() {
    buttons.forEach(btn => {
        btn.classList.remove('opacity-100', 'border-l-4', 'border-l-[#98C441]', 'font-semibold',
            'text-[#0F1E1E]');
        btn.classList.add('opacity-50', 'border-l-0', 'font-medium', 'text-[#555F58]');
        btn.setAttribute('aria-current', 'false');
    });
}

function setActive(index) {
    clearActive();
    buttons[index].classList.add('opacity-100', 'border-l-4', 'border-l-[#98C441]', 'font-semibold', 'text-[#0F1E1E]');
    buttons[index].classList.remove('opacity-50', 'border-l-0', 'font-medium', 'text-[#555F58]');
    buttons[index].setAttribute('aria-current', 'true');
}

buttons.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        sections[i].scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
        setActive(i);
    });
});

let ticking = false;
rightContent.addEventListener('scroll', () => {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            const scrollPos = rightContent.scrollTop + rightContent.offsetHeight / 3;
            for (let i = sections.length - 1; i >= 0; i--) {
                if (scrollPos >= sections[i].offsetTop) {
                    setActive(i);
                    break;
                }
            }
            ticking = false;
        });
        ticking = true;
    }
});

window.addEventListener('load', () => setActive(0));
</script>

<script>
jQuery(document).ready(function($) {
    $('.partners-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2
            },
            640: {
                items: 3
            },
            1024: {
                items: 5.5
            }
        }
    });
});
</script>



<script>
jQuery(document).ready(function($) {
    $('.recognized-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1.6
            },
            768: {
                items: 5
            },
            1024: {
                items: 7.5
            }
        }
    });
});
</script>

<script>
    jQuery(document).ready(function($){
  $(".testimonial-carousel").owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    smartSpeed: 600,
    responsive:{
      0:{ items:1 },
      768:{ items:2 },
      1024:{ items:3 }
    }
  });
});

</script>

<script>
const items = document.querySelectorAll('.scroll-item');
let currentIndex = 0;
const leftImage = document.getElementById('imageLeft');
const rightImage = document.getElementById('imageRight');
let isThrottled = false;

function showItem(index) {
    items.forEach((item, i) => {
        const active = i === index;
        item.classList.toggle('active', active);
        item.style.opacity = active ? '1' : '0';
        item.style.pointerEvents = active ? 'auto' : 'none';
    });

    // Side images transform based on index
    const movement = index * 30; // Adjust multiplier for desired effect
    leftImage.style.transform = `translate(-${movement}px, -50%)`;
    rightImage.style.transform = `translate(${movement}px, -50%)`;
}

function onScroll(e) {
    if (isThrottled) return;
    isThrottled = true;
    setTimeout(() => (isThrottled = false), 200); // Throttle scroll event

    if (e.deltaY > 0 && currentIndex < items.length - 1) {
        currentIndex++;
        showItem(currentIndex);
    } else if (e.deltaY < 0 && currentIndex > 0) {
        currentIndex--;
        showItem(currentIndex);
    }
}

// Keyboard Accessibility: up/down arrows
function onKeyDown(e) {
    if (e.key === 'ArrowDown' && currentIndex < items.length - 1) {
        currentIndex++;
        showItem(currentIndex);
    } else if (e.key === 'ArrowUp' && currentIndex > 0) {
        currentIndex--;
        showItem(currentIndex);
    }
}

// Touch support: swipe up/down
let touchStartY = 0;
let touchEndY = 0;

function onTouchStart(e) {
    touchStartY = e.changedTouches[0].screenY;
}

function onTouchEnd(e) {
    touchEndY = e.changedTouches.screenY;
    let diff = touchStartY - touchEndY;
    if (Math.abs(diff) > 40) { // swipe threshold
        if (diff > 0 && currentIndex < items.length - 1) {
            currentIndex++;
            showItem(currentIndex);
        } else if (diff < 0 && currentIndex > 0) {
            currentIndex--;
            showItem(currentIndex);
        }
    }
}

// Initialize
showItem(currentIndex);
window.addEventListener('wheel', onScroll, {
    passive: true
});
window.addEventListener('keydown', onKeyDown);
window.addEventListener('touchstart', onTouchStart, {
    passive: true
});
window.addEventListener('touchend', onTouchEnd, {
    passive: true
});
</script>


</body>

</html>