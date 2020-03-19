<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); 

	while( have_posts() ){ the_post();

		// print header title
		if( get_post_type() == 'post' ){
			get_template_part('header/header', 'title-blog');
		}

		$post_option = onepagepro_get_post_option(get_the_ID());
		$post_option['show-content'] = empty($post_option['show-content'])? 'enable': $post_option['show-content']; 

		if( empty($post_option['sidebar']) || $post_option['sidebar'] == 'default' ){
			$sidebar_type = onepagepro_get_option('general', 'blog-sidebar', 'none');
			$sidebar_left = onepagepro_get_option('general', 'blog-sidebar-left');
			$sidebar_right = onepagepro_get_option('general', 'blog-sidebar-right');
		}else{
			$sidebar_type = empty($post_option['sidebar'])? 'none': $post_option['sidebar'];
			$sidebar_left = empty($post_option['sidebar-left'])? '': $post_option['sidebar-left'];
			$sidebar_right = empty($post_option['sidebar-right'])? '': $post_option['sidebar-right'];
		}

		if( $sidebar_type != 'none' || $post_option['show-content'] == 'enable' ){
			echo '<div class="onepagepro-outer-content-wrap">';

			// for feature image above content style
			$post_type = get_post_type();
			if( $post_type == 'post' ){
				if( empty($post_option['blog-feature-image']) || $post_option['blog-feature-image'] == 'default' ){
					$feature_image_pos = onepagepro_get_option('general', 'default-blog-feature-image', 'content');
				}else{
					$feature_image_pos = $post_option['blog-feature-image'];
				}
				
				$post_format = get_post_format();
				if( empty($post_format) ){
					if( $feature_image_pos == 'above-content' ){
						$feature_image = get_post_thumbnail_id();
						if( !empty($feature_image) ){
							$thumbnail_size = onepagepro_get_option('general', 'blog-thumbnail-size', 'full');

							echo '<div class="onepagepro-single-article-thumbnail onepagepro-media-image" >';
							echo gdlr_core_get_image($feature_image, $thumbnail_size);
							echo '</div>';
						}
					}
				}
			}

			echo '<div class="onepagepro-content-container onepagepro-container">';
			echo '<div class="' . onepagepro_get_sidebar_wrap_class($sidebar_type) . '" >';

			// sidebar content
			echo '<div class="' . onepagepro_get_sidebar_class(array('sidebar-type'=>$sidebar_type, 'section'=>'center')) . '" >';
			echo '<div class="onepagepro-content-wrap onepagepro-item-pdlr clearfix" >';

			// single content
			if( empty($post_option['show-content']) || $post_option['show-content'] == 'enable' ){
				echo '<div class="onepagepro-content-area" >';
				if( in_array(get_post_format(), array('aside', 'quote', 'link')) ){
					get_template_part('content/content', get_post_format());
				}else{
					get_template_part('content/content', 'single');
				}
				echo '</div>';
			}else{ 
				if( empty($post_option['blog-title-style']) || $post_option['blog-title-style'] == 'default' ){
					$title_style = onepagepro_get_option('general', 'default-blog-title-style', 'small');
				}else{	
					$title_style = $post_option['blog-title-style'];
				}

				if( $title_style == 'inside-content' ){
					echo '<div class="onepagepro-content-area" >';
					get_template_part('content/content-single', 'title');
					echo '</div>';
				}
			}

		}else if( $post_option['show-content'] == 'disable' ){ 
			if( empty($post_option['blog-title-style']) || $post_option['blog-title-style'] == 'default' ){
				$title_style = onepagepro_get_option('general', 'default-blog-title-style', 'small');
			}else{	
				$title_style = $post_option['blog-title-style'];
			}

			if( $title_style == 'inside-content' ){
				echo '<div class="onepagepro-outer-content-wrap onepagepro-item-pdlr clearfix" >';
				echo '<div class="onepagepro-content-container onepagepro-container">';
				echo '<div class="onepagepro-content-wrap onepagepro-item-pdlr clearfix" >';
				echo '<div class="onepagepro-content-area" >';
				get_template_part('content/content-single', 'title');
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
		}

		if( !post_password_required() ){
			if( $sidebar_type != 'none' ){
				echo '<div class="onepagepro-page-builder-wrap onepagepro-item-rvpdlr" >';
				do_action('gdlr_core_print_page_builder');
				echo '</div>';

			// sidebar == 'none'
			}else{
				ob_start();
				do_action('gdlr_core_print_page_builder');
				$pb_content = ob_get_contents();
				ob_end_clean();

				if( !empty($pb_content) ){
					if( $post_option['show-content'] == 'enable' ){
						echo '</div>'; // onepagepro-content-area
						echo '</div>'; // onepagepro_get_sidebar_class
						echo '</div>'; // onepagepro_get_sidebar_wrap_class
						echo '</div>'; // onepagepro_content_container
						echo '</div>'; // onepagepro-outer-content-wrap
					}
					echo gdlr_core_escape_content($pb_content);
					echo '<div class="onepagepro-bototm-page-builder-outer-content-wrap" >';
					echo '<div class="onepagepro-bottom-page-builder-container onepagepro-container" >'; // onepagepro-content-area
					echo '<div class="onepagepro-bottom-page-builder-sidebar-wrap onepagepro-sidebar-style-none" >'; // onepagepro_get_sidebar_class
					echo '<div class="onepagepro-bottom-page-builder-sidebar-class" >'; // onepagepro_get_sidebar_wrap_class
					echo '<div class="onepagepro-bottom-page-builder-content onepagepro-item-pdlr" >'; // onepagepro_content_container
				}
			}
		}

		// social share
		if( onepagepro_get_option('general', 'blog-social-share', 'enable') == 'enable' ){
			if( class_exists('gdlr_core_pb_element_social_share') ){
				$share_count = (onepagepro_get_option('general', 'blog-social-share-count', 'enable') == 'enable')? 'counter': 'none';

				echo '<div class="onepagepro-single-social-share onepagepro-item-rvpdlr" >';
				echo gdlr_core_pb_element_social_share::get_content(array(
					'social-head' => $share_count,
					'layout'=>'left-text', 
					'text-align'=>'center',
					'facebook'=>onepagepro_get_option('general', 'blog-social-facebook', 'enable'),
					'linkedin'=>onepagepro_get_option('general', 'blog-social-linkedin', 'enable'),
					'google-plus'=>onepagepro_get_option('general', 'blog-social-google-plus', 'enable'),
					'pinterest'=>onepagepro_get_option('general', 'blog-social-pinterest', 'enable'),
					'stumbleupon'=>onepagepro_get_option('general', 'blog-social-stumbleupon', 'enable'),
					'twitter'=>onepagepro_get_option('general', 'blog-social-twitter', 'enable'),
					'email'=>onepagepro_get_option('general', 'blog-social-email', 'enable'),
					'padding-bottom'=>'0px'
				));
				echo '</div>';
			}
		}

		// author section
		$author_desc = get_the_author_meta('description');
		if( !empty($author_desc) && onepagepro_get_option('general', 'blog-author', 'enable') == 'enable' ){
			echo '<div class="clear"></div>';
			echo '<div class="onepagepro-single-author" >';
			echo '<div class="onepagepro-single-author-wrap" >';
			echo '<div class="onepagepro-single-author-avartar onepagepro-media-image">' . get_avatar(get_the_author_meta('ID'), 90) . '</div>';
			
			echo '<div class="onepagepro-single-author-content-wrap" >';
			echo '<div class="onepagepro-single-author-caption onepagepro-info-font" >' . esc_html__('About the author', 'onepagepro') . '</div>';
			echo '<h4 class="onepagepro-single-author-title">';
			the_author_posts_link();
			echo '</h4>';

			echo '<div class="onepagepro-single-author-description" >' . gdlr_core_escape_content(gdlr_core_text_filter($author_desc)) . '</div>';
			echo '</div>'; // onepagepro-single-author-content-wrap
			echo '</div>'; // onepagepro-single-author-wrap
			echo '</div>'; // onepagepro-single-author
		}

		// prev - next post navigation
		if( onepagepro_get_option('general', 'blog-navigation', 'enable') == 'enable' ){
			$prev_post = get_previous_post_link(
				'<span class="onepagepro-single-nav onepagepro-single-nav-left">%link</span>',
				'<i class="arrow_left" ></i><span class="onepagepro-text" >' . esc_html__( 'Prev', 'onepagepro' ) . '</span>'
			);
			$next_post = get_next_post_link(
				'<span class="onepagepro-single-nav onepagepro-single-nav-right">%link</span>',
				'<span class="onepagepro-text" >' . esc_html__( 'Next', 'onepagepro' ) . '</span><i class="arrow_right" ></i>'
			);
			if( !empty($prev_post) || !empty($next_post) ){
				echo '<div class="onepagepro-single-nav-area clearfix" >' . $prev_post . $next_post . '</div>';
			}
		}

		// comments template
		if( comments_open() || get_comments_number() ){
			comments_template();
		}

		echo '</div>'; // onepagepro-content-area
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

	} // while

	get_footer(); 
?>