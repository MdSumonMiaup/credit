<?php 

/*
*** Admin Apearance Customize Screen-------------------------
*/

function credit_information_edit($wp_customize) {
    // Create Main Section -----------------------------------------------------
    $wp_customize->add_panel( 'theme_options', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Theme Options', 'credit'),
        'description'    => __('Several settings pertaining my theme', 'credit'),
    ) );

    // Sub section for Preloader Setting Option --------------------------------
    $wp_customize->add_section( 'credit_preloader', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Preloader', 'credit'),
        'description'    =>  __('Preloader configuration', 'credit'),
        'panel'          => 'theme_options',
    ) );
    
    // For Headline 
    $wp_customize->add_setting('credit_preloader_option', array(
        'default' => 'On',
        'sanitize_callback' => 'esc_attr',
        
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'credit_preloader_option', array(
        'label' => __('Preloader', 'credit'),
        'section' => 'credit_preloader',
        'settings' => 'credit_preloader_option',
        'type' => 'select',
        'choices' => array(
            'On' => 'On',
            'Off' => 'Off',
        ),
    )));
    // Sub section for header information ------------------------------------
    $wp_customize->add_section( 'header_information', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Header Information', 'credit'),
        'description'    =>  __('Header elements configuration', 'credit'),
        'panel'          => 'theme_options',
    ) );

    // For Address ---------
    $wp_customize->add_setting('credit_header_address', array(
        'default' => __('25 th Street Avenue, Los Angeles, CA', 'credit'),
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'credit_header_address', array(
        'label' => __('Address', 'credit'),
        'section' => 'header_information',
        'settings' => 'credit_header_address',
    )));

    // For Email ---------
    $wp_customize->add_setting('credit_header_email', array(
        'default' => __('office@yourdomain.com', 'credit'),
        'sanitize_callback' => 'esc_attr',
        
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'credit_header_info_email', array(
        'label' => __('Email', 'credit'),
        'section' => 'header_information',
        'settings' => 'credit_header_email',
    )));

    // For Number ---------
    $wp_customize->add_setting('credit_header_phone', array(
        'default' => __('+8801798001344', 'credit'),
        'sanitize_callback' => 'esc_attr',
        
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'credit_header_info_phone', array(
        'label' => __('Phone', 'credit'),
        'section' => 'header_information',
        'settings' => 'credit_header_phone',
    )));

    // Create sub section for Subscribe Section Information-------------------------
    $wp_customize->add_section( 'subscribe_information', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Subscribe Section', 'credit'),
        'description'    =>  __('Subscribe elements configuration', 'credit'),
        'panel'          => 'theme_options',
    ) );
    
    // For Headline ---------
    $wp_customize->add_setting('credit_subscribe_bg', array(
        'default' => '',
        'sanitize_callback' => 'esc_attr',
        
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'credit_subscribe_bg', array(
        'label' => __('Add Image', 'credit'),
        'section' => 'subscribe_information',
        'settings' => 'credit_subscribe_bg',
    )));

    // Sub section Footer Logo Option --------------------------------
    $wp_customize->add_section( 'footer_edit', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Footer', 'credit'),
        'description'    =>  __('Footer Logo Set', 'credit'),
        'panel'          => 'theme_options',
    ) );
    $wp_customize->add_section('footer_edit', array(
        'title' => __('Edit Footer', 'credit'),
    ));
    
    // For Headline ---------
    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => 'Add Footer Logo',
        'section' => 'footer_edit',
        'settings' => 'footer_logo',
        
        ),
    ));


}
add_action( 'customize_register', 'credit_information_edit' );




?>