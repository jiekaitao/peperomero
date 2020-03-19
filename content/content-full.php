<?php
/**
 * The template part for displaying single posts
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="onepagepro-single-article" >
		<?php
			ob_start();
			the_post_thumbnail('full');
			$post_thumbnail = ob_get_contents();
			ob_end_clean();

			if( !empty($post_thumbnail) ){
				echo '<div class="onepagepro-single-article-thumbnail onepagepro-media-image" >';
				echo gdlr_core_escape_content($post_thumbnail);
				if( is_sticky() ){
					echo '<div class="onepagepro-sticky-banner onepagepro-title-font" ><i class="fa fa-bolt" ></i>' . esc_html__('Sticky Post', 'onepagepro') . '</div>';
				}
				echo '</div>';
			}else{
				if( is_sticky() ){
					echo '<div class="onepagepro-sticky-banner onepagepro-title-font" ><i class="fa fa-bolt" ></i>' . esc_html__('Sticky Post', 'onepagepro') . '</div>';
				}
			}

			get_template_part('content/content-single', 'title');

			echo '<div class="onepagepro-single-article-content">';
			the_excerpt();
			echo '</div>';
		?>
	</div><!-- onepagepro-single-article -->
</article><!-- post-id -->
