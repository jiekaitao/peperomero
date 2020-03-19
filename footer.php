<?php
/**
 * The template for displaying the footer
 */
	
	$post_option = onepagepro_get_post_option(get_the_ID());
	if( empty($post_option['enable-footer']) || $post_option['enable-footer'] == 'default' ){
		$enable_footer = onepagepro_get_option('general', 'enable-footer', 'enable');
	}else{
		$enable_footer = $post_option['enable-footer'];
	}	
	if( empty($post_option['enable-copyright']) || $post_option['enable-copyright'] == 'default' ){
		$enable_copyright = onepagepro_get_option('general', 'enable-copyright', 'enable');
	}else{
		$enable_copyright = $post_option['enable-footer'];
	}

	$fixed_footer = onepagepro_get_option('general', 'fixed-footer', 'disable');
	echo '</div>'; // onepagepro-page-wrapper

	if( $enable_footer == 'enable' || $enable_copyright == 'enable' ){

		if( $fixed_footer == 'enable' ){
			echo '</div>'; // onepagepro-body-wrapper

			echo '<footer class="onepagepro-fixed-footer" id="onepagepro-fixed-footer" >';
		}else{
			echo '<footer>';
		}

		if( $enable_footer == 'enable' ){

			echo '<div class="onepagepro-footer-wrapper" >';
			echo '<div class="onepagepro-footer-background" ></div>';
			echo '<div class="onepagepro-footer-container onepagepro-container clearfix" >';
			
			$onepagepro_footer_layout = array(
				'footer-1'=>array('onepagepro-column-60'),
				'footer-2'=>array('onepagepro-column-15', 'onepagepro-column-15', 'onepagepro-column-15', 'onepagepro-column-15'),
				'footer-3'=>array('onepagepro-column-15', 'onepagepro-column-15', 'onepagepro-column-30',),
				'footer-4'=>array('onepagepro-column-20', 'onepagepro-column-20', 'onepagepro-column-20'),
				'footer-5'=>array('onepagepro-column-20', 'onepagepro-column-40'),
				'footer-6'=>array('onepagepro-column-40', 'onepagepro-column-20'),
			);
			
			$count = 0;
			$footer_style = onepagepro_get_option('general', 'footer-style');
			$footer_style = empty($footer_style)? 'footer-2': $footer_style;
			foreach( $onepagepro_footer_layout[$footer_style] as $layout ){ $count++;
				echo '<div class="onepagepro-footer-column onepagepro-item-pdlr ' . esc_attr($layout) . '" >';
				if( is_active_sidebar('footer-' . $count) ){
					dynamic_sidebar('footer-' . $count); 
				}
				echo '</div>';
			}
			
			echo '</div>'; // onepagepro-footer-container
			echo '</div>'; // onepagepro-footer-wrapper 

		} // enable footer

		if( $enable_copyright == 'enable' ){
			$copyright_style = onepagepro_get_option('general', 'copyright-style', 'center');
			
			if( $copyright_style == 'center' ){
				$copyright_text = onepagepro_get_option('general', 'copyright-text');

				if( !empty($copyright_text) ){
					echo '<div class="onepagepro-copyright-wrapper" >';
					echo '<div class="onepagepro-copyright-container onepagepro-container">';
					echo '<div class="onepagepro-copyright-text onepagepro-item-pdlr">';
					echo gdlr_core_escape_content(gdlr_core_text_filter($copyright_text));
					echo '</div>';
					echo '</div>';
					echo '</div>'; // onepagepro-copyright-wrapper
				}
			}else if( $copyright_style == 'left-right' ){
				$copyright_left = onepagepro_get_option('general', 'copyright-left');
				$copyright_right = onepagepro_get_option('general', 'copyright-right');

				if( !empty($copyright_left) || !empty($copyright_right) ){
					echo '<div class="onepagepro-copyright-wrapper" >';
					echo '<div class="onepagepro-copyright-container onepagepro-container clearfix">';
					if( !empty($copyright_left) ){
						echo '<div class="onepagepro-copyright-left onepagepro-item-pdlr">';
						echo gdlr_core_escape_content(gdlr_core_text_filter($copyright_left));
						echo '</div>';
					}

					if( !empty($copyright_right) ){
						echo '<div class="onepagepro-copyright-right onepagepro-item-pdlr">';
						echo gdlr_core_escape_content(gdlr_core_text_filter($copyright_right));
						echo '</div>';
					}
					echo '</div>';
					echo '</div>'; // onepagepro-copyright-wrapper
				}
			}
		}

		echo '</footer>';

		if( $fixed_footer == 'disable' ){
			echo '</div>'; // onepagepro-body-wrapper
		}
		echo '</div>'; // onepagepro-body-outer-wrapper

	// disable footer	
	}else{
		echo '</div>'; // onepagepro-body-wrapper
		echo '</div>'; // onepagepro-body-outer-wrapper
	}

	$header_style = onepagepro_get_option('general', 'header-style', 'plain');
	
	if( $header_style == 'side' || $header_style == 'side-toggle' ){
		echo '</div>'; // onepagepro-header-side-nav-content
	}

	$back_to_top = onepagepro_get_option('general', 'enable-back-to-top', 'disable');
	if( $back_to_top == 'enable' ){
		echo '<a href="#onepagepro-top-anchor" class="onepagepro-footer-back-to-top-button" id="onepagepro-footer-back-to-top-button"><i class="fa fa-angle-up" ></i></a>';
	}
?>

<?php wp_footer(); ?>

</body>
</html>