<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenhcuoi
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

<div id="comments" class="comments-area post-video-showcase-comment">
  <h1>Section Comment</h1>

  <?php ob_start(); ?>
  <div class="media">
    <div class="media-left">
      <?php echo get_avatar(
				$comment, 
				$size = '76', 
				$default = 'https://imgix.bustle.com/uploads/image/2020/11/5/cbe5f6dc-a0d8-4b6a-bd01-350c0a3784a5-bluesus.png?w=350&h=298&auto=format%2Ccompress&cs=srgb&q=70&fit=crop&crop=faces',
				$alt = 'avatar',
				array( 'class' => array( 'media-object' ))
		); ?>
    </div>

    <div class="media-body">
      <div class="form-group">
        <textarea class="form-control" id="comment" name="comment" placeholder="Viết Bình Luận..."
          aria-required="true"></textarea>
      </div>
      <input name="submit" class="btn btn-accent text-uppercase" type="submit" id="submit-comment" value="Post comment">
    </div>
  </div>
  <?php $content = ob_get_contents(); ob_end_clean(); ?>

  <?php
	$comment_send = 'Đăng Nhận Xét';
	$comment_field = $content;
	
	$args = array(
		'fields' => array(),
		'comment_field' => __( $comment_field ),
		'comment_notes_after' => '',
		'title_reply' => '<div class="crunchify-text"> <h5>Please Post Your Comments & Reviews</h5></div>',
		'label_submit' => __( $comment_send ),
		'submit_button' => ''
		
	);
	comment_form($args);

	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
  <h2 class="comments-title">
    <?php
			$kenhcuoi_comment_count = get_comments_number();
			if ( '1' === $kenhcuoi_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'kenhcuoi' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $kenhcuoi_comment_count, 'comments title', 'kenhcuoi' ) ),
					number_format_i18n( $kenhcuoi_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
  </h2><!-- .comments-title -->

  <ol class="comment-list list-unstyled">
    <?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'callback' => 'better_comments'
				)
			);
			?>
  </ol><!-- .comment-list -->

  <?php
		the_comments_pagination();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>

  <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'kenhcuoi' ); ?></p>

  <?php
	endif;
	
	endif; // Check for have_comments().
  ?>

</div><!-- #comments -->