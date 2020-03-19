<?php
	// mobile menu template
	$enable_top_notice_bar = onepagepro_get_option('general', 'enable-top-notice-bar', 'enable');

	echo '<div class="onepagepro-mobile-header-wrap ';
	if( $enable_top_notice_bar == 'enable' ){
		echo ' onepagepro-with-top-notice-bar';
	} 
	echo '" >';

	// top bar
	$top_bar = onepagepro_get_option('general', 'enable-top-bar-on-mobile', 'disable');
	if( $top_bar == 'enable' ){
		get_template_part('header/header', 'top-bar');
	}

	// header
	echo '<div class="onepagepro-mobile-header onepagepro-header-background onepagepro-style-slide" id="onepagepro-mobile-header" >';
	echo '<div class="onepagepro-mobile-header-container onepagepro-container" >';
	echo onepagepro_get_logo(array('mobile' => true));

	echo '<div class="onepagepro-mobile-menu-right" >';

	// search icon
	$enable_search = (onepagepro_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
	if( $enable_search ){
		echo '<div class="onepagepro-main-menu-search" id="onepagepro-mobile-top-search" >';
		echo '<i class="fa fa-search" ></i>';
		echo '</div>';
		onepagepro_get_top_search();
	}

	// cart icon
	$enable_cart = (onepagepro_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
	if( $enable_cart ){
		echo '<div class="onepagepro-main-menu-cart" id="onepagepro-mobile-menu-cart" >';
		echo '<i class="fa fa-shopping-cart" ></i>';
		onepagepro_get_woocommerce_bar();
		echo '</div>';
	}

	// mobile menu
	if( has_nav_menu('mobile_menu') ){
		onepagepro_get_custom_menu(array(
			'type' => onepagepro_get_option('general', 'right-menu-type', 'right'),
			'container-class' => 'onepagepro-mobile-menu',
			'button-class' => 'onepagepro-mobile-menu-button',
			'icon-class' => 'fa fa-bars',
			'id' => 'onepagepro-mobile-menu',
			'theme-location' => 'mobile_menu'
		));
	}
	echo '</div>'; // onepagepro-mobile-menu-right
	echo '</div>'; // onepagepro-mobile-header-container

	if( $enable_top_notice_bar == 'enable' ){
		$top_notice_bar_active = onepagepro_get_option('general', 'top-notice-bar-initial', 'close');

		echo '<div class="onepagepro-top-notice-bar-button-mobile" id="onepagepro-top-notice-bar-button-mobile" >'; 
		echo '<i class="icon_plus" ></i>';
		echo '</div>'; 
	}

	echo '</div>'; // onepagepro-mobile-header
	echo '</div>'; // onepagepro-mobile-header-wrap