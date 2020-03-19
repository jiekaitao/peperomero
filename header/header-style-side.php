<?php
	/* a template for displaying the header area */

	$header_side_style = onepagepro_get_option('general', 'header-side-style', 'top-left');
	$header_class = 'onepagepro-' . onepagepro_get_option('general', 'header-side-align', 'left') . '-align';
?>	
<header class="onepagepro-header-wrap onepagepro-header-style-side <?php echo esc_attr($header_class); ?>" >
	<?php

		$logo_wrap_class = '';
		$navigation_class = '';
		if( onepagepro_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
			$navigation_class .= 'onepagepro-navigation-submenu-indicator ';
		}
		if( in_array($header_side_style, array('middle-left-2', 'middle-right-2')) ){
			$logo_wrap_class .= 'onepagepro-pos-middle ';
		}else if( in_array($header_side_style, array('middle-left', 'middle-right')) ){
			$navigation_class .= 'onepagepro-pos-middle ';
		} 

		if( is_page() ){
			$post_option = onepagepro_get_post_option(get_the_ID());
		}
		if( empty($post_option['enable-logo']) || $post_option['enable-logo'] == 'enable' ){
			echo onepagepro_get_logo(array('padding' => false, 'wrapper-class' => $logo_wrap_class));
		}else{
			$navigation_class .= $logo_wrap_class;
		}
	?>
	<div class="onepagepro-navigation clearfix <?php echo esc_attr($navigation_class); ?>" >
	<?php
		// print main menu
		if( has_nav_menu('main_menu') ){
			echo '<div class="onepagepro-main-menu" id="onepagepro-main-menu" >';
			wp_nav_menu(array(
				'theme_location'=>'main_menu', 
				'container'=> '', 
				'menu_class'=> 'sf-vertical'
			));
			echo '</div>';
		}

		// menu right side
		$enable_search = (onepagepro_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
		$enable_cart = (onepagepro_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
		if( $enable_search || $enable_cart ){
			echo '<div class="onepagepro-main-menu-right-wrap clearfix" >';

			// search icon
			if( $enable_search ){
				echo '<div class="onepagepro-main-menu-search" id="onepagepro-top-search" >';
				echo '<i class="fa fa-search" ></i>';
				echo '</div>';
				onepagepro_get_top_search();
			}

			// cart icon
			if( $enable_cart ){
				echo '<div class="onepagepro-main-menu-cart" id="onepagepro-main-menu-cart" >';
				echo '<i class="fa fa-shopping-cart" ></i>';
				onepagepro_get_woocommerce_bar();
				echo '</div>';
			}

			echo '</div>'; // onepagepro-main-menu-right-wrap
		}
	?>
	</div><!-- onepagepro-navigation -->
	<?php
		// bottom divider
		$navigation_bottom_divider = onepagepro_get_option('general', 'navigation-bottom-divier', 'enable');
		if( $navigation_bottom_divider == 'enable' ){
			echo '<div class="onepagepro-navigation-bottom-divider" ></div>';
		}

		// social network
		$top_bar_social = onepagepro_get_option('general', 'enable-top-bar-social', 'enable');
		if( $top_bar_social == 'enable' ){

			$top_bar_social_class = '';
			if( in_array($header_side_style, array('top-left', 'top-right', 'middle-left', 'middle-right')) ){
				$top_bar_social_class .= 'onepagepro-pos-bottom ';
			}

			echo '<div class="onepagepro-header-social ' . esc_attr($top_bar_social_class) . '" >';
			get_template_part('header/header', 'social');
			echo '</div>';
			
			onepagepro_set_option('general', 'enable-top-bar-social', 'disable');
		}
	?>
</header><!-- header -->