<?php
/**
 * The template for displaying comments
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="onepagepro-comments-area">
<?php 
	// print comment response
	if( have_comments() ){

		// comment head
		echo '<div class="onepagepro-comments-title" >';
		$comment_number = get_comments_number();
		if( $comment_number > 1 ){
			printf(esc_html__('%s Responses', 'onepagepro'), number_format_i18n($comment_number));
		}else{ 
			printf(esc_html__('%s Response', 'onepagepro'), number_format_i18n($comment_number));
		}
		echo '</div>'; // onepagepro-comments-title
		
		the_comments_navigation();
		echo '<ol class="comment-list">';
		wp_list_comments(array(
			'style'       => 'ol',
			'short_ping'  => true,
			'avatar_size' => 90,
			'callback' 	  => 'onepagepro_comment_list'
		));
		echo '</ol>';
		the_comments_navigation();

	} 

	// print comment form
	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_email');
	$aria_req = ($req ? " aria-required='true'" : '');	
	$consent  = empty($commenter['comment_author_email']) ? '':' checked="checked"';
	
	$args = array(
		'id_form'           => 'commentform',
		'id_submit'         => 'submit',
		'title_reply'       => esc_html__('Leave a Reply', 'onepagepro'),
		'title_reply_to'    => esc_html__('Leave a Reply to %s', 'onepagepro'),
		'cancel_reply_link' => esc_html__('Cancel Reply', 'onepagepro'),
		'label_submit'      => esc_html__('Post Comment', 'onepagepro'),
		'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title onepagepro-content-font">',
		'title_reply_after'  => '</h4>',
		'comment_notes_before' => '',
		'comment_notes_after' => '',

		'must_log_in' => '<p class="must-log-in">' .
			sprintf( wp_kses(__('You must be <a href="%s">logged in</a> to post a comment.', 'onepagepro'), array('a'=>array('href'=>array(),'title'=>array()))),
			wp_login_url(apply_filters( 'the_permalink', get_permalink())) ) . '</p>',
		'logged_in_as' => '<p class="logged-in-as">' .
			sprintf( wp_kses(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'onepagepro'), array('a'=>array('href'=>array(),'title'=>array()))),
			admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink( ))) ) . '</p>',

		'fields' => apply_filters('comment_form_default_fields', array(
			'author' =>
				'<div class="comment-form-head"><div class="onepagepro-comment-form-author" >' .
				'<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
				'" placeholder="' . esc_attr(esc_html__('Name*', 'onepagepro')) . '" size="30"' . $aria_req . ' /></div>',
			'email' => 
				'<div class="onepagepro-comment-form-email" ><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" placeholder="' . esc_attr(esc_html__('Email*', 'onepagepro')) . '" size="30"' . $aria_req . ' /></div>',
			'url' =>
				'<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) .
				'" placeholder="' . esc_attr(esc_html__('Website', 'onepagepro')) . '" size="30" /><div class="clear"></div></div>',
			'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
	            '<label for="wp-comment-cookies-consent">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'onepagepro') . '</label></p>',	

		)),
		'comment_field' =>  '<div class="comment-form-comment">' .
			'<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . esc_attr(esc_html__('Comment*', 'onepagepro')) . '" ></textarea></div>'
		
	);
	comment_form($args); 

?>
</div><!-- onepagepro-comments-area -->