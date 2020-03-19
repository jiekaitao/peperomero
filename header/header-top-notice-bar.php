<?php
	/* a template for displaying the top bar */

	if( onepagepro_get_option('general', 'enable-top-notice-bar', 'enable') == 'enable' ){
		
		$top_notice_bar_active = onepagepro_get_option('general', 'top-notice-bar-initial', 'close');

		echo '<div class="onepagepro-top-notice-bar" >';
		echo '<div class="onepagepro-top-notice-bar-inner clearfix" ';
		if( $top_notice_bar_active == 'close' ){
			echo 'style="display: none;" ';
		}
		echo ' >';
		$left_text = onepagepro_get_option('general', 'top-notice-bar-left-text', '');
		if( !empty($left_text) ){
			echo '<div class="onepagepro-top-notice-bar-left onepagepro-item-pdlr">';
			echo gdlr_core_escape_content(gdlr_core_text_filter($left_text));
			echo '</div>';
		}

		$right_text = onepagepro_get_option('general', 'top-notice-bar-right-text', '');
		if( !empty($right_text) ){
			echo '<div class="onepagepro-top-notice-bar-right onepagepro-item-pdlr">';
			echo gdlr_core_escape_content(gdlr_core_text_filter($right_text));
			echo '</div>';	
		}
		echo '</div>';

		echo '<div class="onepagepro-top-notice-bar-button-wrap ';
		if( $top_notice_bar_active == 'open' ){
			echo ' onepagepro-active';
		}
		echo '" id="onepagepro-top-notice-bar-button-wrap" >'; 
		echo '<div class="onepagepro-top-notice-bar-button" ></div>'; // content: "\4b";
		echo '<i class="icon_plus" ></i>';
		echo '</div>'; 
		echo '</div>'; // onepagepro-top-notice-bar

	}  // top bar
?>