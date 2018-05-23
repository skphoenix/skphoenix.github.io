<?php
function freak_customize_register_fonts( $wp_customize ) {
    $wp_customize->add_section(
        'freak_typo_options',
        array(
            'title'     => __('Google Web Fonts','freak'),
            'priority'  => 41,
        )
    );

    $font_array = array('Roboto Slab','Bitter','Raleway','Khula','Open Sans','Droid Sans','Droid Serif','Roboto','Roboto Condensed','Lato','Bree Serif','Oswald','Slabo','Lora','Source Sans Pro','PT Sans','Ubuntu','Lobster','Arimo','Bitter','Noto Sans');
    $fonts = array_combine($font_array, $font_array);

    $wp_customize->add_setting(
        'freak_title_font',
        array(
            'default'=> 'Bitter',
            'sanitize_callback' => 'freak_sanitize_gfont'
        )
    );

    function freak_sanitize_gfont( $input ) {
        if ( in_array($input, array('Roboto Slab','Bitter','Raleway','Khula','Open Sans','Droid Sans','Droid Serif','Roboto','Roboto Condensed','Lato','Bree Serif','Oswald','Slabo','Lora','Source Sans Pro','PT Sans','Ubuntu','Lobster','Arimo','Bitter','Noto Sans') ) )
            return $input;
        else
            return '';
    }
    $wp_customize->add_control(
    'freak_title_font',array(
    'label' => __('Title','freak'),
    'settings' => 'freak_title_font',
    'section'  => 'freak_typo_options',
    'type' => 'select',
    'choices' => $fonts,
    )
    );

    $wp_customize->add_setting(
    'freak_body_font',
    array(	'default'=> 'Roboto Slab',
    'sanitize_callback' => 'freak_sanitize_gfont' )
    );

    $wp_customize->add_control(
    'freak_body_font',array(
    'label' => __('Body','freak'),
    'settings' => 'freak_body_font',
    'section'  => 'freak_typo_options',
    'type' => 'select',
    'choices' => $fonts
    )
    );

}
add_action( 'customize_register', 'freak_customize_register_fonts' );