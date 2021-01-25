<?php 

/*
===> Register Widgets -------------------------------------------
*/

function register_primary_sidebar() {
    
    /** Register Sidebar **/
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => __( 'Primary Sidebar' , 'credit'),
            'description'   => __( 'Add Widgets Here' , 'credit'),
            'before_widget' => '<div class="single-widget-area">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="widget-heading"><div class="line"></div><h4>',
            'after_title'   => '</h4></div>',
        )
    );
    /** Register Sidebar **/
    register_sidebar(
        array(
            'id'            => 'footer-widgets',
            'name'          => __( 'Footer Area Widgets' , 'credit'),
            'description'   => __( 'Add Footer Widgets Here' , 'credit'),
            'before_widget' => '<div class="col-12 col-sm-6 col-lg-4"><div class="single-footer-widget">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        )
    );
    /** Register Sidebar **/
    register_sidebar(
        array(
            'id'            => 'subscribe-widgets',
            'name'          => __( 'Subscribe Widgets' , 'credit'),
            'description'   => __( 'Add Subscribe Widgets Here' , 'credit'),
            'before_widget' => '<div class="nl-content text-center">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        )
    );
    /** Register Sidebar **/
    register_sidebar(
        array(
            'id'            => 'contact-widgets',
            'name'          => __( 'The News Widget' , 'credit'),
            'description'   => __( 'Add News Widget Here' , 'credit'),
            'before_widget' => '<div class="col-12 col-md-6 col-lg-4"><div class="news--area mb-100 wow fadeInUp" data-wow-delay="500ms">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="section-heading mb-50"> <div class="line"></div><h2>',
            'after_title'   => '</h2>',
        )
    );
}

add_action('widgets_init', 'register_primary_sidebar');


?>
