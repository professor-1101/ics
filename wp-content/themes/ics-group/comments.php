<?php
/**
 * The template for displaying comments
 *
 * @package ICS_Group
 * @since 1.0.0
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area" style="margin-top: 4rem;">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title font-heading">
			<?php
			$comment_count = get_comments_number();
			if ( '1' === $comment_count ) {
				printf(
					esc_html__( 'One comment on &ldquo;%s&rdquo;', 'ics-group' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					esc_html( _n( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $comment_count, 'ics-group' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>

		<ol class="comment-list" style="list-style: none; padding: 0;">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 64,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation(
			array(
				'prev_text' => '<span class="btn btn-secondary">' . __( '← Older Comments', 'ics-group' ) . '</span>',
				'next_text' => '<span class="btn btn-secondary">' . __( 'Newer Comments →', 'ics-group' ) . '</span>',
			)
		);
		?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ics-group' ); ?></p>
		<?php endif; ?>

	<?php endif; ?>

	<?php
	comment_form(
		array(
			'title_reply'         => esc_html__( 'Leave a Comment', 'ics-group' ),
			'title_reply_before'  => '<h2 id="reply-title" class="comment-reply-title font-heading">',
			'title_reply_after'   => '</h2>',
			'comment_field'       => '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Comment', 'ics-group' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" style="width: 100%; padding: 1rem; border: 1px solid var(--color-gray-300); border-radius: var(--radius-md);"></textarea></p>',
			'submit_button'       => '<button type="submit" class="btn btn-primary">%4$s</button>',
			'class_submit'        => 'submit',
			'label_submit'        => esc_html__( 'Post Comment', 'ics-group' ),
			'cancel_reply_link'   => esc_html__( 'Cancel reply', 'ics-group' ),
			'format'              => 'xhtml',
			'logged_in_as'        => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'ics-group' ), get_edit_user_link(), wp_get_current_user()->display_name, wp_logout_url( apply_filters( 'the_permalink', get_permalink( get_the_ID() ) ) ) ) . '</p>',
			'comment_notes_before' => '',
			'comment_notes_after' => '',
		)
	);
	?>

</div>
