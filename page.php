<?php
/**
 * The template for displaying pages
 */

	get_header();

	while( have_posts() ){ the_post();
	
		$post_option = onepagepro_get_post_option(get_the_ID());
		$show_content = (empty($post_option['show-content']) || $post_option['show-content'] == 'enable')? true: false;

		if( empty($post_option['sidebar']) ){
			$sidebar_type = 'none';
			$sidebar_left = '';
			$sidebar_right = '';
		}else{
			$sidebar_type = empty($post_option['sidebar'])? 'none': $post_option['sidebar'];
			$sidebar_left = empty($post_option['sidebar-left'])? '': $post_option['sidebar-left'];
			$sidebar_right = empty($post_option['sidebar-right'])? '': $post_option['sidebar-right'];
		}

		if( $sidebar_type == 'none' ){

			// content from wordpress editor area
			ob_start();
			the_content();
			$content = ob_get_contents();
			ob_end_clean();

			if( ($show_content && trim($content) != "") || post_password_required() ){
				echo '<div class="onepagepro-outer-content-wrap">';
				echo '<div class="onepagepro-content-container onepagepro-container">';
				echo '<div class="onepagepro-content-area onepagepro-item-pdlr onepagepro-sidebar-style-none clearfix" >';
				echo gdlr_core_escape_content($content);
				echo '</div>'; // onepagepro-content-area
				echo '</div>'; // onepagepro-content-container
				echo '</div>'; // onepagepro-outer-content-wrap
			}

			if( !post_password_required() ){
				do_action('gdlr_core_print_page_builder');
			}

			// comments template
			if( comments_open() || get_comments_number() ){
				echo '<div class="onepagepro-bototm-page-builder-outer-content-wrap" >';
				echo '<div class="onepagepro-page-comment-container onepagepro-container" >';
				echo '<div class="onepagepro-page-comments onepagepro-item-pdlr" >';
				comments_template();
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}

		}else{

			echo '<div class="onepagepro-outer-content-wrap">';
			echo '<div class="onepagepro-content-container onepagepro-container">';
			echo '<div class="' . onepagepro_get_sidebar_wrap_class($sidebar_type) . '" >';

			// sidebar content
			echo '<div class="' . onepagepro_get_sidebar_class(array('sidebar-type'=>$sidebar_type, 'section'=>'center')) . '" >';
			
			// content from wordpress editor area
			ob_start();
			the_content();
			$content = ob_get_contents();
			ob_end_clean();

			if( ($show_content && trim($content) != "") || post_password_required() ){
				echo '<div class="onepagepro-content-area onepagepro-item-pdlr" >' . $content . '</div>';
			}

			if( !post_password_required() ){
				do_action('gdlr_core_print_page_builder');
			}

			// comments template
			if( comments_open() || get_comments_number() ){
				echo '<div class="onepagepro-page-comments onepagepro-item-pdlr" >';
				comments_template();
				echo '</div>';
			}

			echo '</div>'; // onepagepro-get-sidebar-class

			// sidebar left
			if( $sidebar_type == 'left' || $sidebar_type == 'both' ){
				echo onepagepro_get_sidebar($sidebar_type, 'left', $sidebar_left);
			}

			// sidebar right
			if( $sidebar_type == 'right' || $sidebar_type == 'both' ){
				echo onepagepro_get_sidebar($sidebar_type, 'right', $sidebar_right);
			}

			echo '</div>'; // onepagepro-get-sidebar-wrap-class
		 	echo '</div>'; // onepagepro-content-container
		 	echo '</div>'; // onepagepro-outer-content-wrap

		}
		
	} // while

	get_footer(); 
?>