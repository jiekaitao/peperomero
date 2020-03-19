<?php
	/* a template for displaying the header area */
?>	
<header class="onepagepro-header-wrap onepagepro-header-style-side-toggle" >
	<?php
		if( is_page() ){
			$post_option = onepagepro_get_post_option(get_the_ID());
		}
		if( empty($post_option['enable-logo']) || $post_option['enable-logo'] == 'enable' ){
			$display_logo = onepagepro_get_option('general', 'header-side-toggle-display-logo', 'enable');
			if( $display_logo == 'enable' ){
				echo onepagepro_get_logo(array('padding' => false));
			}
		}

		$navigation_class = '';
		if( onepagepro_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
			$navigation_class = 'onepagepro-navigation-submenu-indicator ';
		}
	?>
	<div class="onepagepro-navigation clearfix <?php echo esc_attr($navigation_class); ?>" >
	<?php
		// print main menu
		if( has_nav_menu('main_menu') ){
			onepagepro_get_custom_menu(array(
				'container-class' => 'onepagepro-main-menu',
				'button-class' => 'onepagepro-side-menu-icon',
				'icon-class' => 'fa fa-bars',
				'id' => 'onepagepro-main-menu',
				'theme-location' => 'main_menu',
				'type' => onepagepro_get_option('general', 'header-side-toggle-menu-type', 'overlay')
			));
		}
	?>
	</div><!-- onepagepro-navigation -->
	<?php

		// menu right side
		$enable_search = (onepagepro_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
		$enable_cart = (onepagepro_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
		if( $enable_search || $enable_cart ){ 
			echo '<div class="onepagepro-header-icon onepagepro-pos-bottom" >';

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
</header><!-- header -->