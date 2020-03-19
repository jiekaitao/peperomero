<?php
	/*	
	*	Goodlayers Option
	*	---------------------------------------------------------------------
	*	This file store an array of theme options
	*	---------------------------------------------------------------------
	*/	

	$onepagepro_admin_option->add_element(array(
	
		// typography head section
		'title' => esc_html__('Typography', 'onepagepro'),
		'slug' => 'onepagepro_typography',
		'icon' => get_template_directory_uri() . '/include/options/images/typography.png',
		'options' => array(
		
			// starting the subnav
			'font-family' => array(
				'title' => esc_html__('Font Family', 'onepagepro'),
				'options' => array(
					'heading-font' => array(
						'title' => esc_html__('Heading Font', 'onepagepro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.onepagepro-body h1, .onepagepro-body h2, .onepagepro-body h3, ' . 
							'.onepagepro-body h4, .onepagepro-body h5, .onepagepro-body h6, .onepagepro-body .onepagepro-title-font,' .
							'.onepagepro-body .gdlr-core-title-font{ font-family: #gdlr#; }' . 
							'.woocommerce-breadcrumb, .woocommerce span.onsale, ' .
							'.single-product.woocommerce div.product p.price .woocommerce-Price-amount, .single-product.woocommerce #review_form #respond label{ font-family: #gdlr#; }'
					),
					'navigation-font' => array(
						'title' => esc_html__('Navigation Font', 'onepagepro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.onepagepro-navigation .sf-menu > li > a, .onepagepro-navigation .sf-vertical > li > a, .onepagepro-navigation-font{ font-family: #gdlr#; }'
					),	
					'content-font' => array(
						'title' => esc_html__('Content Font', 'onepagepro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.onepagepro-body, .onepagepro-body .gdlr-core-content-font, ' . 
							'.onepagepro-body input, .onepagepro-body textarea, .onepagepro-body button, .onepagepro-body select, ' . 
							'.onepagepro-body .onepagepro-content-font, .gdlr-core-audio .mejs-container *{ font-family: #gdlr#; }'
					),
					'info-font' => array(
						'title' => esc_html__('Info Font', 'onepagepro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.onepagepro-body .gdlr-core-info-font, .onepagepro-body .onepagepro-info-font{ font-family: #gdlr#; }'
					),
					'blog-info-font' => array(
						'title' => esc_html__('Blog Info Font', 'onepagepro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.onepagepro-body .gdlr-core-blog-info-font, .onepagepro-body .onepagepro-blog-info-font{ font-family: #gdlr#; }'
					),
					'quote-font' => array(
						'title' => esc_html__('Quote Font', 'onepagepro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.onepagepro-body .gdlr-core-quote-font{ font-family: #gdlr#; }'
					),

					'additional-font' => array(
						'title' => esc_html__('Additional Font', 'onepagepro'),
						'type' => 'font',
						'data-type' => 'font',
						'customizer' => false,
						'default' => 'Georgia, serif',
						'description' => esc_html__('Additional font you want to include for custom css.', 'onepagepro')
					),
					'additional-font2' => array(
						'title' => esc_html__('Additional Font2', 'onepagepro'),
						'type' => 'font',
						'data-type' => 'font',
						'customizer' => false,
						'default' => 'Georgia, serif',
						'description' => esc_html__('Additional font you want to include for custom css.', 'onepagepro')
					),
					
				) // font-family-options
			), // font-family-nav
			
			'font-size' => array(
				'title' => esc_html__('Font Size', 'onepagepro'),
				'options' => array(
				
					'h1-font-size' => array(
						'title' => esc_html__('H1 Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '52px',
						'selector' => '.onepagepro-body h1{ font-size: #gdlr#; }' 
					),					
					'h2-font-size' => array(
						'title' => esc_html__('H2 Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '48px',
						'selector' => '.onepagepro-body h2, #poststuff .gdlr-core-page-builder-body h2{ font-size: #gdlr#; }' 
					),					
					'h3-font-size' => array(
						'title' => esc_html__('H3 Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '36px',
						'selector' => '.onepagepro-body h3{ font-size: #gdlr#; }' 
					),					
					'h4-font-size' => array(
						'title' => esc_html__('H4 Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '28px',
						'selector' => '.onepagepro-body h4{ font-size: #gdlr#; }' 
					),					
					'h5-font-size' => array(
						'title' => esc_html__('H5 Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '22px',
						'selector' => '.onepagepro-body h5{ font-size: #gdlr#; }' 
					),					
					'h6-font-size' => array(
						'title' => esc_html__('H6 Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '18px',
						'selector' => '.onepagepro-body h6{ font-size: #gdlr#; }' 
					),					
					'navigation-font-size' => array(
						'title' => esc_html__('Navigation Font Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '14px',
						'selector' => '.onepagepro-navigation .sf-menu > li > a, .onepagepro-navigation .sf-vertical > li > a{ font-size: #gdlr#; }' 
					),	
					'navigation-font-weight' => array(
						'title' => esc_html__('Navigation Font Weight', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'text',
						'default' => '800',
						'selector' => '.onepagepro-navigation .sf-menu > li > a, .onepagepro-navigation .sf-vertical > li > a{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'onepagepro')
					),	
					'navigation-font-letter-spacing' => array(
						'title' => esc_html__('Navigation Font Letter Spacing', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.onepagepro-navigation .sf-menu > li > a, .onepagepro-navigation .sf-vertical > li > a{ letter-spacing: #gdlr#; }'
					),
					'navigation-text-transform' => array(
						'title' => esc_html__('Navigation Text Transform', 'onepagepro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'onepagepro'),
							'lowercase' => esc_html__('Lowercase', 'onepagepro'),
							'capitalize' => esc_html__('Capitalize', 'onepagepro'),
							'none' => esc_html__('None', 'onepagepro'),
						),
						'default' => 'uppercase',
						'selector' => '.onepagepro-navigation .sf-menu > li > a, .onepagepro-navigation .sf-vertical > li > a{ text-transform: #gdlr#; }',
					),
					'content-font-size' => array(
						'title' => esc_html__('Content Size', 'onepagepro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.onepagepro-body{ font-size: #gdlr#; }' 
					),
					'content-line-height' => array(
						'title' => esc_html__('Content Line Height', 'onepagepro'),
						'type' => 'text',
						'data-type' => 'text',
						'default' => '1.7',
						'selector' => '.onepagepro-body, .onepagepro-body p, .onepagepro-line-height, .gdlr-core-line-height{ line-height: #gdlr#; }'
					),
					
				) // font-size-options
			), // font-size-nav			
			
			'font-upload' => array(
				'title' => esc_html__('Font Uploader', 'onepagepro'),
				'reload-after' => true,
				'customizer' => false,
				'options' => array(
				
					'font-upload' => array(
						'title' => esc_html__('Upload Fonts', 'onepagepro'),
						'type' => 'custom',
						'item-type' => 'fontupload',
						'wrapper-class' => 'gdlr-core-fullsize',
					),
					
				) // fontupload-options
			), // fontupload-nav
		
		) // typography-options
		
	), 4);