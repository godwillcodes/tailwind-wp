<?php
/**
 * PiedmontGlobal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PiedmontGlobal
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pg_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on PiedmontGlobal, use a find and replace
		* to change 'pg' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'pg', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'pg' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'pg_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'pg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pg_content_width', 640 );
}
add_action( 'after_setup_theme', 'pg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pg_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pg' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pg' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pg_scripts() {
	// Tailwind CSS
	$tailwind_path = get_template_directory() . '/assets/css/output.css';
	$tailwind_uri  = get_template_directory_uri() . '/assets/css/output.css';

	if ( file_exists( $tailwind_path ) ) {
		wp_enqueue_style(
			'pg-tailwind',
			$tailwind_uri,
			array(),
			filemtime( $tailwind_path )
		);
	} elseif ( WP_DEBUG ) {
		error_log( 'Missing Tailwind CSS: ' . $tailwind_path );
	}

	// AOS CSS
	$aos_css_path = get_template_directory() . '/assets/css/aos.css';
	$aos_css_uri  = get_template_directory_uri() . '/assets/css/aos.css';

	if ( file_exists( $aos_css_path ) ) {
		wp_enqueue_style(
			'pg-aos',
			$aos_css_uri,
			array(),
			filemtime( $aos_css_path )
		);
	} elseif ( WP_DEBUG ) {
		error_log( 'Missing AOS CSS: ' . $aos_css_path );
	}

	// Owl Carousel CSS
	$owl_css_path = get_template_directory() . '/assets/css/owl.carousel.min.css';
	$owl_css_uri  = get_template_directory_uri() . '/assets/css/owl.carousel.min.css';

	if ( file_exists( $owl_css_path ) ) {
		wp_enqueue_style(
			'pg-owl-carousel',
			$owl_css_uri,
			array(),
			filemtime( $owl_css_path )
		);
	} elseif ( WP_DEBUG ) {
		error_log( 'Missing Owl Carousel CSS: ' . $owl_css_path );
	}

	$owl_theme_path = get_template_directory() . '/assets/css/owl.theme.default.min.css';
	$owl_theme_uri  = get_template_directory_uri() . '/assets/css/owl.theme.default.min.css';

	if ( file_exists( $owl_theme_path ) ) {
		wp_enqueue_style(
			'pg-owl-theme',
			$owl_theme_uri,
			array( 'pg-owl-carousel' ),
			filemtime( $owl_theme_path )
		);
	} elseif ( WP_DEBUG ) {
		error_log( 'Missing Owl Carousel Theme CSS: ' . $owl_theme_path );
	}

	// Alpine.js (self-hosted)
	$alpine_path = get_template_directory() . '/assets/js/alpine.min.js';
	$alpine_uri  = get_template_directory_uri() . '/assets/js/alpine.min.js';

	if ( file_exists( $alpine_path ) ) {
		wp_enqueue_script(
			'pg-alpine',
			$alpine_uri,
			array(),
			filemtime( $alpine_path ),
			true
		);
	} elseif ( WP_DEBUG ) {
		error_log( 'Missing Alpine JS: ' . $alpine_path );
	}

	// AOS JS
	$aos_js_path = get_template_directory() . '/assets/js/aos.js';
	$aos_js_uri  = get_template_directory_uri() . '/assets/js/aos.js';

	if ( file_exists( $aos_js_path ) ) {
		wp_enqueue_script(
			'pg-aos',
			$aos_js_uri,
			array(),
			filemtime( $aos_js_path ),
			true
		);
	} elseif ( WP_DEBUG ) {
		error_log( 'Missing AOS JS: ' . $aos_js_path );
	}

	// jQuery (self-hosted)
	$jquery_path = get_template_directory() . '/assets/js/jquery.min.js';
	$jquery_uri  = get_template_directory_uri() . '/assets/js/jquery.min.js';

	if ( file_exists( $jquery_path ) ) {
		wp_enqueue_script(
			'pg-jquery',
			$jquery_uri,
			array(),
			filemtime( $jquery_path ),
			true
		);
	} elseif ( WP_DEBUG ) {
		error_log( 'Missing jQuery: ' . $jquery_path );
	}

	// Owl Carousel JS
	$owl_js_path = get_template_directory() . '/assets/js/owl.carousel.min.js';
	$owl_js_uri  = get_template_directory_uri() . '/assets/js/owl.carousel.min.js';

	if ( file_exists( $owl_js_path ) ) {
		wp_enqueue_script(
			'pg-owl-carousel',
			$owl_js_uri,
			array( 'pg-jquery' ),
			filemtime( $owl_js_path ),
			true
		);
	} elseif ( WP_DEBUG ) {
		error_log( 'Missing Owl Carousel JS: ' . $owl_js_path );
	}

	// Navigation JS
	$nav_path = get_template_directory() . '/js/navigation.js';
	$nav_uri  = get_template_directory_uri() . '/js/navigation.js';

	if ( file_exists( $nav_path ) ) {
		wp_enqueue_script(
			'pg-navigation',
			$nav_uri,
			array( 'pg-alpine' ),
			filemtime( $nav_path ),
			true
		);
	} elseif ( WP_DEBUG ) {
		error_log( 'Missing Navigation JS: ' . $nav_path );
	}

	// Comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pg_scripts' );


// AOS initialization
add_action( 'wp_footer', function () {
	echo "<script>AOS.init();</script>";
}, 100 );

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Table of Contents
function pg_generate_toc($content) {
    if (is_single()) {
        $matches = [];
        // Match all headings from h2 to h6
        preg_match_all('/<h([2-6])(.*?)>(.*?)<\/h[2-6]>/', $content, $matches, PREG_SET_ORDER);

        if ($matches) {
            $toc = '<ul class="space-y-2">';
            foreach ($matches as $i => $heading) {
                $title = wp_strip_all_tags($heading[3]);
                $id = 'toc-' . $i;
				$toc .= '<li class="pb-4 pt-2 border-b border-[#1F3131]/30">
				<a href="#' . esc_attr($id) . '" class="toc-link hover:font-bold   duration-300 text-lg font-medium text-[#1F3131] transition">' . esc_html($title) . '</a>
			 </li>';
	

                // Inject ID into heading tag
                $content = preg_replace(
                    '/'.preg_quote($heading[0], '/').'/',
                    '<h'.$heading[1].' id="'.$id.'"'.$heading[2].'>'.$heading[3].'</h'.$heading[1].'>',
                    $content,
                    1
                );
            }
            $GLOBALS['pg_toc'] = $toc . '</ul>';
        }
    }
    return $content;
}
add_filter('the_content', 'pg_generate_toc');

function pg_load_more_posts() {
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $category = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : 'blog';

    $args = [
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'category_name'  => $category,
        'posts_per_page' => 6,
        'paged'          => $paged
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $counter = 0; // Counter for staggered delays
        while ($query->have_posts()) {
            $query->the_post(); 
            $delay = $counter * 100; // 100ms delay between each card
            ?>
            
            <a href="<?php the_permalink(); ?>" 
               class="group block shadow-md rounded border border-[#ffffff]/40 rounded-t-[4px] transition-transform duration-300 hover:shadow-lg"
               data-aos="fade-up" 
               data-aos-duration="400" 
               data-aos-delay="<?php echo $delay; ?>"
               data-aos-easing="ease-out">
              <div class="overflow-hidden rounded-t-[4px]">
                <img src="<?php the_post_thumbnail_url(); ?>" 
                     class="w-full h-60 object-cover object-top transition-transform duration-500 group-hover:scale-105" 
                     alt="<?php the_title(); ?>">
              </div>
              <div class="p-8 bg-white">
                <div class="text-gray-500 text-sm mb-2"><?php echo get_the_date(); ?></div>
                <h3 class="text-2xl font-semibold text-[#1F3131] mb-2"><?php the_title(); ?></h3>
                <div class="h-6 md:h-10"></div>
                <span class="inline-flex items-center text-base font-medium border-b-2 border-[#D16555]">
                  Read More <span class="ml-1 text-lg">→</span>
                </span>
              </div>
            </a>

        <?php 
            $counter++; // Increment counter for next iteration
        }
        wp_reset_postdata();
    }

    wp_die();
}
add_action('wp_ajax_pg_load_more_posts', 'pg_load_more_posts');
add_action('wp_ajax_nopriv_pg_load_more_posts', 'pg_load_more_posts');

function pg_load_more_ebooks() {
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;

    // Check if 'ebook' post type exists, fallback to 'post' with 'ebook' category
    $post_type = 'ebook';
    if (!post_type_exists('ebook')) {
        $post_type = 'post';
    }

    $args = [
        'post_type'      => $post_type,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'posts_per_page' => 6,
        'paged'          => $paged
    ];

    // If ebook post type doesn't exist, filter by category instead
    if (!post_type_exists('ebook')) {
        $args['category_name'] = 'ebook';
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $counter = 0; // Counter for staggered delays
        while ($query->have_posts()) {
            $query->the_post(); 
            $delay = $counter * 100; // 100ms delay between each card
            ?>
            
            <a href="<?php the_permalink(); ?>"
                class="group block shadow-md rounded border border-[#ffffff]/40 rounded-t-[4px] transition-transform duration-300 hover:shadow-lg"
                data-aos="fade-up" 
                data-aos-duration="400" 
                data-aos-delay="<?php echo $delay; ?>"
                data-aos-easing="ease-out">
                <div class="overflow-hidden rounded-t-[4px]">
                    <img src="<?php the_post_thumbnail_url(); ?>"
                        class="w-full h-60 object-cover object-top transition-transform duration-500 group-hover:scale-105"
                        alt="<?php the_title(); ?>">
                </div>
                <div class="p-8 bg-white">
                    <h3 class="text-2xl font-semibold text-[#1F3131] mb-2"><?php the_title(); ?></h3>
                    <div class="text-gray-500 text-sm mb-2"><?php echo wp_trim_words(get_the_content(), 20); ?></div>
                    <div class="h-6 md:h-10"></div>
                    <span class="inline-flex items-center text-base font-medium border-b-2 border-[#D16555]">
                        Get <?php the_title(); ?> eBook <span class="ml-1 text-lg">→</span>
                    </span>
                </div>
            </a>

        <?php 
            $counter++; // Increment counter for next iteration
        }
        wp_reset_postdata();
    }

    wp_die();
}
add_action('wp_ajax_pg_load_more_ebooks', 'pg_load_more_ebooks');
add_action('wp_ajax_nopriv_pg_load_more_ebooks', 'pg_load_more_ebooks');


function pg_enqueue_scripts() {
    wp_enqueue_script('pg-infinite-scroll', get_template_directory_uri() . '/js/infinite-scroll.js', ['pg-jquery'], null, true);
    wp_localize_script('pg-infinite-scroll', 'pg_ajax', [
        'ajax_url' => admin_url('admin-ajax.php')
    ]);
}
add_action('wp_enqueue_scripts', 'pg_enqueue_scripts');

/**
 * Local Email Handling + Custom Forminator Hook for eBook PDF Delivery
 *
 * - Configures WordPress PHPMailer to route email through MailHog in local dev.
 * - Hooks into Forminator AJAX submission for a specific eBook download form.
 * - Processes form data, retrieves the correct eBook PDF, and emails it to the user.
 */

