<?php
//IMAGE GRID
function freak_customize_register_fp( $wp_customize ) {
$wp_customize->add_section(
    'freak_fc_grid',
    array(
        'title'     => __('Featured Posts','freak'),
        'priority'  => 36,
    )
);

$wp_customize->add_setting(
    'freak_grid_enable',
    array( 'sanitize_callback' => 'freak_sanitize_checkbox' )
);

$wp_customize->add_control(
    'freak_grid_enable', array(
        'settings' => 'freak_grid_enable',
        'label'    => __( 'Enable', 'freak' ),
        'section'  => 'freak_fc_grid',
        'type'     => 'checkbox',
    )
);


$wp_customize->add_setting(
    'freak_grid_title',
    array( 'sanitize_callback' => 'sanitize_text_field' )
);

$wp_customize->add_control(
    'freak_grid_title', array(
        'settings' => 'freak_grid_title',
        'label'    => __( 'Title for the Grid', 'freak' ),
        'section'  => 'freak_fc_grid',
        'type'     => 'text',
    )
);



$wp_customize->add_setting(
    'freak_grid_cat',
    array( 'sanitize_callback' => 'freak_sanitize_category' )
);


$wp_customize->add_control(
    new WP_Customize_Category_Control(
        $wp_customize,
        'freak_grid_cat',
        array(
            'label'    => __('Category For Image Grid','freak'),
            'settings' => 'freak_grid_cat',
            'section'  => 'freak_fc_grid'
        )
    )
);

$wp_customize->add_setting(
    'freak_grid_rows',
    array( 'sanitize_callback' => 'freak_sanitize_positive_number' )
);

$wp_customize->add_control(
    'freak_grid_rows', array(
        'settings' => 'freak_grid_rows',
        'label'    => __( 'Max No. of Posts in the Grid. Enter 0 to Disable the Grid.', 'freak' ),
        'section'  => 'freak_fc_grid',
        'type'     => 'number',
        'default'  => '0'
    )
);
}
add_action( 'customize_register', 'freak_customize_register_fp' );
