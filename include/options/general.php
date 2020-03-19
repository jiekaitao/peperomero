<?php
	/*	
	*	Goodlayers Option
	*	---------------------------------------------------------------------
	*	This file store an array of theme options
	*	---------------------------------------------------------------------
	*/	

	// add custom css for theme option
	add_filter('gdlr_core_theme_option_top_file_write', 'onepagepro_gdlr_core_theme_option_top_file_write', 10, 2);
	if( !function_exists('onepagepro_gdlr_core_theme_option_top_file_write') ){
		function onepagepro_gdlr_core_theme_option_top_file_write( $css, $option_slug ){
			if( $option_slug != 'goodlayers_main_menu' ) return;

			ob_start();
?>
.onepagepro-body h1, .onepagepro-body h2, .onepagepro-body h3, .onepagepro-body h4, .onepagepro-body h5, .onepagepro-body h6{ margin-top: 0px; margin-bottom: 20px; line-height: 1.2; font-weight: 700; }
#poststuff .gdlr-core-page-builder-body h2{ padding: 0px; margin-bottom: 20px; line-height: 1.2; font-weight: 700; }
#poststuff .gdlr-core-page-builder-body h1{ padding: 0px; font-weight: 700; }

.gdlr-core-testimonial-item .gdlr-core-testimonial-content{ margin-bottom: 35px; }
.gdlr-core-testimonial-item .gdlr-core-testimonial-title{ font-size: 15px; letter-spacing: 0; text-transform: none; display: inline; }
.gdlr-core-testimonial-item .gdlr-core-testimonial-position{ font-size: 15px; font-style: normal; }

.gdlr-core-side-border-wrap{ position: relative; }

.gdlr-core-title-item .gdlr-core-title-item-side-border{ display: inline-block; width: 40px; vertical-align: middle; margin-bottom: 6px; border-bottom-width: 2px; border-bottom-style: solid; }
.gdlr-core-title-item .gdlr-core-title-item-side-border.gdlr-core-left{ margin-right: 25px; }
.gdlr-core-title-item .gdlr-core-title-item-side-border.gdlr-core-right{ margin-left: 25px; }
.gdlr-core-title-item .gdlr-core-title-item-side-border.gdlr-core-bottom-right{ position: absolute; bottom: -18px; right: 0px; width: 75px; }
.gdlr-core-title-item-caption-right .gdlr-core-title-item-link{ margin-top: 17px; }

.gdlr-core-block-item-title-wrap .gdlr-core-block-item-title{ font-weight: 800; text-transform: none; letter-spacing: 0; }
.gdlr-core-block-item-title-wrap .gdlr-core-block-item-title-side-border{ display: inline-block; width: 30px; vertical-align: middle; margin-bottom: 6px; border-bottom-width: 2px; border-bottom-style: solid; }
.gdlr-core-block-item-title-wrap .gdlr-core-block-item-title-side-border.gdlr-core-left{ margin-right: 25px; }
.gdlr-core-block-item-title-wrap .gdlr-core-block-item-title-side-border.gdlr-core-right{ margin-left: 25px; }
.gdlr-core-block-item-title-wrap .gdlr-core-block-item-caption{ letter-spacing: 0px; }
.gdlr-core-block-item-title-wrap.gdlr-core-caption-top .gdlr-core-block-item-caption{ margin-bottom: 6px; }
.gdlr-core-block-item-title-wrap.gdlr-core-caption-top .gdlr-core-block-item-read-more-wrap{ margin-top: 8px; }
.gdlr-core-block-item-title-wrap.gdlr-core-caption-right .gdlr-core-block-item-caption{ margin-top: 0px; }
.gdlr-core-block-item-title-wrap.gdlr-core-caption-right .gdlr-core-block-item-read-more-wrap{ margin-top: 17px; }
.gdlr-core-block-item-title-wrap.gdlr-core-caption-right .gdlr-core-block-item-title{ float: left; margin-right: 30px; }
.gdlr-core-block-item-title-wrap.gdlr-core-caption-right .gdlr-core-block-item-caption{ overflow: hidden; }
.gdlr-core-block-item-title-wrap.gdlr-core-caption-right.gdlr-core-with-nav .gdlr-core-block-item-caption{ padding-right: 160px; }
.gdlr-core-block-item-title-wrap.gdlr-core-caption-bottom .gdlr-core-block-item-caption{ margin-top: 6px; margin-bottom: 0px; }
.gdlr-core-block-item-title-wrap.gdlr-core-caption-bottom .gdlr-core-block-item-read-more-wrap{ margin-top: 8px; }

.gdlr-core-testimonial-item-title-wrap .gdlr-core-title-item-side-border{ display: inline-block; width: 40px; vertical-align: middle; margin-bottom: 6px; border-bottom-width: 2px; border-bottom-style: solid; }
.gdlr-core-testimonial-item-title-wrap .gdlr-core-title-item-side-border.gdlr-core-left{ margin-right: 25px; }
.gdlr-core-testimonial-item-title-wrap .gdlr-core-title-item-side-border.gdlr-core-right{ margin-left: 25px; }

.gdlr-core-load-more-wrap .gdlr-core-load-more{ font-size: 16px; font-weight: bold; text-transform: none; letter-spacing: 0px; border-radius: 35px; -moz-border-radius: 35px; -webkit-border-radius: 35px; }

.onepagepro-body .gdlr-core-blog-info-wrapper .gdlr-core-blog-info{ font-size: 16px; text-transform: none; letter-spacing: 0px; font-weight: 400; }
.onepagepro-body .gdlr-core-blog-info-wrapper .gdlr-core-head{ vertical-align: baseline; }
.onepagepro-body .gdlr-core-blog-info-wrapper .gdlr-core-head i{ font-size: 16px; }
.onepagepro-body .gdlr-core-blog-grid .gdlr-core-blog-info-wrapper{ padding-top: 0px; border: none; margin-bottom: 22px; }
.onepagepro-body .gdlr-core-blog-grid .gdlr-core-blog-title{ margin-bottom: 15px; }
.onepagepro-body .gdlr-core-blog-grid .gdlr-core-blog-content{ margin-bottom: 30px; }
.onepagepro-body .gdlr-core-blog-grid .gdlr-core-blog-divider{ border-bottom-width: 2px; border-bottom-style: solid; }

.gdlr-core-portfolio-grid .gdlr-core-portfolio-content-wrap .gdlr-core-portfolio-info{ font-size: 15px; }
.gdlr-core-portfolio-grid .gdlr-core-portfolio-content-wrap .gdlr-core-portfolio-title{ margin-bottom: 8px; }
.gdlr-core-portfolio-grid .gdlr-core-portfolio-content-wrap .gdlr-core-portfolio-content{ padding-top: 11px; }
.gdlr-core-portfolio-grid.gdlr-core-style-with-frame .gdlr-core-portfolio-content-wrap{ padding: 40px 40px 30px; position: relative; }

.gdlr-core-recent-portfolio-widget{ margin-right: 14px; margin-bottom: 14px; }

.onepagepro-footer-wrapper{ font-size: 15px; }
.onepagepro-footer-wrapper .onepagepro-widget-title{ font-size: 17px; text-transform: none; letter-spacing: 0px; }
.onepagepro-footer-wrapper .gdlr-core-recent-portfolio-widget{ max-width: 75px; }
.onepagepro-footer-wrapper .gdlr-core-recent-post-widget .gdlr-core-recent-post-widget-thumbnail{ overflow: hidden; max-width: 50px; 
    border-radius: 50%; -moz-border-radius: 50%; -webkit-border-radius: 50%; }
.onepagepro-footer-wrapper .gdlr-core-recent-post-widget .gdlr-core-recent-post-widget-title{ font-size: 15px; font-weight: bold; margin-bottom:5px; } 
.onepagepro-footer-wrapper .gdlr-core-recent-post-widget .gdlr-core-blog-info-author{ display: none; }
.onepagepro-footer-wrapper .gdlr-core-recent-post-widget .gdlr-core-blog-info{ font-size: 16px; text-transform: none; }

.gdlr-core-image-overlay.gdlr-core-round-icon .gdlr-core-image-overlay-icon.gdlr-core-size-22{ margin-left: -36px; margin-top: -36px; width: 40px; font-size: 19px; line-height: 40px; }

.wpcf7 textarea{ height: 140px; }
body .gdlr-core-bottom-border .wpcf7-form-control{  margin-bottom: 22px !important; }
body .gdlr-core-input-wrap .wpcf7-submit.gdlr-core-large{ padding: 19px 31px; min-width: 100px; font-size: 14px; }

<?php
			$css .= ob_get_contents();
			ob_end_clean(); 

			return $css;
		}
	}
	add_filter('gdlr_core_theme_option_bottom_file_write', 'onepagepro_gdlr_core_theme_option_bottom_file_write', 10, 2);
	if( !function_exists('onepagepro_gdlr_core_theme_option_bottom_file_write') ){
		function onepagepro_gdlr_core_theme_option_bottom_file_write( $css, $option_slug ){
			if( $option_slug != 'goodlayers_main_menu' ) return;

			$general = get_option('onepagepro_general');

			if( !empty($general['item-padding']) ){
				$margin = 2 * intval(str_replace('px', '', $general['item-padding']));
				if( !empty($margin) && is_numeric($margin) ){
					$css .= '.onepagepro-item-mgb, .gdlr-core-item-mgb{ margin-bottom: ' . $margin . 'px; }';
				}
			}

			return $css;
		}
	}

	$onepagepro_admin_option->add_element(array(
	
		// general head section
		'title' => esc_html__('General', 'onepagepro'),
		'slug' => 'onepagepro_general',
		'icon' => get_template_directory_uri() . '/include/options/images/general.png',
		'options' => array(
		
			'layout' => array(
				'title' => esc_html__('Layout', 'onepagepro'),
				'options' => array(
					
					'layout' => array(
						'title' => esc_html__('Layout', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'full' => esc_html__('Full', 'onepagepro'),
							'boxed' => esc_html__('Boxed', 'onepagepro'),
						)
					),
					'boxed-layout-top-margin' => array(
						'title' => esc_html__('Box Layout Top/Bottom Margin', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '150',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => 'body.onepagepro-boxed .onepagepro-body-wrapper{ margin-top: #gdlr#; margin-bottom: #gdlr#; }',
						'condition' => array( 'layout' => 'boxed' ) 
					),
					'body-margin' => array(
						'title' => esc_html__('Body Magin ( Frame Spaces )', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => '.onepagepro-body-wrapper.onepagepro-with-frame, body.onepagepro-full .onepagepro-fixed-footer{ margin: #gdlr#; }',
						'condition' => array( 'layout' => 'full' ),
						'description' => esc_html__('This value will be automatically omitted for side header style.', 'onepagepro'),
					),
					'background-type' => array(
						'title' => esc_html__('Background Type', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'color' => esc_html__('Color', 'onepagepro'),
							'image' => esc_html__('Image', 'onepagepro'),
							'pattern' => esc_html__('Pattern', 'onepagepro'),
						)
					),
					'background-image' => array(
						'title' => esc_html__('Background Image', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file', 
						'selector' => '.onepagepro-body-background{ background-image: url(#gdlr#); }',
						'condition' => array( 'background-type' => 'image' )
					),
					'background-image-opacity' => array(
						'title' => esc_html__('Background Image Opacity', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '100',
						'condition' => array( 'background-type' => 'image' ),
						'selector' => '.onepagepro-body-background{ opacity: #gdlr#; }'
					),
					'background-pattern' => array(
						'title' => esc_html__('Background Type', 'onepagepro'),
						'type' => 'radioimage',
						'data-type' => 'text',
						'options' => 'pattern', 
						'selector' => 'body.onepagepro-background-pattern .onepagepro-body-outer-wrapper{ background-image: url(' . GDLR_CORE_URL . '/include/images/pattern/#gdlr#.png); }',
						'condition' => array( 'background-type' => 'pattern' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'enable-boxed-border' => array(
						'title' => esc_html__('Enable Boxed Border', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'pattern' ),
					),
					'item-padding' => array(
						'title' => esc_html__('Item Left/Right Spaces', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '40',
						'data-type' => 'pixel',
						'default' => '15px',
						'description' => 'Space between each page items',
						'selector' => '.onepagepro-item-pdlr, .gdlr-core-item-pdlr{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.onepagepro-item-rvpdlr, .gdlr-core-item-rvpdlr{ margin-left: -#gdlr#; margin-right: -#gdlr#; }' .
							'.gdlr-core-metro-rvpdlr{ margin-top: -#gdlr#; margin-right: -#gdlr#; margin-bottom: -#gdlr#; margin-left: -#gdlr#; }' .
							'.onepagepro-item-mglr, .gdlr-core-item-mglr, .onepagepro-navigation .sf-menu > .onepagepro-mega-menu .sf-mega{ margin-left: #gdlr#; margin-right: #gdlr#; }'
					),
					'container-width' => array(
						'title' => esc_html__('Container Width', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '1180px',
						'selector' => '.onepagepro-container, .gdlr-core-container, body.onepagepro-boxed .onepagepro-body-wrapper, ' . 
							'body.onepagepro-boxed .onepagepro-fixed-footer .onepagepro-footer-wrapper, body.onepagepro-boxed .onepagepro-fixed-footer .onepagepro-copyright-wrapper{ max-width: #gdlr#; }' 
					),
					'container-padding' => array(
						'title' => esc_html__('Container Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.onepagepro-body-front .gdlr-core-container, .onepagepro-body-front .onepagepro-container{ padding-left: #gdlr#; padding-right: #gdlr#; }'  . 
							'.onepagepro-body-front .onepagepro-container .onepagepro-container, .onepagepro-body-front .onepagepro-container .gdlr-core-container, '.
							'.onepagepro-body-front .gdlr-core-container .gdlr-core-container{ padding-left: 0px; padding-right: 0px; }'
					),
					'sidebar-width' => array(
						'title' => esc_html__('Sidebar Width', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'30' => '50%', '20' => '33.33%', '15' => '25%', '12' => '20%', '10' => '16.67%'
						),
						'default' => 20,
					),
					'both-sidebar-width' => array(
						'title' => esc_html__('Both Sidebar Width', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'30' => '50%', '20' => '33.33%', '15' => '25%', '12' => '20%', '10' => '16.67%'
						),
						'default' => 15,
					),
					
				) // header-options
			), // header-nav

			'top-notice' => array(
				'title' => esc_html__('Top Notice Bar', 'onepagepro'),
				'options' => array(
					'enable-top-notice-bar' => array(
						'title' => esc_html__('Enable Top Notice Bar', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'top-notice-bar-initial' => array(
						'title' => esc_html__('Top Notice Bar Initial State', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'close' => esc_html__('Close', 'onepagepro'),
							'open' => esc_html__('Open', 'onepagepro'),
						),
						'condition' => array( 'enable-top-notice-bar' => 'enable' )
					),
					'top-notice-bar-left-text' => array(
						'title' => esc_html__('Top Notice Bar Left Text', 'onepagepro'),
						'type' => 'textarea',
						'condition' => array( 'enable-top-notice-bar' => 'enable' )
					),
					'top-notice-bar-right-text' => array(
						'title' => esc_html__('Top Notice Bar Right Text', 'onepagepro'),
						'type' => 'textarea',
						'condition' => array( 'enable-top-notice-bar' => 'enable' )
					),
					'top-notice-bar-top-padding' => array(
						'title' => esc_html__('Top Notice Bar Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
 						'default' => '20px',
						'selector' => '.onepagepro-top-notice-bar-inner{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-top-notice-bar' => 'enable' )
					),
					'top-notice-bar-bottom-padding' => array(
						'title' => esc_html__('Top Notice Bar Bottom Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '20px',
						'selector' => '.onepagepro-top-notice-bar-inner{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-top-notice-bar' => 'enable' )
					),
					'top-notice-bar-side-padding' => array(
						'title' => esc_html__('Top Notice Bar Left/Right Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '30px',
						'selector' => '.onepagepro-top-notice-bar-inner{ padding-left: #gdlr#; padding-right: #gdlr#; }',
						'condition' => array( 'enable-top-notice-bar' => 'enable' )
					),
				)
			),

			'top-bar' => array(
				'title' => esc_html__('Top Bar', 'onepagepro'),
				'options' => array(

					'enable-top-bar' => array(
						'title' => esc_html__('Enable Top Bar', 'onepagepro'),
						'type' => 'checkbox',
					),
					'enable-top-bar-on-mobile' => array(
						'title' => esc_html__('Enable Top Bar On Mobile', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'top-bar-width' => array(
						'title' => esc_html__('Top Bar Width', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'boxed' => esc_html__('Boxed ( Within Container )', 'onepagepro'),
							'full' => esc_html__('Full', 'onepagepro'),
							'custom' => esc_html__('Custom', 'onepagepro'),
						),
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-width-pixel' => array(
						'title' => esc_html__('Top Bar Width Pixel', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'default' => '1140px',
						'condition' => array( 'enable-top-bar' => 'enable', 'top-bar-width' => 'custom' ),
						'selector' => '.onepagepro-top-bar-container.onepagepro-top-bar-custom-container{ max-width: #gdlr#; }'
					),
					'top-bar-full-side-padding' => array(
						'title' => esc_html__('Top Bar Full ( Left/Right ) Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.onepagepro-top-bar-container.onepagepro-top-bar-full{ padding-right: #gdlr#; padding-left: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable', 'top-bar-width' => 'full' )
					),
					'top-bar-left-text' => array(
						'title' => esc_html__('Top Bar Left Text', 'onepagepro'),
						'type' => 'textarea',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-right-text' => array(
						'title' => esc_html__('Top Bar Right Text', 'onepagepro'),
						'type' => 'textarea',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-top-padding' => array(
						'title' => esc_html__('Top Bar Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
 						'default' => '10px',
						'selector' => '.onepagepro-top-bar{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-bottom-padding' => array(
						'title' => esc_html__('Top Bar Bottom Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '10px',
						'selector' => '.onepagepro-top-bar{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-text-size' => array(
						'title' => esc_html__('Top Bar Text Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.onepagepro-top-bar{ font-size: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-bottom-border' => array(
						'title' => esc_html__('Top Bar Bottom Border', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '10',
						'default' => '0',
						'selector' => '.onepagepro-top-bar{ border-bottom-width: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),

				)
			), // top bar

			'top-bar-social' => array(
				'title' => esc_html__('Top Bar Social', 'onepagepro'),
				'options' => array(
					'enable-top-bar-social' => array(
						'title' => esc_html__('Enable Top Bar Social', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'top-bar-social-delicious' => array(
						'title' => esc_html__('Top Bar Social Delicious Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-email' => array(
						'title' => esc_html__('Top Bar Social Email Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-deviantart' => array(
						'title' => esc_html__('Top Bar Social Deviantart Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-digg' => array(
						'title' => esc_html__('Top Bar Social Digg Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-facebook' => array(
						'title' => esc_html__('Top Bar Social Facebook Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-flickr' => array(
						'title' => esc_html__('Top Bar Social Flickr Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-google-plus' => array(
						'title' => esc_html__('Top Bar Social Google Plus Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-lastfm' => array(
						'title' => esc_html__('Top Bar Social Lastfm Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-linkedin' => array(
						'title' => esc_html__('Top Bar Social Linkedin Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-pinterest' => array(
						'title' => esc_html__('Top Bar Social Pinterest Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-rss' => array(
						'title' => esc_html__('Top Bar Social RSS Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-skype' => array(
						'title' => esc_html__('Top Bar Social Skype Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-stumbleupon' => array(
						'title' => esc_html__('Top Bar Social Stumbleupon Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-tumblr' => array(
						'title' => esc_html__('Top Bar Social Tumblr Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-twitter' => array(
						'title' => esc_html__('Top Bar Social Twitter Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-vimeo' => array(
						'title' => esc_html__('Top Bar Social Vimeo Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-youtube' => array(
						'title' => esc_html__('Top Bar Social Youtube Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-instagram' => array(
						'title' => esc_html__('Top Bar Social Instagram Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-snapchat' => array(
						'title' => esc_html__('Top Bar Social Snapchat Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),

				)
			),			

			'header' => array(
				'title' => esc_html__('Header', 'onepagepro'),
				'options' => array(

					'header-style' => array(
						'title' => esc_html__('Header Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'plain' => esc_html__('Plain', 'onepagepro'),
							'bar' => esc_html__('Bar', 'onepagepro'),
							'boxed' => esc_html__('Boxed', 'onepagepro'),
							'side' => esc_html__('Side Menu', 'onepagepro'),
							'side-toggle' => esc_html__('Side Menu Toggle', 'onepagepro'),
						),
						'default' => 'plain',
					),
					'header-plain-style' => array(
						'title' => esc_html__('Header Plain Style', 'onepagepro'),
						'type' => 'radioimage',
						'options' => array(
							'menu-right' => get_template_directory_uri() . '/images/header/plain-menu-right.jpg',
							'center-logo' => get_template_directory_uri() . '/images/header/plain-center-logo.jpg',
							'center-menu' => get_template_directory_uri() . '/images/header/plain-center-menu.jpg',
							'splitted-menu' => get_template_directory_uri() . '/images/header/plain-splitted-menu.jpg',
						),
						'default' => 'menu-right',
						'condition' => array( 'header-style' => 'plain' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-plain-bottom-border' => array(
						'title' => esc_html__('Plain Header Bottom Border', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '10',
						'default' => '0',
						'selector' => '.onepagepro-header-style-plain{ border-bottom-width: #gdlr#; }',
						'condition' => array( 'header-style' => array('plain') )
					),
					'header-bar-navigation-align' => array(
						'title' => esc_html__('Header Bar Style', 'onepagepro'),
						'type' => 'radioimage',
						'options' => array(
							'left' => get_template_directory_uri() . '/images/header/bar-left.jpg',
							'center' => get_template_directory_uri() . '/images/header/bar-center.jpg',
							'center-logo' => get_template_directory_uri() . '/images/header/bar-center-logo.jpg',
						),
						'default' => 'center',
						'condition' => array( 'header-style' => 'bar' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-background-style' => array(
						'title' => esc_html__('Header/Navigation Background Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'solid' => esc_html__('Solid', 'onepagepro'),
							'transparent' => esc_html__('Transparent', 'onepagepro'),
						),
						'default' => 'solid',
						'condition' => array( 'header-style' => array('plain', 'bar') )
					),
					'top-bar-background-opacity' => array(
						'title' => esc_html__('Top Bar Background Opacity', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'plain', 'header-background-style' => 'transparent' ),
						'selector' => '.onepagepro-header-background-transparent .onepagepro-top-bar-background{ opacity: #gdlr#; }'
					),
					'header-background-opacity' => array(
						'title' => esc_html__('Header Background Opacity', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'plain', 'header-background-style' => 'transparent' ),
						'selector' => '.onepagepro-header-background-transparent .onepagepro-header-background{ opacity: #gdlr#; }'
					),
					'navigation-background-opacity' => array(
						'title' => esc_html__('Navigation Background Opacity', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'bar', 'header-background-style' => 'transparent' ),
						'selector' => '.onepagepro-navigation-bar-wrap.onepagepro-style-transparent .onepagepro-navigation-background{ opacity: #gdlr#; }'
					),
					'header-boxed-style' => array(
						'title' => esc_html__('Header Boxed Style', 'onepagepro'),
						'type' => 'radioimage',
						'options' => array(
							'menu-right' => get_template_directory_uri() . '/images/header/boxed-menu-right.jpg',
							'center-menu' => get_template_directory_uri() . '/images/header/boxed-center-menu.jpg',
							'splitted-menu' => get_template_directory_uri() . '/images/header/boxed-splitted-menu.jpg',
						),
						'default' => 'menu-right',
						'condition' => array( 'header-style' => 'boxed' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'boxed-top-bar-background-opacity' => array(
						'title' => esc_html__('Top Bar Background Opacity', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '0',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.onepagepro-header-boxed-wrap .onepagepro-top-bar-background{ opacity: #gdlr#; }'
					),
					'boxed-top-bar-background-extend' => array(
						'title' => esc_html__('Top Bar Background Extend ( Bottom )', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0px',
						'data-max' => '200px',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.onepagepro-header-boxed-wrap .onepagepro-top-bar-background{ margin-bottom: -#gdlr#; }'
					),
					'boxed-header-top-margin' => array(
						'title' => esc_html__('Header Top Margin', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0px',
						'data-max' => '200px',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.onepagepro-header-style-boxed{ margin-top: #gdlr#; }'
					),
					'header-side-style' => array(
						'title' => esc_html__('Header Side Style', 'onepagepro'),
						'type' => 'radioimage',
						'options' => array(
							'top-left' => get_template_directory_uri() . '/images/header/side-top-left.jpg',
							'middle-left' => get_template_directory_uri() . '/images/header/side-middle-left.jpg',
							'middle-left-2' => get_template_directory_uri() . '/images/header/side-middle-left-2.jpg',
							'top-right' => get_template_directory_uri() . '/images/header/side-top-right.jpg',
							'middle-right' => get_template_directory_uri() . '/images/header/side-middle-right.jpg',
							'middle-right-2' => get_template_directory_uri() . '/images/header/side-middle-right-2.jpg',
						),
						'default' => 'top-left',
						'condition' => array( 'header-style' => 'side' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-side-align' => array(
						'title' => esc_html__('Header Side Text Align', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left',
						'condition' => array( 'header-style' => 'side' )
					),
					'header-side-toggle-style' => array(
						'title' => esc_html__('Header Side Toggle Style', 'onepagepro'),
						'type' => 'radioimage',
						'options' => array(
							'left' => get_template_directory_uri() . '/images/header/side-toggle-left.jpg',
							'right' => get_template_directory_uri() . '/images/header/side-toggle-right.jpg',
						),
						'default' => 'left',
						'condition' => array( 'header-style' => 'side-toggle' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-side-toggle-menu-type' => array(
						'title' => esc_html__('Header Side Toggle Menu Type', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left Slide Menu', 'onepagepro'),
							'right' => esc_html__('Right Slide Menu', 'onepagepro'),
							'overlay' => esc_html__('Overlay Menu', 'onepagepro'),
						),
						'default' => 'overlay',
						'condition' => array( 'header-style' => 'side-toggle' )
					),
					'header-side-toggle-display-logo' => array(
						'title' => esc_html__('Display Logo', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'header-style' => 'side-toggle' )
					),
					'header-width' => array(
						'title' => esc_html__('Header Width', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'boxed' => esc_html__('Boxed ( Within Container )', 'onepagepro'),
							'full' => esc_html__('Full', 'onepagepro'),
							'custom' => esc_html__('Custom', 'onepagepro'),
						),
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'))
					),
					'header-width-pixel' => array(
						'title' => esc_html__('Header Width Pixel', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'default' => '1140px',
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'), 'header-width' => 'custom'),
						'selector' => '.onepagepro-header-container.onepagepro-header-custom-container{ max-width: #gdlr#; }'
					),
					'header-full-side-padding' => array(
						'title' => esc_html__('Header Full ( Left/Right ) Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.onepagepro-header-container.onepagepro-header-full{ padding-right: #gdlr#; padding-left: #gdlr#; }',
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'), 'header-width'=>'full')
					),
					'boxed-header-frame-radius' => array(
						'title' => esc_html__('Header Frame Radius', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '3px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.onepagepro-header-boxed-wrap .onepagepro-header-background{ border-radius: #gdlr#; -moz-border-radius: #gdlr#; -webkit-border-radius: #gdlr#; }'
					),
					'boxed-header-content-padding' => array(
						'title' => esc_html__('Header Content ( Left/Right ) Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '30px',
						'selector' => '.onepagepro-header-style-boxed .onepagepro-header-container-item{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.onepagepro-navigation-right{ right: #gdlr#; } .onepagepro-navigation-left{ left: #gdlr#; }',
						'condition' => array( 'header-style' => 'boxed' )
					),
					'navigation-text-top-margin' => array(
						'title' => esc_html__('Navigation Text Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '0px',
						'condition' => array( 'header-style' => 'plain', 'header-plain-style' => 'splitted-menu' ),
						'selector' => '.onepagepro-header-style-plain.onepagepro-style-splitted-menu .onepagepro-navigation .sf-menu > li > a{ padding-top: #gdlr#; } ' .
							'.onepagepro-header-style-plain.onepagepro-style-splitted-menu .onepagepro-main-menu-left-wrap,' .
							'.onepagepro-header-style-plain.onepagepro-style-splitted-menu .onepagepro-main-menu-right-wrap{ padding-top: #gdlr#; }'
					),
					'navigation-text-top-margin-boxed' => array(
						'title' => esc_html__('Navigation Text Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed', 'header-boxed-style' => 'splitted-menu' ),
						'selector' => '.onepagepro-header-style-boxed.onepagepro-style-splitted-menu .onepagepro-navigation .sf-menu > li > a{ padding-top: #gdlr#; } ' .
							'.onepagepro-header-style-boxed.onepagepro-style-splitted-menu .onepagepro-main-menu-left-wrap,' .
							'.onepagepro-header-style-boxed.onepagepro-style-splitted-menu .onepagepro-main-menu-right-wrap{ padding-top: #gdlr#; }'
					),
					'navigation-text-side-spacing' => array(
						'title' => esc_html__('Navigation Text Side ( Left / Right ) Spaces', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '30',
						'data-type' => 'pixel',
						'default' => '13px',
						'selector' => '.onepagepro-navigation .sf-menu > li{ padding-left: #gdlr#; padding-right: #gdlr#; }',
						'condition' => array( 'header-style' => array('plain', 'bar', 'boxed') )
					),
					'navigation-slide-bar' => array(
						'title' => esc_html__('Navigation Slide Bar', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'header-style' => array('plain', 'bar', 'boxed') )
					),
					'side-header-width-pixel' => array(
						'title' => esc_html__('Header Width Pixel', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '600',
						'default' => '340px',
						'condition' => array('header-style' => array('side', 'side-toggle')),
						'selector' => '.onepagepro-header-side-nav{ width: #gdlr#; }' . 
							'.onepagepro-header-side-content.onepagepro-style-left .gdlr-core-pbf-wrapper,' .
							'.onepagepro-header-side-content.onepagepro-style-left .gdlr-core-pbf-section,' . 
							'.onepagepro-header-side-content.onepagepro-style-left .onepagepro-outer-content-wrap, ' .
							'.onepagepro-header-side-content.onepagepro-style-left .onepagepro-bototm-page-builder-outer-content-wrap, ' . 
							'.onepagepro-header-side-content.onepagepro-style-left .gdlr-core-outer-content-wrap, ' .
							'.onepagepro-header-side-content.onepagepro-style-left .gdlr-core-portfolio-single-related, ' . 
							'.onepagepro-header-side-content.onepagepro-style-left .onepagepro-footer-wrapper, ' . 
							'.onepagepro-header-side-content.onepagepro-style-left .onepagepro-copyright-wrapper{ padding-left: #gdlr# !important; }' . 
							'.onepagepro-header-side-content.onepagepro-style-left .gdlr-core-portfolio-single-nav-wrap, ' . 
							'.onepagepro-header-side-content.onepagepro-style-left .onepagepro-blog-title-wrap, ' . 
							'.onepagepro-header-side-content.onepagepro-style-left .onepagepro-page-title-wrap{ margin-left: #gdlr# !important; } ' . 

							'.onepagepro-header-side-content.onepagepro-style-right .gdlr-core-pbf-wrapper,' .
							'.onepagepro-header-side-content.onepagepro-style-right .gdlr-core-pbf-section,' . 
							'.onepagepro-header-side-content.onepagepro-style-right .onepagepro-outer-content-wrap, ' .
							'.onepagepro-header-side-content.onepagepro-style-right .onepagepro-bototm-page-builder-outer-content-wrap, ' . 
							'.onepagepro-header-side-content.onepagepro-style-right .gdlr-core-outer-content-wrap, ' .
							'.onepagepro-header-side-content.onepagepro-style-right .gdlr-core-portfolio-single-related, ' . 
							'.onepagepro-header-side-content.onepagepro-style-right .onepagepro-footer-wrapper, ' . 
							'.onepagepro-header-side-content.onepagepro-style-right .onepagepro-copyright-wrapper{ padding-right: #gdlr# !important; }' . 
							'.onepagepro-header-side-content.onepagepro-style-right .gdlr-core-portfolio-single-nav-wrap, ' . 
							'.onepagepro-header-side-content.onepagepro-style-right .onepagepro-blog-title-wrap, ' . 
							'.onepagepro-header-side-content.onepagepro-style-right .onepagepro-page-title-wrap{ margin-right: #gdlr# !important; } '
					),
					'side-header-side-padding' => array(
						'title' => esc_html__('Header Side Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '70px',
						'condition' => array('header-style' => 'side'),
						'selector' => '.onepagepro-header-side-nav.onepagepro-style-side{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.onepagepro-header-side-nav.onepagepro-style-left .sf-vertical > li > ul.sub-menu{ padding-left: #gdlr#; }' .
							'.onepagepro-header-side-nav.onepagepro-style-right .sf-vertical > li > ul.sub-menu{ padding-right: #gdlr#; }'
					),
					'header-side-background-image' => array(
						'title' => esc_html__('Header Side Background Image', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file', 
						'selector' => '.onepagepro-style-side .onepagepro-header-side-nav-background{ background-image: url(#gdlr#); }',
						'condition' => array('header-style' => 'side'),
					),
					'single-header-side-background-image' => array(
						'title' => esc_html__('Single Header Side Background Image', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file', 
						'selector' => 'body.single .onepagepro-style-side .onepagepro-header-side-nav-background{ background-image: url(#gdlr#); }',
						'condition' => array('header-style' => 'side'),
					),
					'portfolio-header-side-background-image' => array(
						'title' => esc_html__('Portfolio Header Side Background Image', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file', 
						'selector' => 'body.single-portfolio .onepagepro-style-side .onepagepro-header-side-nav-background{ background-image: url(#gdlr#); }',
						'condition' => array('header-style' => 'side'),
					),
					'header-side-background-opacity' => array(
						'title' => esc_html__('Header Side Background Opacity', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '45',
						'condition' => array('header-style' => 'side'),
						'selector' => '.onepagepro-style-side .onepagepro-header-side-nav-background{ opacity: #gdlr#; }'
					),
					'navigation-text-top-spacing' => array(
						'title' => esc_html__('Navigation Text Top / Bottom Spaces', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '40',
						'data-type' => 'pixel',
						'default' => '16px',
						'selector' => ' .onepagepro-navigation .sf-vertical > li{ padding-top: #gdlr#; padding-bottom: #gdlr#; }',
						'condition' => array( 'header-style' => array('side') )
					),
					'navigation-bottom-divier' => array(
						'title' => esc_html__('Navigation Bottom Divider', 'onepagepro'),
						'type' => 'checkbox',
						'condition' => array('header-style' => 'side'),
					),
					'logo-right-text' => array(
						'title' => esc_html__('Header Right Text', 'onepagepro'),
						'type' => 'textarea',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-text-top-padding' => array(
						'title' => esc_html__('Header Right Text Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '30px',
						'condition' => array('header-style' => 'bar'),
						'selector' => '.onepagepro-header-style-bar .onepagepro-logo-right-text{ padding-top: #gdlr#; }'
					),

				)
			), // header
			
			'logo' => array(
				'title' => esc_html__('Logo', 'onepagepro'),
				'options' => array(
					'logo' => array(
						'title' => esc_html__('Logo', 'onepagepro'),
						'type' => 'upload'
					),
					'mobile-logo' => array(
						'title' => esc_html__('Mobile Logo', 'onepagepro'),
						'type' => 'upload',
						'description' => esc_html__('Leave this option blank to use the same logo.', 'onepagepro'),
					),
					'logo-top-padding' => array(
						'title' => esc_html__('Logo Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.onepagepro-logo{ padding-top: #gdlr#; }',
						'description' => esc_html__('This option will be omitted on splitted menu option.', 'onepagepro'),
					),
					'logo-bottom-padding' => array(
						'title' => esc_html__('Logo Bottom Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.onepagepro-logo{ padding-bottom: #gdlr#; }',
						'description' => esc_html__('This option will be omitted on splitted menu option.', 'onepagepro'),
					),
					'logo-left-padding' => array(
						'title' => esc_html__('Logo Left Padding', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.onepagepro-logo.onepagepro-item-pdlr{ padding-left: #gdlr#; }',
						'description' => esc_html__('Leave this field blank for default value.', 'onepagepro'),
					),
					'max-logo-width' => array(
						'title' => esc_html__('Max Logo Width', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '200px',
						'selector' => '.onepagepro-logo-inner{ max-width: #gdlr#; }'
					),
				
				)
			),
			'navigation' => array(
				'title' => esc_html__('Navigation', 'onepagepro'),
				'options' => array(
					'main-navigation-top-padding' => array(
						'title' => esc_html__('Main Navigation Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '25px',
						'selector' => '.onepagepro-navigation{ padding-top: #gdlr#; }' . 
							'.onepagepro-navigation-top{ top: #gdlr#; }'
					),
					'main-navigation-bottom-padding' => array(
						'title' => esc_html__('Main Navigation Bottom Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.onepagepro-navigation .sf-menu > li > a{ padding-bottom: #gdlr#; }'
					),
					'main-navigation-item-right-padding' => array(
						'title' => esc_html__('Main Navigation Item Right Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => '.onepagepro-navigation .onepagepro-main-menu{ padding-right: #gdlr#; }'
					),
					'main-navigation-right-padding' => array(
						'title' => esc_html__('Main Navigation Wrap Right Padding', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.onepagepro-navigation.onepagepro-item-pdlr{ padding-right: #gdlr#; }',
						'description' => esc_html__('Leave this field blank for default value.', 'onepagepro'),
					),
					'enable-main-navigation-submenu-indicator' => array(
						'title' => esc_html__('Enable Main Navigation Submenu Indicator', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable',
					),
					'enable-main-navigation-search' => array(
						'title' => esc_html__('Enable Main Navigation Search', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'enable-main-navigation-cart' => array(
						'title' => esc_html__('Enable Main Navigation Cart ( Woocommerce )', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'description' => esc_html__('The icon only shows if the woocommerce plugin is activated', 'onepagepro')
					),
					'enable-main-navigation-right-button' => array(
						'title' => esc_html__('Enable Main Navigation Right Button', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable',
						'description' => esc_html__('This option will be ignored on header side style', 'onepagepro')
					),
					'main-navigation-right-button-text' => array(
						'title' => esc_html__('Main Navigation Right Button Text', 'onepagepro'),
						'type' => 'text',
						'default' => esc_html__('Buy Now', 'onepagepro'),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-link' => array(
						'title' => esc_html__('Main Navigation Right Button Link', 'onepagepro'),
						'type' => 'text',
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-link-target' => array(
						'title' => esc_html__('Main Navigation Right Button Link Target', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'_self' => esc_html__('Current Screen', 'onepagepro'),
							'_blank' => esc_html__('New Window', 'onepagepro'),
						),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'right-menu-type' => array(
						'title' => esc_html__('Secondary/Mobile Menu Type', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left Slide Menu', 'onepagepro'),
							'right' => esc_html__('Right Slide Menu', 'onepagepro'),
							'overlay' => esc_html__('Overlay Menu', 'onepagepro'),
						),
						'default' => 'right'
					),
					'right-menu-style' => array(
						'title' => esc_html__('Secondary/Mobile Menu Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'hamburger-with-border' => esc_html__('Hamburger With Border', 'onepagepro'),
							'hamburger' => esc_html__('Hamburger', 'onepagepro'),
						),
						'default' => 'hamburger-with-border'
					),
					
				) // logo-options
			), // logo-navigation			
			
			'fixed-navigation' => array(
				'title' => esc_html__('Fixed Navigation', 'onepagepro'),
				'options' => array(

					'enable-main-navigation-sticky' => array(
						'title' => esc_html__('Enable Fixed Navigation Bar', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'enable-logo-on-main-navigation-sticky' => array(
						'title' => esc_html__('Enable Logo on Fixed Navigation Bar', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' )
					),
					'fixed-navigation-max-logo-width' => array(
						'title' => esc_html__('Max Logo Width', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.onepagepro-fixed-navigation.onepagepro-style-slide .onepagepro-logo-inner img{ max-height: none !important; }' .
							'.onepagepro-animate-fixed-navigation.onepagepro-header-style-plain .onepagepro-logo-inner, ' . 
							'.onepagepro-animate-fixed-navigation.onepagepro-header-style-boxed .onepagepro-logo-inner{ max-width: #gdlr#; }'
					),
					'fixed-navigation-logo-top-padding' => array(
						'title' => esc_html__('Fixed Navigation Logo Top Padding', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '20px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.onepagepro-animate-fixed-navigation.onepagepro-header-style-plain .onepagepro-logo, ' . 
							'.onepagepro-animate-fixed-navigation.onepagepro-header-style-boxed .onepagepro-logo{ padding-top: #gdlr#; }'
					),
					'fixed-navigation-logo-bottom-padding' => array(
						'title' => esc_html__('Fixed Navigation Logo Bottom Padding', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '20px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.onepagepro-animate-fixed-navigation.onepagepro-header-style-plain .onepagepro-logo, ' . 
							'.onepagepro-animate-fixed-navigation.onepagepro-header-style-boxed .onepagepro-logo{ padding-bottom: #gdlr#; }'
					),
					'fixed-navigation-top-padding' => array(
						'title' => esc_html__('Fixed Navigation Top Padding', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '30px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.onepagepro-animate-fixed-navigation.onepagepro-header-style-plain .onepagepro-navigation, ' . 
							'.onepagepro-animate-fixed-navigation.onepagepro-header-style-boxed .onepagepro-navigation{ padding-top: #gdlr#; }' . 
							'.onepagepro-animate-fixed-navigation.onepagepro-header-style-plain .onepagepro-navigation-top, ' . 
							'.onepagepro-animate-fixed-navigation.onepagepro-header-style-boxed .onepagepro-navigation-top{ top: #gdlr#; }'
					),
					'fixed-navigation-bottom-padding' => array(
						'title' => esc_html__('Fixed Navigation Bottom Padding', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '25px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.onepagepro-animate-fixed-navigation.onepagepro-header-style-plain .onepagepro-navigation .sf-menu > li > a, ' . 
							'.onepagepro-animate-fixed-navigation.onepagepro-header-style-boxed .onepagepro-navigation .sf-menu > li > a{ padding-bottom: #gdlr#; }' . 
							'.onepagepro-animate-fixed-navigation.onepagepro-header-style-plain .onepagepro-main-menu-right-wrap:first-child,' .
							'.onepagepro-animate-fixed-navigation.onepagepro-header-style-boxed .onepagepro-main-menu-right-wrap:first-child{ padding-bottom: #gdlr#; }'
					),
					'fixed-navigation-anchor-offset' => array(
						'title' => esc_html__('Fixed Navigation Anchor Offset ( Fixed Navigation Height )', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '75px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
					),

				)
			),

			'title-style' => array(
				'title' => esc_html__('Page Title Style', 'onepagepro'),
				'options' => array(

					'default-title-style' => array(
						'title' => esc_html__('Default Page Title Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'onepagepro'),
							'medium' => esc_html__('Medium', 'onepagepro'),
							'large' => esc_html__('Large', 'onepagepro'),
							'custom' => esc_html__('Custom', 'onepagepro'),
						),
						'default' => 'small'
					),
					'default-title-align' => array(
						'title' => esc_html__('Default Page Title Alignment', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left'
					),
					'default-title-top-padding' => array(
						'title' => esc_html__('Default Page Title Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '350',
						'default' => '93px',
						'selector' => '.onepagepro-page-title-wrap.onepagepro-style-custom .onepagepro-page-title-content{ padding-top: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-bottom-padding' => array(
						'title' => esc_html__('Default Page Title Bottom Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '350',
						'default' => '87px',
						'selector' => '.onepagepro-page-title-wrap.onepagepro-style-custom .onepagepro-page-title-content{ padding-bottom: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-page-caption-top-margin' => array(
						'title' => esc_html__('Default Page Caption Top Margin', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '13px',						
						'selector' => '.onepagepro-page-title-wrap.onepagepro-style-custom .onepagepro-page-caption{ margin-top: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-font-transform' => array(
						'title' => esc_html__('Default Page Title Font Transform', 'onepagepro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'none' => esc_html__('None', 'onepagepro'),
							'uppercase' => esc_html__('Uppercase', 'onepagepro'),
							'lowercase' => esc_html__('Lowercase', 'onepagepro'),
							'capitalize' => esc_html__('Capitalize', 'onepagepro'),
						),
						'default' => 'uppercase',
						'selector' => '.onepagepro-page-title-wrap .onepagepro-page-title{ text-transform: #gdlr#; }'
					),
					'default-title-font-size' => array(
						'title' => esc_html__('Default Page Title Font Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '37px',
						'selector' => '.onepagepro-page-title-wrap.onepagepro-style-custom .onepagepro-page-title{ font-size: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-font-weight' => array(
						'title' => esc_html__('Default Page Title Font Weight', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.onepagepro-page-title-wrap .onepagepro-page-title{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800. Leave this field blank for default value (700).', 'onepagepro')					
					),
					'default-title-letter-spacing' => array(
						'title' => esc_html__('Default Page Title Letter Spacing', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '20',
						'default' => '0px',
						'selector' => '.onepagepro-page-title-wrap.onepagepro-style-custom .onepagepro-page-title{ letter-spacing: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-caption-font-size' => array(
						'title' => esc_html__('Default Page Caption Font Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '16px',
						'selector' => '.onepagepro-page-title-wrap.onepagepro-style-custom .onepagepro-page-caption{ font-size: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-caption-font-weight' => array(
						'title' => esc_html__('Default Page Caption Font Weight', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.onepagepro-page-title-wrap .onepagepro-page-caption{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800. Leave this field blank for default value (400).', 'onepagepro')					
					),
					'default-caption-letter-spacing' => array(
						'title' => esc_html__('Default Page Caption Letter Spacing', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '20',
						'default' => '0px',
						'selector' => '.onepagepro-page-title-wrap.onepagepro-style-custom .onepagepro-page-caption{ letter-spacing: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-background-overlay-opacity' => array(
						'title' => esc_html__('Default Page Title Background Overlay Opacity', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '80',
						'selector' => '.onepagepro-page-title-wrap .onepagepro-page-title-overlay{ opacity: #gdlr#; }'
					),
				) 
			), // title style

			'title-background' => array(
				'title' => esc_html__('Page Title Background', 'onepagepro'),
				'options' => array(

					'default-title-background-style' => array(
						'title' => esc_html__('Default Title Background Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'image' => esc_html__('Image', 'onepagepro'),
							'none' => esc_html__('None', 'onepagepro'),
						),
					),
					'default-title-background' => array(
						'title' => esc_html__('Default Page Title Background', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file',
						'condition' => array( 'default-title-background-style' => 'image' ),
						'selector' => '.onepagepro-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-portfolio-title-background' => array(
						'title' => esc_html__('Default Portfolio Title Background', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file',
						'condition' => array( 'default-title-background-style' => 'image' ),
						'selector' => 'body.single-portfolio .onepagepro-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-personnel-title-background' => array(
						'title' => esc_html__('Default Personnel Title Background', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file',
						'condition' => array( 'default-title-background-style' => 'image' ),
						'selector' => 'body.single-personnel .onepagepro-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-search-title-background' => array(
						'title' => esc_html__('Default Search Title Background', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file',
						'condition' => array( 'default-title-background-style' => 'image' ),
						'selector' => 'body.search .onepagepro-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-archive-title-background' => array(
						'title' => esc_html__('Default Archive Title Background', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file',
						'condition' => array( 'default-title-background-style' => 'image' ),
						'selector' => 'body.archive .onepagepro-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-404-background' => array(
						'title' => esc_html__('Default 404 Background', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file',
						'condition' => array( 'default-title-background-style' => 'image' ),
						'selector' => '.onepagepro-not-found-wrap .onepagepro-not-found-background{ background-image: url(#gdlr#); }'
					),
					'default-404-background-opacity' => array(
						'title' => esc_html__('Default 404 Background Opacity', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '27',
						'condition' => array( 'default-title-background-style' => 'image' ),
						'selector' => '.onepagepro-not-found-wrap .onepagepro-not-found-background{ opacity: #gdlr#; }'
					),

				) 
			), // title background

			'blog-title-style' => array(
				'title' => esc_html__('Blog Title Style', 'onepagepro'),
				'options' => array(

					'default-blog-title-style' => array(
						'title' => esc_html__('Default Blog Title Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'onepagepro'),
							'large' => esc_html__('Large', 'onepagepro'),
							'custom' => esc_html__('Custom', 'onepagepro'),
							'inside-content' => esc_html__('Inside Content', 'onepagepro'),
							'none' => esc_html__('None', 'onepagepro'),
						),
						'default' => 'small'
					),
					'default-blog-title-top-padding' => array(
						'title' => esc_html__('Default Blog Title Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '400',
						'default' => '93px',
						'selector' => '.onepagepro-blog-title-wrap.onepagepro-style-custom .onepagepro-blog-title-content{ padding-top: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => 'custom' )
					),
					'default-blog-title-bottom-padding' => array(
						'title' => esc_html__('Default Blog Title Bottom Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '400',
						'default' => '87px',
						'selector' => '.onepagepro-blog-title-wrap.onepagepro-style-custom .onepagepro-blog-title-content{ padding-bottom: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => 'custom' )
					),
					'default-blog-feature-image' => array(
						'title' => esc_html__('Default Blog Feature Image Location', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'above-content' => esc_html__('Above Content', 'onepagepro'),
							'content' => esc_html__('Inside Content', 'onepagepro'),
							'title-background' => esc_html__('Title Background', 'onepagepro'),
							'none' => esc_html__('None', 'onepagepro'),
						),
						'default' => 'content',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),
					'default-blog-title-background-image' => array(
						'title' => esc_html__('Default Blog Title Background Image', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.onepagepro-blog-title-wrap{ background-image: url(#gdlr#); }',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),
					'default-blog-title-background-overlay-opacity' => array(
						'title' => esc_html__('Default Blog Title Background Overlay Opacity', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '80',
						'selector' => '.onepagepro-blog-title-wrap .onepagepro-blog-title-overlay{ opacity: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),

				) 
			), // post title style			

			'blog-style' => array(
				'title' => esc_html__('Blog Style', 'onepagepro'),
				'options' => array(
					'blog-sidebar' => array(
						'title' => esc_html__('Single Blog Sidebar ( Default )', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'none',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'blog-sidebar-left' => array(
						'title' => esc_html__('Single Blog Sidebar Left ( Default )', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'blog-sidebar'=>array('left', 'both') )
					),
					'blog-sidebar-right' => array(
						'title' => esc_html__('Single Blog Sidebar Right ( Default )', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'blog-sidebar'=>array('right', 'both') )
					),
					'blog-max-content-width' => array(
						'title' => esc_html__('Single Blog Max Content Width ( No sidebar layout )', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'text',
						'data-input-type' => 'pixel',
						'default' => '900px',
						'selector' => 'body.single-post .onepagepro-sidebar-style-none, body.blog .onepagepro-sidebar-style-none{ max-width: #gdlr#; }'
					),
					'blog-thumbnail-size' => array(
						'title' => esc_html__('Single Blog Thumbnail Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
					'meta-option' => array(
						'title' => esc_html__('Meta Option', 'onepagepro'),
						'type' => 'multi-combobox',
						'options' => array( 
							'date' => esc_html__('Date', 'onepagepro'),
							'author' => esc_html__('Author', 'onepagepro'),
							'category' => esc_html__('Category', 'onepagepro'),
							'tag' => esc_html__('Tag', 'onepagepro'),
							'comment' => esc_html__('Comment', 'onepagepro'),
							'comment-number' => esc_html__('Comment Number', 'onepagepro'),
						),
						'default' => array('author', 'category', 'tag', 'comment-number')
					),
					'blog-author' => array(
						'title' => esc_html__('Enable Single Blog Author', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-navigation' => array(
						'title' => esc_html__('Enable Single Blog Navigation', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'pagination-style' => array(
						'title' => esc_html__('Pagination Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'plain' => esc_html__('Plain', 'onepagepro'),
							'rectangle' => esc_html__('Rectangle', 'onepagepro'),
							'rectangle-border' => esc_html__('Rectangle Border', 'onepagepro'),
							'round' => esc_html__('Round', 'onepagepro'),
							'round-border' => esc_html__('Round Border', 'onepagepro'),
							'circle' => esc_html__('Circle', 'onepagepro'),
							'circle-border' => esc_html__('Circle Border', 'onepagepro'),
						),
						'default' => 'round'
					),
					'pagination-align' => array(
						'title' => esc_html__('Pagination Alignment', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'right'
					),
				) // blog-style-options
			), // blog-style-nav

			'blog-social-share' => array(
				'title' => esc_html__('Blog Social Share', 'onepagepro'),
				'options' => array(
					'blog-social-share' => array(
						'title' => esc_html__('Enable Single Blog Share', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-social-share-count' => array(
						'title' => esc_html__('Enable Single Blog Share Count', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-social-facebook' => array(
						'title' => esc_html__('Facebook', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-linkedin' => array(
						'title' => esc_html__('Linkedin', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),			
					'blog-social-google-plus' => array(
						'title' => esc_html__('Google Plus', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-pinterest' => array(
						'title' => esc_html__('Pinterest', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-stumbleupon' => array(
						'title' => esc_html__('Stumbleupon', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),			
					'blog-social-twitter' => array(
						'title' => esc_html__('Twitter', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-email' => array(
						'title' => esc_html__('Email', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
				) // blog-style-options
			), // blog-style-nav
			
			'search-archive' => array(
				'title' => esc_html__('Search/Archive', 'onepagepro'),
				'options' => array(
					'archive-blog-sidebar' => array(
						'title' => esc_html__('Archive Blog Sidebar', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'right',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-blog-sidebar-left' => array(
						'title' => esc_html__('Archive Blog Sidebar Left', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-blog-sidebar'=>array('left', 'both') )
					),
					'archive-blog-sidebar-right' => array(
						'title' => esc_html__('Archive Blog Sidebar Right', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-blog-sidebar'=>array('right', 'both') )
					),
					'archive-blog-style' => array(
						'title' => esc_html__('Archive Blog Style', 'onepagepro'),
						'type' => 'radioimage',
						'options' => array(
							'blog-full' => GDLR_CORE_URL . '/include/images/blog-style/blog-full.png',
							'blog-full-with-frame' => GDLR_CORE_URL . '/include/images/blog-style/blog-full-with-frame.png',
							'blog-column' => GDLR_CORE_URL . '/include/images/blog-style/blog-column.png',
							'blog-column-with-frame' => GDLR_CORE_URL . '/include/images/blog-style/blog-column-with-frame.png',
							'blog-column-no-space' => GDLR_CORE_URL . '/include/images/blog-style/blog-column-no-space.png',
							'blog-image' => GDLR_CORE_URL . '/include/images/blog-style/blog-image.png',
							'blog-image-no-space' => GDLR_CORE_URL . '/include/images/blog-style/blog-image-no-space.png',
							'blog-left-thumbnail' => GDLR_CORE_URL . '/include/images/blog-style/blog-left-thumbnail.png',
							'blog-right-thumbnail' => GDLR_CORE_URL . '/include/images/blog-style/blog-right-thumbnail.png',
						),
						'default' => 'blog-full',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-blog-full-alignment' => array(
						'title' => esc_html__('Archive Blog Full Alignment', 'onepagepro'),
						'type' => 'combobox',
						'default' => 'enable',
						'options' => array(
							'left' => esc_html__('Left', 'onepagepro'),
							'center' => esc_html__('Center', 'onepagepro'),
						),
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame') )
					),
					'archive-thumbnail-size' => array(
						'title' => esc_html__('Archive Thumbnail Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size'
					),
					'archive-show-thumbnail' => array(
						'title' => esc_html__('Archive Show Thumbnail', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail') )
					),
					'archive-column-size' => array(
						'title' => esc_html__('Archive Column Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5 ),
						'default' => 20,
						'condition' => array( 'archive-blog-style' => array('blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-image', 'blog-image-no-space') )
					),
					'archive-excerpt' => array(
						'title' => esc_html__('Archive Excerpt Type', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'specify-number' => esc_html__('Specify Number', 'onepagepro'),
							'show-all' => esc_html__('Show All ( use <!--more--> tag to cut the content )', 'onepagepro'),
						),
						'default' => 'specify-number',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail'))
					),
					'archive-excerpt-number' => array(
						'title' => esc_html__('Archive Excerpt Number', 'onepagepro'),
						'type' => 'text',
						'default' => 55,
						'data-input-type' => 'number',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail'), 'archive-excerpt' => 'specify-number')
					),
					'archive-date-feature' => array(
						'title' => esc_html__('Enable Blog Date Feature', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-left-thumbnail', 'blog-right-thumbnail') )
					),
					'archive-meta-option' => array(
						'title' => esc_html__('Archive Meta Option', 'onepagepro'),
						'type' => 'multi-combobox',
						'options' => array( 
							'date' => esc_html__('Date', 'onepagepro'),
							'author' => esc_html__('Author', 'onepagepro'),
							'category' => esc_html__('Category', 'onepagepro'),
							'tag' => esc_html__('Tag', 'onepagepro'),
							'comment' => esc_html__('Comment', 'onepagepro'),
							'comment-number' => esc_html__('Comment Number', 'onepagepro'),
						),
						'default' => array('date', 'author', 'category')
					),
					'archive-show-read-more' => array(
						'title' => esc_html__('Archive Show Read More Button', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-left-thumbnail', 'blog-right-thumbnail'),)
					),
				)
			),

			'woocommerce-style' => array(
				'title' => esc_html__('Woocommerce Style', 'onepagepro'),
				'options' => array(

					'woocommerce-archive-sidebar' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'right',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'woocommerce-archive-sidebar-left' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar Left', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'woocommerce-archive-sidebar'=>array('left', 'both') )
					),
					'woocommerce-archive-sidebar-right' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar Right', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'woocommerce-archive-sidebar'=>array('right', 'both') )
					),
					'woocommerce-archive-column-size' => array(
						'title' => esc_html__('Woocommerce Archive Column Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15
					),
					'woocommerce-archive-thumbnail' => array(
						'title' => esc_html__('Woocommerce Archive Thumbnail Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
					'woocommerce-related-product-column-size' => array(
						'title' => esc_html__('Woocommerce Related Product Column Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15
					),
					'woocommerce-related-product-num-fetch' => array(
						'title' => esc_html__('Woocommerce Related Product Num Fetch', 'onepagepro'),
						'type' => 'text',
						'default' => 4,
						'data-input-type' => 'number'
					),
					'woocommerce-related-product-thumbnail' => array(
						'title' => esc_html__('Woocommerce Related Product Thumbnail Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
				)
			),

			'portfolio-style' => array(
				'title' => esc_html__('Portfolio Style', 'onepagepro'),
				'options' => array(
					'portfolio-slug' => array(
						'title' => esc_html__('Portfolio Slug (Permalink)', 'onepagepro'),
						'type' => 'text',
						'default' => 'portfolio',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'onepagepro')
					),
					'portfolio-category-slug' => array(
						'title' => esc_html__('Portfolio Category Slug (Permalink)', 'onepagepro'),
						'type' => 'text',
						'default' => 'portfolio_category',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'onepagepro')
					),
					'portfolio-tag-slug' => array(
						'title' => esc_html__('Portfolio Tag Slug (Permalink)', 'onepagepro'),
						'type' => 'text',
						'default' => 'portfolio_tag',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'onepagepro')
					),
					'enable-single-portfolio-navigation' => array(
						'title' => esc_html__('Enable Single Portfolio Navigation', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'enable-single-portfolio-navigation-in-same-tag' => array(
						'title' => esc_html__('Enable Single Portfolio Navigation Within Same Tag', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'enable-single-portfolio-navigation' => 'enable' )
					),
					'portfolio-icon-hover-link' => array(
						'title' => esc_html__('Portfolio Hover Icon (Link)', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'hover-icon-link',
						'default' => 'icon_link_alt'
					),
					'portfolio-icon-hover-video' => array(
						'title' => esc_html__('Portfolio Hover Icon (Video)', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'hover-icon-video',
						'default' => 'icon_film'
					),
					'portfolio-icon-hover-image' => array(
						'title' => esc_html__('Portfolio Hover Icon (Image)', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'hover-icon-image',
						'default' => 'icon_zoom-in_alt'
					),
					'portfolio-icon-hover-size' => array(
						'title' => esc_html__('Portfolio Hover Icon Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '22px',
						'selector' => '.gdlr-core-portfolio-thumbnail .gdlr-core-portfolio-icon{ font-size: #gdlr#; }' 
					),
					'enable-related-portfolio' => array(
						'title' => esc_html__('Enable Related Portfolio', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'related-portfolio-style' => array(
						'title' => esc_html__('Related Portfolio Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'grid' => esc_html__('Grid', 'onepagepro'),
							'modern' => esc_html__('Modern', 'onepagepro'),
						),
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-column-size' => array(
						'title' => esc_html__('Related Portfolio Column Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15,
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-num-fetch' => array(
						'title' => esc_html__('Related Portfolio Num Fetch', 'onepagepro'),
						'type' => 'text',
						'default' => 4,
						'data-input-type' => 'number',
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-thumbnail-size' => array(
						'title' => esc_html__('Related Portfolio Thumbnail Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'condition' => array('enable-related-portfolio'=>'enable'),
						'default' => 'medium'
					),
					'related-portfolio-num-excerpt' => array(
						'title' => esc_html__('Related Portfolio Num Excerpt', 'onepagepro'),
						'type' => 'text',
						'default' => 20,
						'data-input-type' => 'number',
						'condition' => array('enable-related-portfolio'=>'enable', 'related-portfolio-style'=>'grid')
					),
				)
			),

			'portfolio-archive' => array(
				'title' => esc_html__('Portfolio Archive', 'onepagepro'),
				'options' => array(
					'archive-portfolio-sidebar' => array(
						'title' => esc_html__('Archive Portfolio Sidebar', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'none',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-sidebar-left' => array(
						'title' => esc_html__('Archive Portfolio Sidebar Left', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-portfolio-sidebar'=>array('left', 'both') )
					),
					'archive-portfolio-sidebar-right' => array(
						'title' => esc_html__('Archive Portfolio Sidebar Right', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-portfolio-sidebar'=>array('right', 'both') )
					),
					'archive-portfolio-style' => array(
						'title' => esc_html__('Archive Portfolio Style', 'onepagepro'),
						'type' => 'radioimage',
						'options' => array(
							'modern' => get_template_directory_uri() . '/include/options/images/portfolio/modern.png',
							'modern-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/modern-no-space.png',
							'grid' => get_template_directory_uri() . '/include/options/images/portfolio/grid.png',
							'grid-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/grid-no-space.png',
							'modern-desc' => get_template_directory_uri() . '/include/options/images/portfolio/modern-desc.png',
							'modern-desc-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/modern-desc-no-space.png',
							'medium' => get_template_directory_uri() . '/include/options/images/portfolio/medium.png',
						),
						'default' => 'medium',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-thumbnail-size' => array(
						'title' => esc_html__('Archive Portfolio Thumbnail Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size'
					),
					'archive-portfolio-grid-text-align' => array(
						'title' => esc_html__('Archive Portfolio Grid Text Align', 'onepagepro'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space' ) )
					),
					'archive-portfolio-grid-style' => array(
						'title' => esc_html__('Archive Portfolio Grid Content Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'normal' => esc_html__('Normal', 'onepagepro'),
							'with-frame' => esc_html__('With Frame', 'onepagepro'),
							'with-bottom-border' => esc_html__('With Bottom Border', 'onepagepro'),
						),
						'default' => 'normal',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space' ) )
					),
					'archive-enable-portfolio-tag' => array(
						'title' => esc_html__('Archive Enable Portfolio Tag', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ) )
					),
					'archive-portfolio-medium-size' => array(
						'title' => esc_html__('Archive Portfolio Medium Thumbnail Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'onepagepro'),
							'large' => esc_html__('Large', 'onepagepro'),
						),
						'condition' => array( 'archive-portfolio-style' => 'medium' )
					),
					'archive-portfolio-medium-style' => array(
						'title' => esc_html__('Archive Portfolio Medium Thumbnail Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left', 'onepagepro'),
							'right' => esc_html__('Right', 'onepagepro'),
							'switch' => esc_html__('Switch ( Between Left and Right )', 'onepagepro'),
						),
						'default' => 'switch',
						'condition' => array( 'archive-portfolio-style' => 'medium' )
					),
					'archive-portfolio-hover' => array(
						'title' => esc_html__('Archive Portfolio Hover Style', 'onepagepro'),
						'type' => 'radioimage',
						'options' => array(
							'title' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title.png',
							'title-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title-icon.png',
							'title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title-tag.png',
							'icon-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/icon-title-tag.png',
							'icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/icon.png',
							'margin-title' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title.png',
							'margin-title-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title-icon.png',
							'margin-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title-tag.png',
							'margin-icon-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-icon-title-tag.png',
							'margin-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-icon.png',
							'none' => get_template_directory_uri() . '/include/options/images/portfolio/hover/none.png',
						),
						'default' => 'icon',
						'max-width' => '100px',
						'condition' => array( 'archive-portfolio-style' => array('modern', 'modern-no-space', 'grid', 'grid-no-space', 'medium') ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-column-size' => array(
						'title' => esc_html__('Archive Portfolio Column Size', 'onepagepro'),
						'type' => 'combobox',
						'options' => array( 60=>1, 30=>2, 20=>3, 15=>4, 12=>5 ),
						'default' => 20,
						'condition' => array( 'archive-portfolio-style' => array('modern', 'modern-no-space', 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space') )
					),
					'archive-portfolio-excerpt' => array(
						'title' => esc_html__('Archive Portfolio Excerpt Type', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'specify-number' => esc_html__('Specify Number', 'onepagepro'),
							'show-all' => esc_html__('Show All ( use <!--more--> tag to cut the content )', 'onepagepro'),
							'none' => esc_html__('Disable Exceprt', 'onepagepro'),
						),
						'default' => 'specify-number',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ) )
					),
					'archive-portfolio-excerpt-number' => array(
						'title' => esc_html__('Archive Portfolio Excerpt Number', 'onepagepro'),
						'type' => 'text',
						'default' => 55,
						'data-input-type' => 'number',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ), 'archive-portfolio-excerpt' => 'specify-number' )
					),

				)
			),

			'personnel-style' => array(
				'title' => esc_html__('Personnel Style', 'onepagepro'),
				'options' => array(
					'personnel-slug' => array(
						'title' => esc_html__('Personnel Slug (Permalink)', 'onepagepro'),
						'type' => 'text',
						'default' => 'personnel',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'onepagepro')
					),
					'personnel-category-slug' => array(
						'title' => esc_html__('Personnel Category Slug (Permalink)', 'onepagepro'),
						'type' => 'text',
						'default' => 'personnel_category',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'onepagepro')
					),
				)
			),

			'footer' => array(
				'title' => esc_html__('Footer/Copyright', 'onepagepro'),
				'options' => array(

					'fixed-footer' => array(
						'title' => esc_html__('Fixed Footer', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'enable-footer' => array(
						'title' => esc_html__('Enable Footer', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'footer-background-image' => array(
						'title' => esc_html__('Footer Background Image', 'onepagepro'),
						'type' => 'upload',
						'data-type' => 'file', 
						'selector' => '.onepagepro-footer-background{ background-image: url(#gdlr#); }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-background-image-opacity' => array(
						'title' => esc_html__('Footer Background Image Opacity', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '100',
						'condition' => array( 'enable-footer' => 'enable' ),
						'selector' => '.onepagepro-footer-background{ opacity: #gdlr#; }'
					),
					'footer-top-padding' => array(
						'title' => esc_html__('Footer Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '70px',
						'selector' => '.onepagepro-footer-wrapper{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-bottom-padding' => array(
						'title' => esc_html__('Footer Bottom Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '50px',
						'selector' => '.onepagepro-footer-wrapper{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-style' => array(
						'title' => esc_html__('Footer Style', 'onepagepro'),
						'type' => 'radioimage',
						'wrapper-class' => 'gdlr-core-fullsize',
						'options' => array(
							'footer-1' => get_template_directory_uri() . '/include/options/images/footer-style1.png',
							'footer-2' => get_template_directory_uri() . '/include/options/images/footer-style2.png',
							'footer-3' => get_template_directory_uri() . '/include/options/images/footer-style3.png',
							'footer-4' => get_template_directory_uri() . '/include/options/images/footer-style4.png',
							'footer-5' => get_template_directory_uri() . '/include/options/images/footer-style5.png',
							'footer-6' => get_template_directory_uri() . '/include/options/images/footer-style6.png',
						),
						'default' => 'footer-2',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'enable-copyright' => array(
						'title' => esc_html__('Enable Copyright', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'copyright-style' => array(
						'title' => esc_html__('Copyright Style', 'onepagepro'),
						'type' => 'combobox',
						'options' => array(
							'center' => esc_html__('Center', 'onepagepro'),
							'left-right' => esc_html__('Left & Right', 'onepagepro'),
						),
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-top-padding' => array(
						'title' => esc_html__('Copyright Top Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '38px',
						'selector' => '.onepagepro-copyright-container{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-bottom-padding' => array(
						'title' => esc_html__('Copyright Bottom Padding', 'onepagepro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '38px',
						'selector' => '.onepagepro-copyright-container{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-font-letter-spacing' => array(
						'title' => esc_html__('Copyright Font Letter Spacing', 'onepagepro'),
						'type' => 'text',
						'data-input-type' => 'pixel',
						'data-type' => 'pixel',
						'default' => '2px',
						'selector' => '.onepagepro-copyright-container{ letter-spacing: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-text-transform' => array(
						'title' => esc_html__('Copyright Text Transform', 'onepagepro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'onepagepro'),
							'lowercase' => esc_html__('Lowercase', 'onepagepro'),
							'capitalize' => esc_html__('Capitalize', 'onepagepro'),
							'none' => esc_html__('None', 'onepagepro'),
						),
						'default' => 'uppercase',
						'selector' => '.onepagepro-copyright-container{ text-transform: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),			
					'copyright-text' => array(
						'title' => esc_html__('Copyright Text', 'onepagepro'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-left' => array(
						'title' => esc_html__('Copyright Left', 'onepagepro'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable', 'copyright-style' => 'left-right' )
					),
					'copyright-right' => array(
						'title' => esc_html__('Copyright Right', 'onepagepro'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable', 'copyright-style' => 'left-right' )
					),
					'enable-back-to-top' => array(
						'title' => esc_html__('Enable Back To Top Button', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
				) // footer-options
			), // footer-nav	
		
		) // general-options
		
	), 2);