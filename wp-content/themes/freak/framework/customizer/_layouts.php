<?php
// Layout and Design
function freak_customize_register_layouts( $wp_customize ) {
    $wp_customize->add_panel( 'freak_design_panel', array(
        'priority'       => 3,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Design & Layout','freak'),
    ) );

    $wp_customize->add_section(
        'freak_static_bar_options',
        array(
            'title'     => __('Static Bar','freak'),
            'priority'  => 0,
            'panel'     => 'freak_design_panel'
        )
    );

    $wp_customize->add_setting(
        'freak_disable_static_bar',
        array( 'sanitize_callback' => 'freak_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'freak_disable_static_bar', array(
            'settings' => 'freak_disable_static_bar',
            'label'    => __( 'Disable Static Bar.','freak' ),
            'section'  => 'freak_static_bar_options',
            'type'     => 'checkbox',
            'default'  => false
        )
    );



    $wp_customize->add_section(
        'freak_design_options',
        array(
            'title'     => __('Blog Layout','freak'),
            'priority'  => 0,
            'panel'     => 'freak_design_panel'
        )
    );

    $wp_customize->add_setting(
        'freak_blog_layout',
        array( 'sanitize_callback' => 'freak_sanitize_blog_layout' )
    );

    function freak_sanitize_blog_layout( $input ) {
        if ( in_array($input, array('grid','freak') ) )
            return $input;
        else
            return '';
    }

    $wp_customize->add_control(
        'freak_blog_layout',array(
            'label' => __('Select Layout','freak'),
            'settings' => 'freak_blog_layout',
            'section'  => 'freak_design_options',
            'type' => 'select',
            'choices' => array(
                'freak' => __('Freak Layout','freak'),
                'grid' => __('Basic Blog Layout','freak'),
            )
        )
    );

    $wp_customize->add_section(
        'freak_sidebar_options',
        array(
            'title'     => __('Sidebar Layout','freak'),
            'priority'  => 0,
            'panel'     => 'freak_design_panel'
        )
    );

    $wp_customize->add_setting(
        'freak_disable_sidebar',
        array( 'sanitize_callback' => 'freak_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'freak_disable_sidebar', array(
            'settings' => 'freak_disable_sidebar',
            'label'    => __( 'Disable Sidebar Everywhere.','freak' ),
            'section'  => 'freak_sidebar_options',
            'type'     => 'checkbox',
            'default'  => false
        )
    );

    $wp_customize->add_setting(
        'freak_disable_sidebar_home',
        array( 'sanitize_callback' => 'freak_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'freak_disable_sidebar_home', array(
            'settings' => 'freak_disable_sidebar_home',
            'label'    => __( 'Disable Sidebar on Home/Blog.','freak' ),
            'section'  => 'freak_sidebar_options',
            'type'     => 'checkbox',
            'active_callback' => 'freak_show_sidebar_options',
            'default'  => false
        )
    );

    $wp_customize->add_setting(
        'freak_disable_sidebar_front',
        array( 'sanitize_callback' => 'freak_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'freak_disable_sidebar_front', array(
            'settings' => 'freak_disable_sidebar_front',
            'label'    => __( 'Disable Sidebar on Front Page.','freak' ),
            'section'  => 'freak_sidebar_options',
            'type'     => 'checkbox',
            'active_callback' => 'freak_show_sidebar_options',
            'default'  => false
        )
    );


    $wp_customize->add_setting(
        'freak_sidebar_width',
        array(
            'default' => 4,
            'sanitize_callback' => 'freak_sanitize_positive_number' )
    );

    $wp_customize->add_control(
        'freak_sidebar_width', array(
            'settings' => 'freak_sidebar_width',
            'label'    => __( 'Sidebar Width','freak' ),
            'description' => __('Min: 25%, Default: 33%, Max: 40%','freak'),
            'section'  => 'freak_sidebar_options',
            'type'     => 'range',
            'active_callback' => 'freak_show_sidebar_options',
            'input_attrs' => array(
                'min'   => 3,
                'max'   => 5,
                'step'  => 1,
                'class' => 'sidebar-width-range',
                'style' => 'color: #0a0',
            ),
        )
    );

    /* Active Callback Function */
    function freak_show_sidebar_options($control) {

        $option = $control->manager->get_setting('freak_disable_sidebar');
        return $option->value() == false ;

    }

    class Freak_Custom_CSS_Control extends WP_Customize_Control {
        public $type = 'textarea';

        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="8" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
            <?php
        }
    }

    $wp_customize-> add_section(
        'freak_custom_codes',
        array(
            'title'			=> __('Custom CSS','freak'),
            'description'	=> __('Enter your Custom CSS to Modify design.','freak'),
            'priority'		=> 11,
            'panel'			=> 'freak_design_panel'
        )
    );

    $wp_customize->add_setting(
        'freak_custom_css',
        array(
            'default'		=> '',
            'sanitize_callback'	=> 'freak_sanitize_text'
        )
    );

    $wp_customize->add_control(
        new Freak_Custom_CSS_Control(
            $wp_customize,
            'freak_custom_css',
            array(
                'section' => 'freak_custom_codes',
                'settings' => 'freak_custom_css'
            )
        )
    );

    function freak_sanitize_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }

    $wp_customize-> add_section(
        'freak_custom_footer',
        array(
            'title'			=> __('Custom Footer Text','freak'),
            'description'	=> __('Enter your Own Copyright Text.','freak'),
            'priority'		=> 11,
            'panel'			=> 'freak_design_panel'
        )
    );

    $wp_customize->add_setting(
        'freak_footer_text',
        array(
            'default'		=> '',
            'sanitize_callback'	=> 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'freak_footer_text',
        array(
            'section' => 'freak_custom_footer',
            'settings' => 'freak_footer_text',
            'type' => 'text'
        )
    );
}
add_action( 'customize_register', 'freak_customize_register_layouts' );