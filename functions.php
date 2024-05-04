<?php

function arino_theme_setup() {

    // Make theme available for translation.
    // Translations can be placed in the /languages/ directory.
    load_theme_textdomain( 'arino', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to <head>.
    add_theme_support( 'automatic-feed-links' );

    // Theme title
    add_theme_support( 'title-tag' );

    // Enable support for post thumbnails and featured images.
    add_theme_support( 'post-thumbnails' );

    // Add support for two custom navigation menus.
    // register_nav_menus( array(
    //     'primary'   => __( 'Primary Menu', 'arino' ),
    //     'secondary' => __( 'Secondary Menu', 'arino' ),
    // ) );

    // Enable support for the following post formats:
    // side, gallery, quote, image, and video
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}

add_action( 'after_setup_theme', 'arino_theme_setup' );

// COMMON CSS AND JS SCRPIT
require_once('inc/common/scripts.php');

// HEADER PART
function arino_header(){
    get_template_part('template-parts/header/header');
}
// FOOTER PART
function arino_footer(){
    get_template_part('template-parts/footer/footer');
}