// --- Configure WordPress to use MailHog in local environment ---
add_action('phpmailer_init', function($phpmailer) {
    /**
     * Only apply SMTP settings if:
     * - The site is running in "local" environment.
     * - Required SMTP constants are defined in wp-config.php (SMTP_HOST, SMTP_PORT, etc.).
     */
    if (
        defined('WP_ENVIRONMENT_TYPE') && WP_ENVIRONMENT_TYPE === 'local'
        && defined('SMTP_HOST') && defined('SMTP_PORT')
    ) {
        $phpmailer->isSMTP();
        $phpmailer->Host       = SMTP_HOST;
        $phpmailer->Port       = SMTP_PORT;
        $phpmailer->SMTPAuth   = SMTP_AUTH;
        $phpmailer->Username   = SMTP_USER;
        $phpmailer->Password   = SMTP_PASS;
        $phpmailer->SMTPSecure = SMTP_SECURE;
    }
});


// --- Hook Forminator AJAX submission for eBook form (ID: 530) ---

/**
 * Handles unauthenticated (public) submissions.
 */
add_action('wp_ajax_nopriv_forminator_submit_form_custom-forms', function() {
    if (isset($_POST['form_id']) && $_POST['form_id'] == 530) {
        pg_process_ebook_pdf($_POST);
    }
}, 5);

