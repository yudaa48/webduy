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
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/new-styling/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendor/new-styling/css/font-awesome.min.css' );
	wp_enqueue_style( 'elegant-icons', get_template_directory_uri() . '/assets/vendor/new-styling/css/elegant-icons.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/vendor/new-styling/css/flaticon.css' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/vendor/new-styling/css/slicknav.min.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css' );

	wp_enqueue_script( 'bundle', get_template_directory_uri() . '/assets/js/bundle.js', array(), null, true );
	wp_enqueue_script( 'index', get_template_directory_uri() . '/src/js/index.js', array('jquery', 'sticky'), null, true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendor/new-styling/js/jquery-3.3.1.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/new-styling/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/vendor/new-styling/js/jquery.slicknav.js', array(), null, true );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'landing_page_scripts' );