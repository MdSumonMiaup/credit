<?php 

require_once get_template_directory() . '/inc/theme-setup.php'; // Theme Setup options and defaults
require_once get_template_directory() . '/inc/enqueue.php'; // Loading Styles and Scripts 
require_once get_template_directory() . '/inc/custom-widgets.php'; // for custom widgets
require_once get_template_directory() . '/inc/comment-listing.php'; // For Comments Style
require_once get_template_directory() . '/inc/customize-functions.php'; // For Customization options
require_once get_template_directory() . '/assets/navwalker.php'; // For dropdown support 
require_once get_template_directory() .'/theme-options/codestar-framework.php'; // active cs
require_once get_template_directory() .'/inc/codestar-options.php'; // codestar options
$options = get_option( 'my_framework' ); // for geting value 
require_once get_template_directory() . '/inc/register-sidebar.php'; // For Registering Sidebar
require_once get_template_directory().'/inc/credit-activation.php'; // tgmpa activation for required plugin
require_once get_template_directory().'/inc/credit-demo-import.php'; // tgmpa activation for required plugin
require_once get_template_directory().'/inc/acf-data.php'; // custom field

// Register Nav Menu
register_nav_menus( array(
    'primary_menu' => __( 'Primary Menu', 'credit' ),
    'footer_menu'  => __( 'Footer Menu', 'credit' ),
) );

/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

// custom thumbnail size
add_image_size( 'custom-size', 220, 200, true );

if ( ! isset( $content_width ) ) $content_width = 900;


function credit_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'credit_add_editor_styles' );


function my_export_option_keys( $keys ) {
    $keys[] = 'my_option_key';
    $keys[] = 'another_option_key';
    return $keys;
}

add_filter( 'cei_export_option_keys', 'my_export_option_keys' );