/**
 * Handles authenticated (logged-in) submissions.
 */
add_action('wp_ajax_forminator_submit_form_custom-forms', function() {
    if (isset($_POST['form_id']) && $_POST['form_id'] == 530) {
        pg_process_ebook_pdf($_POST);
    }
}, 5);


// --- Core function: process eBook form submission ---
/**
 * Process the Forminator form data and send eBook PDF to the user.
 *
 * Steps:
 *  1. Extract user data (first name, last name, email) from $_POST.
 *  2. Identify which eBook to send based on current page ID.
 *  3. Fetch the eBook PDF (from ACF field) and validate file existence.
 *  4. Build and send a styled HTML email with the PDF attached.
 *  5. Log success or failure to debug.log for troubleshooting.
 *
 * @param array $post_data Raw $_POST data from AJAX submission.
 */
function pg_process_ebook_pdf($post_data) {
    $user_email = '';
    $first_name = '';
    $last_name  = '';
    
    // --- Extract and sanitize form fields ---
    if (isset($post_data['email-1'])) {
        $user_email = sanitize_email($post_data['email-1']);
    }
    if (isset($post_data['name-1'])) {
        $first_name = sanitize_text_field($post_data['name-1']);
    }
    if (isset($post_data['name-2'])) {
        $last_name = sanitize_text_field($post_data['name-2']);
    }
    
    // --- Identify which eBook to send (based on the page the form was submitted from) ---
    $page_id  = isset($post_data['page_id']) ? intval($post_data['page_id']) : 0;
    $ebook_id = $page_id;
    
    if ($page_id <= 0) {
        error_log('EBOOK PDF ERROR: No page ID found');
        return;
    }
    
    $user_name = trim($first_name . ' ' . $last_name);
    
    // --- Validate essential inputs ---
    if (empty($user_email)) {
        error_log('EBOOK PDF ERROR: No email provided');
        return;
    }
    if (empty($ebook_id)) {
        error_log('EBOOK PDF ERROR: No Ebook ID provided');
        return;
    }
    
    // --- Fetch eBook PDF file from ACF field on Ebook CPT ---
    $pdf_file = get_field('ebook_pdf', $ebook_id);
    
    if (empty($pdf_file) || empty($pdf_file['ID'])) {
        error_log('EBOOK PDF ERROR: No PDF file found for Ebook ID: ' . $ebook_id);
        return;
    }
    
    $pdf_path = get_attached_file($pdf_file['ID']);
    
    if (!file_exists($pdf_path)) {
        error_log('EBOOK PDF ERROR: PDF file does not exist at path: ' . $pdf_path);
        return;
    }
    
    // --- Format eBook title (strip trailing "Ebook") ---
    $ebook_title = get_the_title($ebook_id);
    $ebook_title = str_replace(' Ebook', '', $ebook_title);
    
    // --- Compose HTML email body ---
    $subject = 'Your requested eBook: ' . $ebook_title;
    
    $message  = '<html><body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">';
    $message .= '<div style="max-width:600px; margin:0 auto; padding:20px;">';
    $message .= '<h2 style="color:#1F3131; margin-bottom:20px;">Thank you for your interest!</h2>';
    
    if (!empty($user_name)) {
        $message .= '<p>Hi ' . esc_html($user_name) . ',</p>';
    } else {
        $message .= '<p>Hi there,</p>';
    }
    
    $message .= '<p>Thank you for requesting our eBook: <strong>' . esc_html($ebook_title) . '</strong></p>';
    $message .= '<p>Please find your free copy attached to this email.</p>';
    $message .= '<p>If you have any questions or would like to learn more about our services, feel free to reach out to us.</p>';
    $message .= '<p>Best regards,<br>The Piedmont Global Team</p>';
    $message .= '</div></body></html>';
    
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: Piedmont Global <noreply@piedmontglobal.com>'
    ];
    
    // --- Send email with PDF attachment ---
    $mail_sent = wp_mail($user_email, $subject, $message, $headers, [$pdf_path]);
    
    if ($mail_sent) {
        error_log('EBOOK PDF SUCCESS: Email successfully sent to ' . $user_email);
    } else {
        error_log('EBOOK PDF ERROR: Failed to send email to ' . $user_email);
    }
}




