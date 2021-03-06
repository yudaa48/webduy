<?php

if ( ! function_exists( 'landing_page_setup' ) ) :

	function landing_page_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

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

		// Add sidebar on Blog page
		register_sidebar( array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar', 'landing' ),
			'description'   => __( 'Search blog post and select articles from a category' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
endif;
add_action( 'after_setup_theme', 'landing_page_setup' );

/**
 * Enqueue scripts and styles.
 */
function landing_page_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'icofont', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css' );
	wp_enqueue_style( 'boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css' );
	wp_enqueue_style( 'venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css' );

	wp_enqueue_script( 'bundle', get_template_directory_uri() . '/assets/js/bundle.js', array(), null, true );
	wp_enqueue_script( 'index', get_template_directory_uri() . '/src/js/index.js', array('jquery', 'sticky'), null, true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), null, true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array(), null, true );
	wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), null, true );
	wp_register_script( 'sticky', get_template_directory_uri() . '/assets/vendor/jquery-sticky/jquery.sticky.js', array('jquery'), '1.0.4', true );
	wp_enqueue_script( 'venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array(), null, true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/jquery.waypoints.min.js', array(), null, true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/vendor/counterup/counterup.min.js', array(), null, true );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array(), null, true );
	wp_enqueue_script( 'isotope.pkgd', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), null, true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'landing_page_scripts' );