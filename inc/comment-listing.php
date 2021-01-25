<?php

// Custom Comment Listing -------------------------

function custom_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body comment-content"><?php
    } ?>
        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } ?>
            
        </div><?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'credit' ); ?></em><br/><?php 
        } ?>
        <div class="comment-meta commentmetadata">
            <div class="d-flex">
                <?php printf( get_comment_author_link() ); ?>
                <a class="post-date" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                    /* translators: 1: date, 2: time */
                    printf( 
                        __('%1$s at %2$s', 'credit'), 
                        get_comment_date(),  
                        get_comment_time() 
                    ); ?>
                </a>
                <a class="reply"><?php 
                    comment_reply_link( 
                        array_merge( 
                            $args, 
                            array( 
                                'add_below' => $add_below, 
                                'depth'     => $depth, 
                                'max_depth' => $args['max_depth'] 
                            ) 
                        ) 
                    ); ?>
                </a>
                <?php 
                edit_comment_link( __( '(Edit)', 'credit' ), '  ', '' ); ?>
                
            </div>
            <?php comment_text(); ?>
        </div>
 
        <?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;

}

// Same page comment reply with no reload-----------------------------

function credit_enqueue_comments_reply() {

    if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
        // Load comment-reply.js (into footer)
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action(  'wp_enqueue_scripts', 'credit_enqueue_comments_reply' );


// Comment box filtered to the bottom-----------------------------------

function credit_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
    }
    
add_filter( 'comment_form_fields', 'credit_move_comment_field_to_bottom' );