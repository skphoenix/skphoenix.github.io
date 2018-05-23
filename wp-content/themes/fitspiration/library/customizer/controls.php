<?php

/*******************************************************************
* These are settings for the Theme Customizer in the admin panel. 
*******************************************************************/
if ( ! function_exists( 'fitspiration_theme_customizer' ) ) :
  function fitspiration_theme_customizer( $wp_customize ) {
  
    /* color scheme option */
    $wp_customize->add_setting( 'fitspiration_color_settings', array (
      'default' => '#e53748',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitspiration_color_settings', array(
      'label'    => __( 'Theme Accent Color 1', 'fitspiration' ),
      'section'  => 'colors',
      'settings' => 'fitspiration_color_settings',
    ) ) );

    $wp_customize->add_setting( 'fitspiration_color_settings_2', array (
      'default' => '#181515',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitspiration_color_settings_2', array(
      'label'    => __( 'Theme Accent Colo 2', 'fitspiration' ),
      'section'  => 'colors',
      'settings' => 'fitspiration_color_settings_2',
    ) ) );
    
    /* social media option */
    $wp_customize->add_section( 'fitspiration_social_section' , array(
      'title'       => __( 'Social Media Icons', 'fitspiration' ),
      'priority'    => 32,
      'description' => __( 'Optional media icons in the header', 'fitspiration' ),
    ) );
    
    $wp_customize->add_setting( 'fitspiration_facebook', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );

    /* author bio in posts option */
    $wp_customize->add_section( 'fitspiration_posts_section' , array(
      'title'       => __( 'Post Settings', 'fitspiration' ),
      'priority'    => 35,
      'description' => ''
    ) );

    $wp_customize->add_setting( 'fitspiration_related_posts', array (
      'sanitize_callback' => 'fitspiration_sanitize_checkbox',
    ) );
    
    $wp_customize->add_control('related_posts', array(
      'settings' => 'fitspiration_related_posts',
      'label' => __('Disable the Related Posts?', 'fitspiration'),
      'section' => 'fitspiration_posts_section',
      'type' => 'checkbox',
    ));

    $wp_customize->add_setting( 'fitspiration_author_area', array (
      'sanitize_callback' => 'fitspiration_sanitize_checkbox',
    ) );
    
    $wp_customize->add_control('author_info', array(
      'settings' => 'fitspiration_author_area',
      'label' => __('Disable the Author Information?', 'fitspiration'),
      'section' => 'fitspiration_posts_section',
      'type' => 'checkbox',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_facebook', array(
      'label'    => __( 'Enter your Facebook url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_facebook',
      'priority'    => 101,
    ) ) );
  
    $wp_customize->add_setting( 'fitspiration_twitter', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_twitter', array(
      'label'    => __( 'Enter your Twitter url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_twitter',
      'priority'    => 102,
    ) ) );
    
    $wp_customize->add_setting( 'fitspiration_google', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_google', array(
      'label'    => __( 'Enter your Google+ url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_google',
      'priority'    => 103,
    ) ) );
    
    $wp_customize->add_setting( 'fitspiration_pinterest', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_pinterest', array(
      'label'    => __( 'Enter your Pinterest url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_pinterest',
      'priority'    => 104,
    ) ) );
    
    $wp_customize->add_setting( 'fitspiration_linkedin', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_linkedin', array(
      'label'    => __( 'Enter your Linkedin url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_linkedin',
      'priority'    => 105,
    ) ) );
    
    $wp_customize->add_setting( 'fitspiration_youtube', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_youtube', array(
      'label'    => __( 'Enter your Youtube url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_youtube',
      'priority'    => 106,
    ) ) );
    
    $wp_customize->add_setting( 'fitspiration_tumblr', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_tumblr', array(
      'label'    => __( 'Enter your Tumblr url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_tumblr',
      'priority'    => 107,
    ) ) );
    
    $wp_customize->add_setting( 'fitspiration_instagram', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_instagram', array(
      'label'    => __( 'Enter your Instagram url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_instagram',
      'priority'    => 108,
    ) ) );
    
    $wp_customize->add_setting( 'fitspiration_flickr', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_flickr', array(
      'label'    => __( 'Enter your Flickr url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_flickr',
      'priority'    => 109,
    ) ) );
    
    $wp_customize->add_setting( 'fitspiration_vimeo', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_vimeo', array(
      'label'    => __( 'Enter your Vimeo url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_vimeo',
      'priority'    => 110,
    ) ) );
    
    $wp_customize->add_setting( 'fitspiration_rss', array (
      'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_rss', array(
      'label'    => __( 'Enter your RSS url', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_rss',
      'priority'    => 112,
    ) ) );
    
    $wp_customize->add_setting( 'fitspiration_email', array (
      'sanitize_callback' => 'sanitize_email',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_email', array(
      'label'    => __( 'Enter your email address', 'fitspiration' ),
      'section'  => 'fitspiration_social_section',
      'settings' => 'fitspiration_email',
      'priority'    => 113,
    ) ) );

   /* slider options */
    
    $wp_customize->add_section( 'fitspiration_slider_section' , array(
      'title'       => __( 'Slider Settings', 'fitspiration' ),
      'priority'    => 33,
      'description' => __( 'Adjust the behavior of the image slider.', 'fitspiration' ),
    ) );

    $wp_customize->add_setting( 'fitspiration_slider_area', array (
      'sanitize_callback' => 'fitspiration_sanitize_checkbox',
    ) );
    
    $wp_customize->add_control('slider_area', array(
      'settings' => 'fitspiration_slider_area',
      'label' => __('Disable home page slider?', 'fitspiration'),
      'section' => 'fitspiration_slider_section',
      'type' => 'checkbox',
    ));
    
    $wp_customize->add_setting( 'fitspiration_slider_effect', array(
      'default' => __('scrollHorz','fitspiration'),
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control( 'effect_select_box', array(
      'settings' => 'fitspiration_slider_effect',
      'label' => __( 'Select Effect:', 'fitspiration' ),
      'section' => 'fitspiration_slider_section',
      'type' => 'select',
      'choices' => array(
        'scrollHorz' => __('Horizontal (Default)','fitspiration'),
        'scrollVert' => __('Vertical','fitspiration'),
        'tileSlide' => __('Tile Slide','fitspiration'),
        'tileBlind' => __('Blinds','fitspiration'),
        'shuffle' => __('Shuffle','fitspiration'),
      ),
    ));

    $cat_array = array();

    $categories = get_categories( array(
        'orderby' => 'name'
    ) );
    foreach ( $categories as $category ) {
      
      $cat_array[esc_html( $category->slug )] = esc_html( $category->name );
      
    } 

    $wp_customize->add_setting( 'fitspiration_slider_cat', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control( 'cat_select_box', array(
      'settings' => 'fitspiration_slider_cat',
      'label' => __( 'Select A Category:', 'fitspiration' ),
      'section' => 'fitspiration_slider_section',
      'type' => 'select',
      'choices' => $cat_array
    ));
    
    $wp_customize->add_setting( 'fitspiration_slider_timeout', array (
      'sanitize_callback' => 'fitspiration_sanitize_integer',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitspiration_slider_timeout', array(
      'label'    => __( 'Autoplay Speed in Seconds', 'fitspiration' ),
      'section'  => 'fitspiration_slider_section',
      'settings' => 'fitspiration_slider_timeout',
    ) ) );
    
  
  }
endif;
add_action('customize_register', 'fitspiration_theme_customizer');

/**
 * Sanitize checkbox
 */
if ( ! function_exists( 'fitspiration_sanitize_checkbox' ) ) :
  function fitspiration_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
      return 1;
    } else {
      return '';
    }
  }
endif;


/**
 * Sanitize integer input
 */
if ( ! function_exists( 'fitspiration_sanitize_integer' ) ) :
  function fitspiration_sanitize_integer( $input ) {
    return absint($input);
  }
endif;