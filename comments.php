<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package credit
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$credit_comment_count = get_comments_number();
			if ( '1' === $credit_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'credit' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $credit_comment_count, 'comments title', 'credit' ) ),
					number_format_i18n( $credit_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'short_ping' => true,
					'avatar_size' => 60,
					'callback' => 'custom_comment',
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		// function for pagination
		the_comments_navigation( array(
			'screen_reader_text'=> __('Pagination','credit'),
			'prev_text'=> __('Previous','credit'),
			'next_text'=> __('Next','credit'),
		)

		);

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'credit' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	// Code for custom comments form 

	$commenter = wp_get_current_commenter();
	if ( isset($args['format']));
	$args['format'] = current_theme_supports('html5', 'comment-form') ? 'html5' : 'xhtml';
	$req = get_option('require_name_email');
	$aria_req = ($req ? "aria-required = 'true' " : '');
	$html_req = ($req ? "required = 'required' " : '');
	$html5 = 'html5' === $args['format'];

	$comments_args = array(
        // change the title of send button 
		'label_submit'=> 'Submit Comment',
		'class_submit' => 'btn credit-btn mt-30',
		'id_form'              => '',
        'id_submit'            => '',
        'class_container'      => 'post-a-comment-area mb-100 clearfix',
        'class_form'           => 'contact-form-area row',
        // change the title of the reply section
		'title_reply'=>'Leave a reply',
		'title_reply_to'       => __( 'Leave a Reply to %s', 'credit' ),
        'title_reply_before'   => '<h4 class="mb-50">',
        'title_reply_after'    => '</h4>',
        'cancel_reply_before'  => ' <small>',
        'cancel_reply_after'   => '</small>',
		'cancel_reply_link'    => __( 'Cancel reply', 'credit' ),
        'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
        'submit_field'         => '<div class="form-submit">%1$s %2$s</div>',
        'format'               => 'xhtml',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_form_top' => 'ds',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<div class="comment-form-comment col-12"><textarea id="comment" class="form-control" name="comment" placeholder="Write a Comment....* " aria-required="true"></textarea></div>',
        'fields' => apply_filters( 'comment_form_default_fields', array(

		'author' =>
		'<div class="col-12 col-lg-6 comment-form-author">'  .
		'<input id="author" class="blog-form-input form-control" placeholder="Name* " name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30"' . $aria_req . ' /></div>',

		'email' =>
		'<div class="comment-form-email col-12 col-lg-6">'.
		'<input id="email" class="blog-form-input form-control" placeholder="Email* " name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		'" size="30"' . $aria_req . ' /></div>',

		'url' =>
		'<div class="comment-form-url col-12">'.
		'<input id="url" class="blog-form-input form-control" placeholder="Website" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" /></div>',

		// Now we will add our new privacy checkbox optin
		'cookies' => '',
		
		)
	),
	);

	comment_form($comments_args);


	?>

</div><!-- #comments -->
