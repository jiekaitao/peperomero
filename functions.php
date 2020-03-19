<?php
	/*	
	*	Goodlayers Function File
	*	---------------------------------------------------------------------
	*	This file include all of important function and features of the theme
	*	---------------------------------------------------------------------
	*/
	
	// goodlayers core plugin function
	include_once(get_template_directory() . '/admin/core/sidebar-generator.php');
	include_once(get_template_directory() . '/admin/core/utility.php');
	include_once(get_template_directory() . '/admin/core/media.php' );
	
	// create admin page
	if( is_admin() ){
		include_once(get_template_directory() . '/admin/tgmpa/class-tgm-plugin-activation.php');
		include_once(get_template_directory() . '/admin/tgmpa/plugin-activation.php');
		include_once(get_template_directory() . '/admin/function/getting-start.php');	
	}
	
	// plugins
	include_once(get_template_directory() . '/plugins/wpml.php');
	include_once(get_template_directory() . '/plugins/revslider.php');
	
	/////////////////////
	// front end script
	/////////////////////
	
	include_once(get_template_directory() . '/include/utility.php' );
	include_once(get_template_directory() . '/include/function-regist.php' );
	include_once(get_template_directory() . '/include/navigation-menu.php' );
	include_once(get_template_directory() . '/include/include-script.php' );
	include_once(get_template_directory() . '/include/goodlayers-core-filter.php' );
	include_once(get_template_directory() . '/include/goodlayers-core-element-filter.php' );
	include_once(get_template_directory() . '/include/pb-element-title.php' );
	include_once(get_template_directory() . '/include/pb-element-testimonial.php' );
	include_once(get_template_directory() . '/include/maintenance.php' );
	include_once(get_template_directory() . '/woocommerce/woocommerce-settings.php' );
	
	/////////////////////
	// execute module 
	/////////////////////
	
	// initiate sidebar structure
	new gdlr_core_sidebar_generator( array(
		'before_widget' => '<div id="%1$s" class="widget %2$s onepagepro-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="onepagepro-widget-title"><span class="onepagepro-widget-head-text">',
		'after_title'   => '</span><span class="onepagepro-widget-head-divider"></span></h3><span class="clear"></span>' ) );
	
	// remove the core default action to enqueue the theme script
	remove_action('after_setup_theme', 'gdlr_init_goodlayers_core_elements');
	add_action('after_setup_theme', 'onepagepro_init_goodlayers_core_elements');
	if( !function_exists('onepagepro_init_goodlayers_core_elements') ){
		function onepagepro_init_goodlayers_core_elements(){

			// create an admin option and customizer
			if( (is_admin() || is_customize_preview()) && class_exists('gdlr_core_admin_option') && class_exists('gdlr_core_theme_customizer') ){
				
				$onepagepro_admin_option = new gdlr_core_admin_option(array(
					'filewrite' => onepagepro_get_style_custom(true)
				));	
				
				include_once( get_template_directory() . '/include/options/general.php');
				include_once( get_template_directory() . '/include/options/typography.php');
				include_once( get_template_directory() . '/include/options/color.php');
				include_once( get_template_directory() . '/include/options/plugin-settings.php');
				include_once( get_template_directory() . '/include/options/customize-utility.php');

				if( is_customize_preview() ){
					new gdlr_core_theme_customizer($onepagepro_admin_option);
				}

				// clear an option for customize page
				add_action('wp', 'onepagepro_clear_option');
				
			}
			
			// add the script for page builder / page options / post option
			if( is_admin() ){
				
				if( class_exists('gdlr_core_revision') ){
					$revision_num = 5;
					new gdlr_core_revision($revision_num);
				}
				
				// create page option
				if( class_exists('gdlr_core_page_option') ){

					// for page post type
					new gdlr_core_page_option(array(
						'post_type' => array('page'),
						'options' => array(
							'layout' => array(
								'title' => esc_html__('Layout', 'onepagepro'),
								'options' => array(
									'enable-header-area' => array(
										'title' => esc_html__('Enable Header Area', 'onepagepro'),
										'type' => 'checkbox',
										'default' => 'enable'
									),
									'enable-logo' => array(
										'title' => esc_html__('Enable Logo', 'onepagepro'),
										'type' => 'checkbox',
										'default' => 'enable',
										'condition' => array( 'enable-header-area' => 'enable' )
									),
									'header-side-background-type' => array(
										'title' => esc_html__('Header Side Background Type ( Only for header side style )', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'onepagepro'),
											'none' => esc_html__('None', 'onepagepro'),
											'image' => esc_html__('Image', 'onepagepro'),
										)
									),
									'header-side-background-image' => array(
										'title' => esc_html__('Header Side Background Image', 'onepagepro'),
										'type' => 'upload',
										'data-type' => 'file', 
										'condition' => array( 'header-side-background-type' => 'image' )
									),
									'header-side-background-image-opacity' => array(
										'title' => esc_html__('Header Side Background Image Opacity', 'onepagepro'),
										'type' => 'fontslider',
										'data-type' => 'opacity',
										'default' => '100',
										'condition' => array( 'header-side-background-type' => 'image' )
									),
									'enable-page-title' => array(
										'title' => esc_html__('Enable Page Title', 'onepagepro'),
										'type' => 'checkbox',
										'default' => 'enable',
										'condition' => array( 'enable-header-area' => 'enable' )
									),
									'page-caption' => array(
										'title' => esc_html__('Caption', 'onepagepro'),
										'type' => 'textarea',
										'condition' => array( 'enable-header-area' => 'enable', 'enable-page-title' => 'enable' )
									),					
									'title-background-type' => array(
										'title' => esc_html__('Page Title Background Type', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'onepagepro'),
											'none' => esc_html__('None', 'onepagepro'),
											'custom-image' => esc_html__('Custom Image', 'onepagepro'),
										),	
										'condition' => array( 'enable-header-area' => 'enable', 'enable-page-title' => 'enable' )
									),					
									'title-background' => array(
										'title' => esc_html__('Page Title Background', 'onepagepro'),
										'type' => 'upload',
										'condition' => array( 'enable-header-area' => 'enable', 'enable-page-title' => 'enable', 'title-background-type' => 'custom-image' )
									),				
									'body-background-type' => array(
										'title' => esc_html__('Body Background Type', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'onepagepro'),
											'none' => esc_html__('None', 'onepagepro'),
											'image' => esc_html__('Image', 'onepagepro'),
										)
									),
									'body-background-image' => array(
										'title' => esc_html__('Body Background Image', 'onepagepro'),
										'type' => 'upload',
										'data-type' => 'file', 
										'condition' => array( 'body-background-type' => 'image' )
									),
									'body-background-image-opacity' => array(
										'title' => esc_html__('Body Background Image Opacity', 'onepagepro'),
										'type' => 'fontslider',
										'data-type' => 'opacity',
										'default' => '100',
										'condition' => array( 'body-background-type' => 'image' )
									),
									'show-content' => array(
										'title' => esc_html__('Show WordPress Editor Content', 'onepagepro'),
										'type' => 'checkbox',
										'default' => 'enable',
										'description' => esc_html__('Disable this to hide the content in editor to show only page builder content.', 'onepagepro'),
									),
									'sidebar' => array(
										'title' => esc_html__('Sidebar', 'onepagepro'),
										'type' => 'radioimage',
										'options' => 'sidebar',
										'default' => 'none',
										'wrapper-class' => 'gdlr-core-fullsize'
									),
									'sidebar-left' => array(
										'title' => esc_html__('Sidebar Left', 'onepagepro'),
										'type' => 'combobox',
										'options' => 'sidebar',
										'condition' => array( 'sidebar' => array('left', 'both') )
									),
									'sidebar-right' => array(
										'title' => esc_html__('Sidebar Right', 'onepagepro'),
										'type' => 'combobox',
										'options' => 'sidebar',
										'condition' => array( 'sidebar' => array('right', 'both') )
									),
									'enable-footer' => array(
										'title' => esc_html__('Enable Footer', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'onepagepro'),
											'enable' => esc_html__('Enable', 'onepagepro'),
											'disable' => esc_html__('Disable', 'onepagepro'),
										)
									),
									'enable-copyright' => array(
										'title' => esc_html__('Enable Copyright', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'onepagepro'),
											'enable' => esc_html__('Enable', 'onepagepro'),
											'disable' => esc_html__('Disable', 'onepagepro'),
										)
									),

								)
							), // layout
							'title' => array(
								'title' => esc_html__('Title Style', 'onepagepro'),
								'options' => array(

									'title-style' => array(
										'title' => esc_html__('Page Title Style', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'onepagepro'),
											'small' => esc_html__('Small', 'onepagepro'),
											'medium' => esc_html__('Medium', 'onepagepro'),
											'large' => esc_html__('Large', 'onepagepro'),
											'custom' => esc_html__('Custom', 'onepagepro'),
										),
										'default' => 'default'
									),
									'title-align' => array(
										'title' => esc_html__('Page Title Alignment', 'onepagepro'),
										'type' => 'radioimage',
										'options' => 'text-align',
										'with-default' => true,
										'default' => 'default'
									),
									'title-spacing' => array(
										'title' => esc_html__('Page Title Padding', 'onepagepro'),
										'type' => 'custom',
										'item-type' => 'padding',
										'data-input-type' => 'pixel',
										'options' => array('padding-top', 'padding-bottom', 'caption-top-margin'),
										'wrapper-class' => 'gdlr-core-fullsize gdlr-core-no-link gdlr-core-large',
										'condition' => array( 'title-style' => 'custom' )
									),
									'title-font-size' => array(
										'title' => esc_html__('Page Title Font Size', 'onepagepro'),
										'type' => 'custom',
										'item-type' => 'padding',
										'data-input-type' => 'pixel',
										'options' => array('title-size', 'title-letter-spacing', 'caption-size', 'caption-letter-spacing'),
										'wrapper-class' => 'gdlr-core-fullsize gdlr-core-no-link gdlr-core-large',
										'condition' => array( 'title-style' => 'custom' )
									),
									'title-font-weight' => array(
										'title' => esc_html__('Page Title Font Weight', 'onepagepro'),
										'type' => 'custom',
										'item-type' => 'padding',
										'options' => array('title-weight', 'caption-weight'),
										'wrapper-class' => 'gdlr-core-fullsize gdlr-core-no-link gdlr-core-large',
										'condition' => array( 'title-style' => 'custom' )
									),
									'title-font-transform' => array(
										'title' => esc_html__('Page Title Font Transform', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'none' => esc_html__('None', 'onepagepro'),
											'uppercase' => esc_html__('Uppercase', 'onepagepro'),
											'lowercase' => esc_html__('Lowercase', 'onepagepro'),
											'capitalize' => esc_html__('Capitalize', 'onepagepro'),
										),
										'default' => 'uppercase',
										'condition' => array( 'title-style' => 'custom' )
									),
									'title-background-overlay-opacity' => array(
										'title' => esc_html__('Page Title Background Overlay Opacity', 'onepagepro'),
										'type' => 'text',
										'description' => esc_html__('Fill the number between 0 - 1 ( Leave Blank For Default Value )', 'onepagepro'),
										'condition' => array( 'title-style' => 'custom' )
									),
									'title-color' => array(
										'title' => esc_html__('Page Title Color', 'onepagepro'),
										'type' => 'colorpicker',
									),
									'caption-color' => array(
										'title' => esc_html__('Page Caption Color', 'onepagepro'),
										'type' => 'colorpicker',
									),
									'title-background-overlay-color' => array(
										'title' => esc_html__('Page Background Overlay Color', 'onepagepro'),
										'type' => 'colorpicker',
									),

								)
							), // title
							'header' => array(
								'title' => esc_html__('Header', 'onepagepro'),
								'options' => array(

									'header-slider' => array(
										'title' => esc_html__('Header Slider ( Above Navigation )', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'none' => esc_html__('None', 'onepagepro'),
											'layer-slider' => esc_html__('Layer Slider', 'onepagepro'),
											'master-slider' => esc_html__('Master Slider', 'onepagepro'),
											'revolution-slider' => esc_html__('Revolution Slider', 'onepagepro'),
										),
										'description' => esc_html__('For header style plain / bar / boxed', 'onepagepro'),
									),
									'layer-slider-id' => array(
										'title' => esc_html__('Choose Layer Slider', 'onepagepro'),
										'type' => 'combobox',
										'options' => gdlr_core_get_layerslider_list(),
										'condition' => array( 'header-slider' => 'layer-slider' )
									),
									'master-slider-id' => array(
										'title' => esc_html__('Choose Master Slider', 'onepagepro'),
										'type' => 'combobox',
										'options' => gdlr_core_get_masterslider_list(),
										'condition' => array( 'header-slider' => 'master-slider' )
									),
									'revolution-slider-id' => array(
										'title' => esc_html__('Choose Revolution Slider', 'onepagepro'),
										'type' => 'combobox',
										'options' => gdlr_core_get_revolution_slider_list(),
										'condition' => array( 'header-slider' => 'revolution-slider' )
									),

								) // header options
							), // header
							'bullet-anchor' => array(
								'title' => esc_html__('Bullet Anchor', 'onepagepro'),
								'options' => array(
									'bullet-anchor-description' => array(
										'type' => 'description',
										'description' => esc_html__('This feature is used for one page navigation. It will appear on the right side of page. You can put the id of element in \'Anchor Link\' field to let the bullet scroll the page to.', 'onepagepro')
									),
									'bullet-anchor' => array(
										'title' => esc_html__('Add Anchor', 'onepagepro'),
										'type' => 'custom',
										'item-type' => 'tabs',
										'options' => array(
											'title' => array(
												'title' => esc_html__('Anchor Link', 'onepagepro'),
												'type' => 'text',
											),
											'anchor-color' => array(
												'title' => esc_html__('Anchor Color', 'onepagepro'),
												'type' => 'colorpicker',
											),
											'anchor-hover-color' => array(
												'title' => esc_html__('Anchor Hover Color', 'onepagepro'),
												'type' => 'colorpicker',
											)
										),
										'wrapper-class' => 'gdlr-core-fullsize'
									),
								)
							)
						)
					));

					// for post post type
					new gdlr_core_page_option(array(
						'post_type' => array('post'),
						'options' => array(
							'layout' => array(
								'title' => esc_html__('Layout', 'onepagepro'),
								'options' => array(

									'header-side-background-type' => array(
										'title' => esc_html__('Header Side Background Type ( Only for header side style )', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'onepagepro'),
											'none' => esc_html__('None', 'onepagepro'),
											'image' => esc_html__('Image', 'onepagepro'),
										)
									),
									'header-side-background-image' => array(
										'title' => esc_html__('Header Side Background Image', 'onepagepro'),
										'type' => 'upload',
										'data-type' => 'file', 
										'condition' => array( 'header-side-background-type' => 'image' )
									),
									'header-side-background-image-opacity' => array(
										'title' => esc_html__('Header Side Background Image Opacity', 'onepagepro'),
										'type' => 'fontslider',
										'data-type' => 'opacity',
										'default' => '100',
										'condition' => array( 'header-side-background-type' => 'image' )
									),
									'body-background-type' => array(
										'title' => esc_html__('Body Background Type', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'onepagepro'),
											'none' => esc_html__('None', 'onepagepro'),
											'image' => esc_html__('Image', 'onepagepro'),
										)
									),
									'body-background-image' => array(
										'title' => esc_html__('Body Background Image', 'onepagepro'),
										'type' => 'upload',
										'data-type' => 'file', 
										'condition' => array( 'body-background-type' => 'image' )
									),
									'body-background-image-opacity' => array(
										'title' => esc_html__('Body Background Image Opacity', 'onepagepro'),
										'type' => 'fontslider',
										'data-type' => 'opacity',
										'default' => '100',
										'condition' => array( 'body-background-type' => 'image' )
									),
									'show-content' => array(
										'title' => esc_html__('Show WordPress Editor Content', 'onepagepro'),
										'type' => 'checkbox',
										'default' => 'enable',
										'description' => esc_html__('Disable this to hide the content in editor to show only page builder content.', 'onepagepro'),
									),
									'sidebar' => array(
										'title' => esc_html__('Sidebar', 'onepagepro'),
										'type' => 'radioimage',
										'options' => 'sidebar',
										'with-default' => true,
										'default' => 'default',
										'wrapper-class' => 'gdlr-core-fullsize'
									),
									'sidebar-left' => array(
										'title' => esc_html__('Sidebar Left', 'onepagepro'),
										'type' => 'combobox',
										'options' => 'sidebar',
										'condition' => array( 'sidebar' => array('left', 'both') )
									),
									'sidebar-right' => array(
										'title' => esc_html__('Sidebar Right', 'onepagepro'),
										'type' => 'combobox',
										'options' => 'sidebar',
										'condition' => array( 'sidebar' => array('right', 'both') )
									),
								)
							),
							'metro-layout' => array(
								'title' => esc_html__('Metro Layout', 'onepagepro'),
								'options' => array(
									'metro-column-size' => array(
										'title' => esc_html__('Column Size', 'onepagepro'),
										'type' => 'combobox',
										'options' => array( 'default'=> esc_html__('Default', 'onepagepro'), 
											60 => '1/1', 30 => '1/2', 20 => '1/3', 40 => '2/3', 
											15 => '1/4', 45 => '3/4', 12 => '1/5', 24 => '2/5', 36 => '3/5', 48 => '4/5',
											10 => '1/6', 50 => '5/6'),
										'default' => 'default',
										'description' => esc_html__('Choosing default will display the value selected by the page builder item.', 'onepagepro')
									),
									'metro-thumbnail-size' => array(
										'title' => esc_html__('Thumbnail Size', 'onepagepro'),
										'type' => 'combobox',
										'options' => 'thumbnail-size',
										'with-default' => true,
										'default' => 'default',
										'description' => esc_html__('Choosing default will display the value selected by the page builder item.', 'onepagepro')
									)
								)
							),						
							'title' => array(
								'title' => esc_html__('Title', 'onepagepro'),
								'options' => array(

									'blog-title-style' => array(
										'title' => esc_html__('Blog Title Style', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'onepagepro'),
											'small' => esc_html__('Small', 'onepagepro'),
											'large' => esc_html__('Large', 'onepagepro'),
											'custom' => esc_html__('Custom', 'onepagepro'),
											'inside-content' => esc_html__('Inside Content', 'onepagepro'),
											'none' => esc_html__('None', 'onepagepro'),
										),
										'default' => 'default'
									),
									'blog-title-padding' => array(
										'title' => esc_html__('Blog Title Padding', 'onepagepro'),
										'type' => 'custom',
										'item-type' => 'padding',
										'data-input-type' => 'pixel',
										'options' => array('padding-top', 'padding-bottom'),
										'wrapper-class' => 'gdlr-core-fullsize gdlr-core-no-link gdlr-core-large',
										'condition' => array( 'blog-title-style' => 'custom' )
									),
									'blog-feature-image' => array(
										'title' => esc_html__('Blog Feature Image Location', 'onepagepro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'onepagepro'),
											'above-content' => esc_html__('Above Content', 'onepagepro'),
											'content' => esc_html__('Inside Content', 'onepagepro'),
											'title-background' => esc_html__('Title Background', 'onepagepro'),
											'none' => esc_html__('None', 'onepagepro'),
										)
									),
									'blog-title-background-image' => array(
										'title' => esc_html__('Blog Title Background Image', 'onepagepro'),
										'type' => 'upload',
										'data-type' => 'file',
										'condition' => array( 
											'blog-title-style' => array('default', 'small', 'large', 'custom'),
											'blog-feature-image' => array('default', 'content', 'none')
										),
										'description' => esc_html__('Will be overridden by feature image if selected.', 'onepagepro'),
									),
									'blog-title-background-overlay-opacity' => array(
										'title' => esc_html__('Blog Title Background Overlay Opacity', 'onepagepro'),
										'type' => 'text',
										'description' => esc_html__('Fill the number between 0 - 1 ( Leave Blank For Default Value )', 'onepagepro'),
										'condition' => array( 'blog-title-style' => 'custom', 'blog-feature-image' => array( 'default', 'content', 'none' ) ),
									),

								) // options
							) // title
						)
					));
				}

			}
			
			// create page builder
			if( class_exists('gdlr_core_page_builder') ){
				new gdlr_core_page_builder(array(
					'style' => array(
						'style-custom' => onepagepro_get_style_custom()
					)
				));
			}
			
		} // onepagepro_init_goodlayers_core_elements
	} // function_exists
