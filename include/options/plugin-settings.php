<?php
	/*	
	*	Goodlayers Option
	*	---------------------------------------------------------------------
	*	This file store an array of theme options
	*	---------------------------------------------------------------------
	*/	

	// save the css/js file 
	add_action('gdlr_core_after_save_theme_option', 'onepagepro_gdlr_core_after_save_theme_option');
	if( !function_exists('onepagepro_gdlr_core_after_save_theme_option') ){
		function onepagepro_gdlr_core_after_save_theme_option(){
			if( function_exists('gdlr_core_generate_combine_script') ){
				onepagepro_clear_option();

				gdlr_core_generate_combine_script(array(
					'lightbox' => onepagepro_gdlr_core_lightbox_type()
				));
			}
		}
	}

	if( !function_exists('onepagepro_gdlr_core_get_privacy_options') ){
		function onepagepro_gdlr_core_get_privacy_options( $type = 1 ){
			if( function_exists('gdlr_core_get_privacy_options') ){
				return gdlr_core_get_privacy_options( $type );
			}

			return array();
		} // onepagepro_gdlr_core_get_privacy_options
	}

	// add the option
	$onepagepro_admin_option->add_element(array(
	
		// plugin head section
		'title' => esc_html__('Miscellaneous', 'onepagepro'),
		'slug' => 'onepagepro_plugin',
		'icon' => get_template_directory_uri() . '/include/options/images/plugin.png',
		'options' => array(
		
			// starting the subnav
			'thumbnail-sizing' => array(
				'title' => esc_html__('Thumbnail Sizing', 'onepagepro'),
				'customizer' => false,
				'options' => array(
				
					'enable-srcset' => array(
						'title' => esc_html__('Enable Srcset', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable',
						'description' => esc_html__('Enable this option will improve the performance by resizing the image based on the screensize. Please be cautious that this will generate multiple images on your server.', 'onepagepro')
					),
					'thumbnail-sizing' => array(
						'title' => esc_html__('Add Thumbnail Size', 'onepagepro'),
						'type' => 'custom',
						'item-type' => 'thumbnail-sizing',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					
				) // thumbnail-sizing-options
			), // thumbnail-sizing-nav	

			'consent-settings' => array(
				'title' => esc_html__('Consent Settings', 'onepagepro'),
				'options' => onepagepro_gdlr_core_get_privacy_options(1)
			),
			'privacy-settings' => array(
				'title' => esc_html__('Privacy Style Settings', 'onepagepro'),
				'options' => onepagepro_gdlr_core_get_privacy_options(2)
			),

			'plugins' => array(
				'title' => esc_html__('Plugins', 'onepagepro'),
				'options' => array(

					'lightbox' => array(
						'title' => esc_html__('Lightbox Type', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'ilightbox' => esc_html__('ilightbox', 'onepagepro'),
							'lightGallery' => esc_html__('LightGallery', 'onepagepro'),
							'strip' => esc_html__('Strip', 'onepagepro'),
						)
					),
					'ilightbox-skin' => array(
						'title' => esc_html__('iLightbox Skin', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'dark' => esc_html__('Dark', 'onepagepro'),
							'light' => esc_html__('Light', 'onepagepro'),
							'mac' => esc_html__('Mac', 'onepagepro'),
							'metro-black' => esc_html__('Metro Black', 'onepagepro'),
							'metro-white' => esc_html__('Metro White', 'onepagepro'),
							'parade' => esc_html__('Parade', 'onepagepro'),
							'smooth' => esc_html__('Smooth', 'onepagepro'),		
						),
						'condition' => array( 'lightbox' => 'ilightbox' )
					),
					'link-to-lightbox' => array(
						'title' => esc_html__('Turn Image Link To Open In Lightbox', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					
				) // plugin-options
			), // plugin-nav		
			'additional-script' => array(
				'title' => esc_html__('Custom Css/Js', 'onepagepro'),
				'options' => array(
				
					'additional-css' => array(
						'title' => esc_html__('Additional CSS ( without <style> tag )', 'onepagepro'),
						'type' => 'textarea',
						'data-type' => 'text',
						'selector' => '#gdlr#',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'additional-mobile-css' => array(
						'title' => esc_html__('Mobile CSS ( screen below 767px )', 'onepagepro'),
						'type' => 'textarea',
						'data-type' => 'text',
						'selector' => '@media only screen and (max-width: 767px){ #gdlr# }',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'additional-head-script' => array(
						'title' => esc_html__('Additional Head Script ( without <script> tag )', 'onepagepro'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'descriptin' => esc_html__('Eg. For analytics', 'onepagepro')
					),
					'additional-head-script2' => array(
						'title' => esc_html__('Additional Head Script ( with <script> tag )', 'onepagepro'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'descriptin' => esc_html__('Eg. For analytics', 'onepagepro')
					),
					'additional-script' => array(
						'title' => esc_html__('Additional Script ( without <script> tag )', 'onepagepro'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					
				) // additional-script-options
			), // additional-script-nav	
			'maintenance' => array(
				'title' => esc_html__('Maintenance Mode', 'onepagepro'),
				'options' => array(		
					'enable-maintenance' => array(
						'title' => esc_html__('Enable Maintenance / Coming Soon Mode', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),					
					'maintenance-page' => array(
						'title' => esc_html__('Select Maintenance / Coming Soon Page', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'post_type',
						'options-data' => 'page'
					),

				) // maintenance-options
			), // maintenance
			'pre-load' => array(
				'title' => esc_html__('Preload', 'onepagepro'),
				'options' => array(		
					'enable-preload' => array(
						'title' => esc_html__('Enable Preload', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'preload-image' => array(
						'title' => esc_html__('Preload Image', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file', 
						'selector' => '.onepagepro-page-preload{ background-image: url(#gdlr#); }',
						'condition' => array( 'enable-preload' => 'enable' ),
						'description' => esc_html__('Upload the image (.gif) you want to use as preload animation. You could search it online at https://www.google.com/search?q=loading+gif as well', 'onepagepro')
					),
				)
			),
			'import-export' => array(
				'title' => esc_html__('Import / Export', 'onepagepro'),
				'options' => array(

					'export' => array(
						'title' => esc_html__('Export Option', 'onepagepro'),
						'type' => 'export',
						'action' => 'gdlr_core_theme_option_export',
						'options' => array(
							'all' => esc_html__('All Options(general/typography/color/miscellaneous) exclude widget, custom template', 'onepagepro'),
							'onepagepro_general' => esc_html__('General Option', 'onepagepro'),
							'onepagepro_typography' => esc_html__('Typography Option', 'onepagepro'),
							'onepagepro_color' => esc_html__('Color Option', 'onepagepro'),
							'onepagepro_plugin' => esc_html__('Miscellaneous', 'onepagepro'),
							'widget' => esc_html__('Widget', 'onepagepro'),
							'page-builder-template' => esc_html__('Custom Page Builder Template', 'onepagepro'),
						),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'import' => array(
						'title' => esc_html__('Import Option', 'onepagepro'),
						'type' => 'import',
						'action' => 'gdlr_core_theme_option_import',
						'wrapper-class' => 'gdlr-core-fullsize'
					),

				) // import-options
			), // import-export
			
		
		) // plugin-options
		
	), 8);	