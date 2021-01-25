<?php 

// Loading Scripts //

function credit_scipts() {
    //wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'classy-nav', get_template_directory_uri() . '/assets/css/classy-nav.css');
    wp_enqueue_style( 'credit-icon', get_template_directory_uri() . '/assets/css/credit-icon.css');
    // wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'font-awesome-5', 'https://use.fontawesome.com/releases/v5.3.0/css/all.css', array(), '5.3.0' );
    wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,600,700');
	// time() function can be used as version
    wp_enqueue_style( 'main', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    

    // Enqueue Javascript

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery/jquery-2.2.4.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'proper', get_template_directory_uri() . '/assets/js/bootstrap/popper.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins/plugins.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'active', get_template_directory_uri() . '/assets/js/active.js', array(), '1.0.0', 'true' );
}

add_action( 'wp_enqueue_scripts', 'credit_scipts' );


?>