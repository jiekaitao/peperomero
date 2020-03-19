<?php
	/* a template for displaying the header area */

	// header container
	$body_layout = onepagepro_get_option('general', 'layout', 'full');
	$body_margin = onepagepro_get_option('general', 'body-margin', '0px');
	$header_width = onepagepro_get_option('general', 'header-width', 'boxed');
	$header_style = onepagepro_get_option('general', 'header-bar-navigation-align', 'center');
	$header_background_style = onepagepro_get_option('general', 'header-background-style', 'solid');

	$header_wrap_class = '';
	if( $header_style == 'center-logo' ){
		$header_wrap_class .= ' onepagepro-style-center';
	}else{
		$header_wrap_class .= ' onepagepro-style-left';
	}

	$header_container_class = '';
	if( $header_width == 'boxed' ){
		$header_container_class .= ' onepagepro-container';
	}else if( $header_width == 'custom' ){
		$header_container_class .= ' onepagepro-header-custom-container';
	}else{
		$header_container_class .= ' onepagepro-header-full';
	}

	$navigation_wrap_class  = ' onepagepro-style-' . $header_background_style;
	$navigation_wrap_class .= ' onepagepro-sticky-navigation onepagepro-sticky-navigation-height';
	if( $header_style == 'center' || $header_style == 'center-logo' ){
		$navigation_wrap_class .= ' onepagepro-style-center';
	}else{
		$navigation_wrap_class .= ' onepagepro-style-left';
	}
	if( $body_layout == 'boxed' || $body_margin != '0px' ){
		$navigation_wrap_class .= ' onepagepro-style-slide';
	}else{
		$navigation_wrap_class .= '  onepagepro-style-fixed';
	}
	if( $header_background_style == 'transparent' ){
		$navigation_wrap_class .= ' onepagepro-without-placeholder';
	}

?>	
<header class="onepagepro-header-wrap onepagepro-header-style-bar onepagepro-header-background <?php echo esc_attr($header_wrap_class); ?>" >
	<div class="onepagepro-header-container clearfix <?php echo esc_attr($header_container_class); ?>">
		<div class="onepagepro-header-container-inner">
		<?php
			if( is_page() ){
				$post_option = onepagepro_get_post_option(get_the_ID());
			}
			if( empty($post_option['enable-logo']) || $post_option['enable-logo'] == 'enable' ){
				echo onepagepro_get_logo();
			}

			$logo_right_text = onepagepro_get_option('general', 'logo-right-text');
			if( !empty($logo_right_text) ){
				echo '<div class="onepagepro-logo-right-text onepagepro-item-pdlr" >';
				echo gdlr_core_content_filter($logo_right_text);
				echo '</div>';
			}
		?>
		</div>
	</div>
</header><!-- header -->
<div class="onepagepro-navigation-bar-wrap <?php echo esc_attr($navigation_wrap_class); ?>" >
	<div class="onepagepro-navigation-background" ></div>
	<div class="onepagepro-navigation-container clearfix <?php echo esc_attr($header_container_class); ?>">
		<?php
			$navigation_class = '';
			if( onepagepro_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
				$navigation_class .= 'onepagepro-navigation-submenu-indicator ';
			}
		?>
		<div class="onepagepro-navigation onepagepro-item-pdlr clearfix <?php echo esc_attr($navigation_class); ?>" >
		<?php
			// print main menu
			if( has_nav_menu('main_menu') ){
				echo '<div class="onepagepro-main-menu" id="onepagepro-main-menu" >';
				wp_nav_menu(array(
					'theme_location'=>'main_menu', 
					'container'=> '', 
					'menu_class'=> 'sf-menu',
					'walker' => new onepagepro_menu_walker()
				));
				$slide_bar = onepagepro_get_option('general', 'navigation-slide-bar', 'enable');
				if( $slide_bar == 'enable' ){
					echo '<div class="onepagepro-navigation-slide-bar" id="onepagepro-navigation-slide-bar" ></div>';
				}
				echo '</div>';
			}

			// menu right side
			$menu_right_class = '';
			if( $header_style == 'center' || $header_style == 'center-logo' ){
				$menu_right_class = ' onepagepro-item-mglr onepagepro-navigation-top';
			}

			// menu right side
			$enable_search = (onepagepro_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
			$enable_cart = (onepagepro_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
			$enable_right_button = (onepagepro_get_option('general', 'enable-main-navigation-right-button', 'disable') == 'enable')? true: false;
			if( has_nav_menu('right_menu') || $enable_search || $enable_cart ){
				echo '<div class="onepagepro-main-menu-right-wrap clearfix ' . esc_attr($menu_right_class) . '" >';

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

				// menu right button
				if( $enable_right_button ){
					$button_link = onepagepro_get_option('general', 'main-navigation-right-button-link', '');
					$button_link_target = onepagepro_get_option('general', 'main-navigation-right-button-link-target', '_self');
					echo '<a class="onepagepro-main-menu-right-button" href="' . esc_url($button_link) . '" target="' . esc_attr($button_link_target) . '" >';
					echo onepagepro_get_option('general', 'main-navigation-right-button-text', '');
					echo '</a>';
				}

				// print right menu
				if( has_nav_menu('right_menu') ){
					onepagepro_get_custom_menu(array(
						'container-class' => 'onepagepro-main-menu-right',
						'button-class' => 'onepagepro-right-menu-button onepagepro-top-menu-button',
						'icon-class' => 'fa fa-bars',
						'id' => 'onepagepro-right-menu',
						'theme-location' => 'right_menu',
						'type' => onepagepro_get_option('general', 'right-menu-type', 'right')
					));
				}

				echo '</div>'; // onepagepro-main-menu-right-wrap
			}
		?>
		</div><!-- onepagepro-navigation -->

	</div><!-- onepagepro-header-container -->
</div><!-- onepagepro-navigation-bar-wrap -->