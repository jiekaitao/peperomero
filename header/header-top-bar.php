<?php
	/* a template for displaying the top bar */

	if( onepagepro_get_option('general', 'enable-top-bar', 'enable') == 'enable' ){

		$top_bar_width = onepagepro_get_option('general', 'top-bar-width', 'boxed');
		$top_bar_container_class = '';

		if( $top_bar_width == 'boxed' ){
			$top_bar_container_class = 'onepagepro-container ';
		}else if( $top_bar_width == 'custom' ){
			$top_bar_container_class = 'onepagepro-top-bar-custom-container ';
		}else{
			$top_bar_container_class = 'onepagepro-top-bar-full ';
		}
		
		echo '<div class="onepagepro-top-bar" >';
		echo '<div class="onepagepro-top-bar-background" ></div>';
		echo '<div class="onepagepro-top-bar-container clearfix ' . esc_attr($top_bar_container_class) . '" >';

		$language_flag = onepagepro_get_wpml_flag();
		$left_text = onepagepro_get_option('general', 'top-bar-left-text', '');
		if( !empty($left_text) || !empty($language_flag) ){
			echo '<div class="onepagepro-top-bar-left onepagepro-item-pdlr">';
			echo gdlr_core_escape_content($language_flag);
			echo gdlr_core_escape_content(gdlr_core_text_filter($left_text));
			echo '</div>';
		}

		$right_text = onepagepro_get_option('general', 'top-bar-right-text', '');
		$top_bar_social = onepagepro_get_option('general', 'enable-top-bar-social', 'enable');
		if( !empty($right_text) || $top_bar_social == 'enable' ){
			echo '<div class="onepagepro-top-bar-right onepagepro-item-pdlr">';
			if( !empty($right_text) ){
				echo '<div class="onepagepro-top-bar-right-text">';
				echo gdlr_core_escape_content(gdlr_core_text_filter($right_text));
				echo '</div>';
			}

			if( $top_bar_social == 'enable' ){
				echo '<div class="onepagepro-top-bar-right-social" >';
				get_template_part('header/header', 'social');
				echo '</div>';	
			}
			echo '</div>';	
		}
		echo '</div>';
		echo '</div>';

	}  // top bar
?>