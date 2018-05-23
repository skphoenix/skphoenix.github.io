<?php
// SLIDER PANEL
function freak_customize_register_slider( $wp_customize ) {
    $wp_customize->add_panel( 'freak_slider_panel', array(
        'priority'       => 35,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Main Slider',
    ) );

    $wp_customize->add_section(
        'freak_sec_slider_options',
        array(
            'title'     => __('Enable/Disable','freak'),
            'priority'  => 0,
            'panel'     => 'freak_slider_panel'
        )
    );


    $wp_customize->add_setting(
        'freak_main_slider_enable',
        array( 'sanitize_callback' => 'freak_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'freak_main_slider_enable', array(
            'settings' => 'freak_main_slider_enable',
            'label'    => __( 'Enable Slider.', 'freak' ),
            'section'  => 'freak_sec_slider_options',
            'type'     => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'freak_main_slider_count',
        array(
            'default' => '0',
            'sanitize_callback' => 'freak_sanitize_positive_number'
        )
    );

    // Select How Many Slides the User wants, and Reload the Page.
    $wp_customize->add_control(
        'freak_main_slider_count', array(
            'settings' => 'freak_main_slider_count',
            'label'    => __( 'No. of Slides(Min:0, Max: 10)' ,'freak'),
            'section'  => 'freak_sec_slider_options',
            'type'     => 'number',
            'description' => __('Save the Settings, and Reload this page to Configure the Slides.','freak'),

        )
    );

        if ( get_theme_mod('freak_main_slider_count') > 0 ) :
            $slides = get_theme_mod('freak_main_slider_count');

            for ( $i = 1 ; $i <= $slides ; $i++ ) :

                //Create the settings Once, and Loop through it.

                $wp_customize->add_setting(
                    'freak_slide_img'.$i,
                    array( 'sanitize_callback' => 'esc_url_raw' )
                );

                $wp_customize->add_control(
                    new WP_Customize_Image_Control(
                        $wp_customize,
                        'freak_slide_img'.$i,
                        array(
                            'label' => '',
                            'section' => 'freak_slide_sec'.$i,
                            'settings' => 'freak_slide_img'.$i,
                        )
                    )
                );


                $wp_customize->add_section(
                    'freak_slide_sec'.$i,
                    array(
                        'title'     => __('Slide ','freak').$i,
                        'priority'  => $i,
                        'panel'     => 'freak_slider_panel'
                    )
                );

                $wp_customize->add_setting(
                    'freak_slide_title'.$i,
                    array( 'sanitize_callback' => 'sanitize_text_field' )
                );

                $wp_customize->add_control(
                    'freak_slide_title'.$i, array(
                        'settings' => 'freak_slide_title'.$i,
                        'label'    => __( 'Slide Title','freak' ),
                        'section'  => 'freak_slide_sec'.$i,
                        'type'     => 'text',
                    )
                );

                $wp_customize->add_setting(
                    'freak_slide_desc'.$i,
                    array( 'sanitize_callback' => 'sanitize_text_field' )
                );

                $wp_customize->add_control(
                    'freak_slide_desc'.$i, array(
                        'settings' => 'freak_slide_desc'.$i,
                        'label'    => __( 'Slide Description','freak' ),
                        'section'  => 'freak_slide_sec'.$i,
                        'type'     => 'text',
                    )
                );


                $wp_customize->add_setting(
                    'freak_slide_url'.$i,
                    array( 'sanitize_callback' => 'esc_url_raw' )
                );

                $wp_customize->add_control(
                    'freak_slide_url'.$i, array(
                        'settings' => 'freak_slide_url'.$i,
                        'label'    => __( 'Target URL','freak' ),
                        'section'  => 'freak_slide_sec'.$i,
                        'type'     => 'url',
                    )
                );

            endfor;


        endif;

}
add_action( 'customize_register', 'freak_customize_register_slider' );