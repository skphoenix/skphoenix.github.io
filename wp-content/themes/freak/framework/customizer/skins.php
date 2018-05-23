<?php
//Logo Settings
function freak_customize_register_skins( $wp_customize ) {
$wp_customize->add_section( 'title_tagline' , array(
    'title'      => __( 'Title, Tagline & Logo', 'freak' ),
    'priority'   => 30,
    'panel' => 'freak_header_panel',

) );

//Replace Header Text Color with, separate colors for Title and Description
//Override freak_site_titlecolor
$wp_customize->remove_control('display_header_text');
$wp_customize->remove_setting('header_textcolor');
$wp_customize->add_setting('freak_site_titlecolor', array(
    'default'     => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'freak_site_titlecolor', array(
        'label' => __('Site Title Color','freak'),
        'section' => 'colors',
        'settings' => 'freak_site_titlecolor',
        'type' => 'color'
    ) )
);

$wp_customize->add_setting('freak_header_desccolor', array(
    'default'     => '#c4c4c4',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'freak_header_desccolor', array(
        'label' => __('Site Tagline Color','freak'),
        'section' => 'colors',
        'settings' => 'freak_header_desccolor',
        'type' => 'color'
    ) )
);
}
add_action( 'customize_register', 'freak_customize_register_skins' );