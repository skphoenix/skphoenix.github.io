<?php
/**
 * Enqueue scripts and styles.
 */
function freak_scripts() {
    wp_enqueue_style( 'freak-style', get_stylesheet_uri() );

    wp_enqueue_style('freak-title-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", get_theme_mod('freak_title_font', 'Bitter') ).':100,300,400,700' );

    wp_enqueue_style('freak-body-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", get_theme_mod('freak_body_font', 'Roboto Slab') ).':100,300,400,700' );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );

    wp_enqueue_style( 'nivo-slider', get_template_directory_uri() . '/assets/css/nivo-slider.css' );

    wp_enqueue_style( 'nivo-skin-style', get_template_directory_uri() . '/assets/css/nivo-default/default.css' );

    wp_enqueue_style( 'bootstra', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );

    wp_enqueue_style( 'freak-hover-style', get_template_directory_uri() . '/assets/css/hover.min.css' );

    wp_enqueue_style( 'freak-custombox', get_template_directory_uri() . '/assets/css/custombox.min.css' );

    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css' );

    wp_enqueue_style( 'fleximage', get_template_directory_uri() . '/assets/css/jquery.flex-images.css' );

    wp_enqueue_style( 'freak-main-theme-style', get_template_directory_uri() . '/assets/theme-styles/css/default.css' );

    wp_enqueue_script( 'freak-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    wp_enqueue_script( 'freak-externaljs', get_template_directory_uri() . '/js/external.js', array('jquery') );

    wp_enqueue_script( 'freak-popup-min-js', get_template_directory_uri() . '/js/custombox.min.js');

    wp_enqueue_script( 'freak-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script( 'freak-custom-js', get_template_directory_uri() . '/js/custom.js', array(), 1, true );
}
add_action( 'wp_enqueue_scripts', 'freak_scripts' );