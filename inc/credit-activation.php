<?php 

require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';

function credit_activattion() {

    // Redquire Plugins
    $plugins = array(
        array(
            'name'               => __('Contact Form 7', 'credit'),
			'slug'               => 'contact-form-7', 
			'required'           => true,
        ),
        array(
            'name'               => __('One Click Demo Import', 'credit'),
			'slug'               => 'one-click-demo-import', 
			'required'           => true,
        ),
        array(
            'name'               => __('Advanced Custom Fields', 'credit'),
			'slug'               => 'advanced-custom-fields', 
			'required'           => true,
        ),
        array(
            'name'               => __('Elementor Website Builder', 'credit'),
			'slug'               => 'elementor', 
			'required'           => false,
        ),
        array(
            'name'               => __('Email Subscribers & Newsletters', 'credit'),
			'slug'               => 'email-subscribers', 
			'required'           => true,
        ),
        array(
            'name'               => __('Custom Post Type', 'credit'),
            'slug'               => 'credit-cpt', 
            'source'             => 'https://drive.google.com/u/0/uc?id=1blb2rs-V-2ss8azhuBQcoAyVtPkTWiHA&export=download',
			'required'           => true,
        ),
    );

    // for configuration
    $config = array(
        'id'           => 'credit_plugin_activation',
		'menu'         => 'credit_plugin_activation',
        'parent_slug'  => 'themes.php',           
		'has_notices'  => true,
    );

    tgmpa($plugins, $config);

}
add_action('tgmpa_register', 'credit_activattion');