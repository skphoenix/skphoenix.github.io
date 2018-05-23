<?php
//Header Settings
function freak_customize_register_header( $wp_customize ) {

$wp_customize->add_panel( 'freak_header_panel', array(
    'priority'       => 2,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Header Settings',
) );


$wp_customize->add_section( 'header_image' , array(
    'title'      => __( 'Header Image', 'freak' ),
    'panel' => 'freak_header_panel',
    'priority'   => 30,
) );

//Mobile Header Image
    $wp_customize->add_section('freak_mobile_header_image', array(
        'title' => __('Mobile Header Image', 'freak'),
        'panel' => 'freak_header_panel',
        'priority' => 35,
    ) );

    $wp_customize->add_setting('freak_mobile_header_image_upload',
        array( 'sanitize_callback' => 'esc_url_raw' )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'freak_mobile_header_image_upload',
            array(
                'label'      => __('Upload An Image', 'freak'),
                'description' => __('Upload a header image to show in mobile site. Image should be tall enough.', 'freak'),
                'section'    => 'freak_mobile_header_image',
                'settings'   => 'freak_mobile_header_image_upload',
            )
        )
    );

//Parallax Settings
$wp_customize->add_section( 'freak_header_parallax' , array(
    'title'      => __( 'Parallax Settings', 'freak' ),
    'panel' => 'freak_header_panel',
    'priority'   => 30,
) );

$wp_customize->add_setting( 'freak_parallax_disable' , array(
    'default'     => false,
    'sanitize_callback' => 'freak_sanitize_checkbox'
) );

$wp_customize->add_control(
    'freak_parallax_disable', array(
    'label' => __('Disable Parallax Effect.','freak'),
    'section' => 'freak_header_parallax',
    'settings' => 'freak_parallax_disable',
    'type' => 'checkbox'
) );

//Callback Functions to Check if Parallax is Enabled or Disabled.
function freak_parallax_enabled($control) {
    $option = $control->manager->get_setting('freak_parallax_disable');
    return $option->value() == false ;
}

function freak_parallax_disabled($control) {
    $option = $control->manager->get_setting('freak_parallax_disable');
    return $option->value() == true ;
}

$wp_customize->add_setting( 'freak_parallax_strength' , array(
    'default'     => 0.2,
    'sanitize_callback' => 'freak_sanitize_positive_number',
) );
$wp_customize->add_control(
    'freak_parallax_strength',
    array(
        'label' => __('Parallax Effect Strength','freak'),
        'description' => __('Min: 0.05, Max: 1, Default: 0.2','freak'),
        'section' => 'freak_header_parallax',
        'settings' => 'freak_parallax_strength',
        'priority' => 6,
        'type' => 'range',
        'active_callback' => 'freak_parallax_enabled',
        'input_attrs' => array(
            'min'   => 0.05,
            'max'   => 1,
            'step'  => 0.05,
        ),
    )
);

//General Settings
$wp_customize->add_section( 'freak_header_basic' , array(
    'title'      => __( 'General Settings', 'freak' ),
    'panel' => 'freak_header_panel',
    'priority'   => 30,
) );

$wp_customize->add_setting( 'freak_himg_align' , array(
    'default'     => true,
    'sanitize_callback' => 'freak_sanitize_himg_align'
) );

/* Sanitization Function */
function freak_sanitize_himg_align( $input ) {
    if (in_array( $input, array('center','left','right') ) )
        return $input;
    else
        return '';
}

$wp_customize->add_control(
    'freak_himg_align', array(
    'label' => __('Header Image Alignment','freak'),
    'section' => 'freak_header_basic',
    'settings' => 'freak_himg_align',
    'active_callback' => 'freak_parallax_disabled',
    'type' => 'select',
    'choices' => array(
        'center' => __('Center','freak'),
        'left' => __('Left','freak'),
        'right' => __('Right','freak'),
    )
) );

//Filter Enabled By Default
$wp_customize->add_setting( 'freak_himg_darkbg' , array(
    'default'     => true,
    'sanitize_callback' => 'freak_sanitize_checkbox'
) );

$wp_customize->add_control(
    'freak_himg_darkbg', array(
    'label' => __('Add a Dark Filter to make the text Above the Image More Clear and Easy to Read.','freak'),
    'section' => 'freak_header_basic',
    'settings' => 'freak_himg_darkbg',
    'type' => 'checkbox'

) );


//Resize Header
$wp_customize->add_setting( 'freak_header_size' , array(
    'default'     => 3,
    'sanitize_callback' => 'freak_sanitize_positive_number'
) );

$wp_customize->add_control(
    'freak_header_size',
    array(
        'label' => __('Header Size for Home Page.','freak'),
        'section' => 'freak_header_basic',
        'settings' => 'freak_header_size',
        'priority' => 5,
        'type' => 'range',
        'input_attrs' => array(
            'min'   => 1,
            'max'   => 3,
            'step'  => 1,
        ),
    )
);

$wp_customize->add_setting( 'freak_header_size_other' , array(
    'default'     => 3,
    'sanitize_callback' => 'freak_sanitize_positive_number'
) );

$wp_customize->add_control(
    'freak_header_size_other',
    array(
        'label' => __('Header Size for Posts,pages & Archives','freak'),
        'description' => __('Use this option if you want a Different Header Size for All Pages, except the Home Page.','freak'),
        'section' => 'freak_header_basic',
        'settings' => 'freak_header_size_other',
        'priority' => 5,
        'type' => 'range',
        'input_attrs' => array(
            'min'   => 1,
            'max'   => 3,
            'step'  => 1,
        ),
    )
);

$wp_customize->add_setting( 'freak_topsearch_disable' , array(
    'default'     => false,
    'sanitize_callback' => 'freak_sanitize_checkbox'
) );

$wp_customize->add_control(
    'freak_topsearch_disable', array(
    'label' => __('Hide Search Bar.','freak'),
    'section' => 'freak_header_basic',
    'settings' => 'freak_topsearch_disable',
    'type' => 'checkbox'
) );



//Settings For Logo Area

$wp_customize->add_setting(
    'freak_hide_title_tagline',
    array( 'sanitize_callback' => 'freak_sanitize_checkbox' )
);

$wp_customize->add_control(
    'freak_hide_title_tagline', array(
        'settings' => 'freak_hide_title_tagline',
        'label'    => __( 'Hide Title and Tagline.', 'freak' ),
        'section'  => 'title_tagline',
        'type'     => 'checkbox',
    )
);

function freak_title_visible( $control ) {
    $option = $control->manager->get_setting('freak_hide_title_tagline');
    return $option->value() == false ;
}

}
add_action( 'customize_register', 'freak_customize_register_header' );