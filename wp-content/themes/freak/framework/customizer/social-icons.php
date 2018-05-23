<?php
// Social Icons
function freak_customize_register_social( $wp_customize ) {
$wp_customize->add_section('freak_social_section', array(
    'title' => __('Social Icons','freak'),
    'priority' => 44 ,
    'panel' => 'freak_header_panel',

));

$social_networks = array( //Redefinied in Sanitization Function.
    'none' => __('-','freak'),
    'facebook' => __('Facebook','freak'),
    'twitter' => __('Twitter','freak'),
    'google-plus' => __('Google Plus','freak'),
    'instagram' => __('Instagram','freak'),
    'rss' => __('RSS Feeds','freak'),
    'vimeo' => __('Vimeo','freak'),
    'youtube' => __('Youtube','freak'),
);

$social_count = count($social_networks);

for ($x = 1 ; $x <= ($social_count - 3) ; $x++) :

    $wp_customize->add_setting(
        'freak_social_'.$x, array(
        'sanitize_callback' => 'freak_sanitize_social',
        'default' => 'none'
    ));

    $wp_customize->add_control( 'freak_social_'.$x, array(
        'settings' => 'freak_social_'.$x,
        'label' => __('Icon ','freak').$x,
        'section' => 'freak_social_section',
        'type' => 'select',
        'choices' => $social_networks,
    ));

    $wp_customize->add_setting(
        'freak_social_url'.$x, array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'freak_social_url'.$x, array(
        'settings' => 'freak_social_url'.$x,
        'description' => __('Icon ','freak').$x.__(' Url','freak'),
        'section' => 'freak_social_section',
        'type' => 'url',
        'choices' => $social_networks,
    ));

endfor;

function freak_sanitize_social( $input ) {
    $social_networks = array(
        'none' ,
        'facebook',
        'twitter',
        'google-plus',
        'instagram',
        'rss',
        'vimeo',
        'youtube',
    );
    if ( in_array($input, $social_networks) )
        return $input;
    else
        return '';
}
}
add_action( 'customize_register', 'freak_customize_register_social' );