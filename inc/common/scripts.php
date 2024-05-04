<?php

function arino_add_theme_scripts() {
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/plugins/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/plugins/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/plugins/fontawesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/plugins/jquery-ui.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'lightgallery', get_template_directory_uri() . '/assets/css/plugins/lightgallery.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/plugins/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/plugins/swiper.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'arino-main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'gsap', get_template_directory_uri() . '/assets/js/plugins/gsap.min.js', array(), 1.0, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/plugins/isotope.pkg.min.js', array( 'imagesloaded' ), 1.0, true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/plugins/jquery-3.6.0.min.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/plugins/jquery-ui.min.js', array(), 1.0, true );
	wp_enqueue_script( 'counter', get_template_directory_uri() . '/assets/js/plugins/jquery.counter.min.js', array(), 1.0, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/plugins/jquery.slick.min.js', array(), 1.0, true );
	wp_enqueue_script( 'lightgallery', get_template_directory_uri() . '/assets/js/plugins/lightgallery.min.js', array(), 1.0, true );
	wp_enqueue_script( 'ripples', get_template_directory_uri() . '/assets/js/plugins/ripples.min.js', array(), 1.0, true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/plugins/swiper.min.js', array(), 1.0, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/plugins/wow.min.js', array(), 1.0, true );
	wp_enqueue_script( 'arino-main', get_template_directory_uri() . '/assets/js/main.js', array(), 1.0, true );
    

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'arino_add_theme_scripts' );
