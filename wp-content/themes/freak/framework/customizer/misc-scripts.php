<?php
//upgrade
function freak_customize_register_misc( $wp_customize ) {
$wp_customize->add_section(
    'freak_sec_upgrade',
    array(
        'title'     => __('Discover freak Pro','freak'),
        'priority'  => 1,
    )
);

$wp_customize->add_setting(
    'freak_upgrade',
    array( 'sanitize_callback' => 'esc_textarea' )
);

$wp_customize->add_control(
    new WP_Customize_Upgrade_Control(
        $wp_customize,
        'freak_upgrade',
        array(
            'label' => __('More of Everything','freak'),
            'description' => __('Freak Pro has more of Everything. More New Features, More Options, More Colors, More Fonts, More Layouts, Configurable Slider, Inbuilt Advertising Options, Multiple Skins, More Widgets, and a lot more options and comes with Dedicated Support. To Know More about the Pro Version, click here: <a href="http://rohitink.com/product/freak-pro/">Upgrade to Pro</a>.','freak'),
            'section' => 'freak_sec_upgrade',
            'settings' => 'freak_upgrade',
        )
    )
);
}
add_action( 'customize_register', 'freak_customize_register_misc' );