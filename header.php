<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Stylesheet -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Preloader -->
    <?php if(get_theme_mod('credit_preloader_option') == 'On' ) { ?>
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    <?php } ?>
    

    <!-- ##### Header Area Start ##### -->
    <header class="header-area" id="header">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url('/') ) ?>"><?php
                                if ( function_exists( 'the_custom_logo' ) ) {
                                    the_custom_logo();
                                } else {
                                    echo '<h1>'. get_bloginfo( 'site-title' ) .'</h1>' ;
                                }
                            ?></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="<?php echo esc_html( get_theme_mod('credit_header_address') ); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/placeholder.png" alt=""> 
                                <span><?php echo esc_html( get_theme_mod('credit_header_address') ); ?></span>
                            </a>

                            <a href="mailto:<?php echo esc_url( get_theme_mod('credit_header_email') ); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo esc_attr( get_theme_mod('credit_header_email') ); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/message.png" alt=""> 
                                <span><?php echo esc_html( get_theme_mod('credit_header_email') ); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <?php 
                                if (has_nav_menu( 'primary_menu' )) {
                                    wp_nav_menu( [
                                        'theme_location' => 'primary_menu',
                                        'container' => 'div',
                                        'container_class' => 'classynav',
                                        'menu_class' => 'nav-ul',
                                        'depth' => '3',
                                        'fallback_cb' => true,
                                    ] );
                                } 
                            ?>

                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="tel:<?php echo esc_url( get_theme_mod('credit_header_phone') ); ?>"><img src="<?php echo esc_url(get_template_directory_uri());?>/img/core-img/call2.png" alt=""> <?php echo esc_html( get_theme_mod('credit_header_phone') ); ?></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->