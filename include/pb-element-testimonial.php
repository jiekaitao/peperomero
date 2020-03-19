<?php
	/*	
	*	Goodlayers Item For Page Builder
	*/
	
	if( class_exists('gdlr_core_page_builder_element') ){
		gdlr_core_page_builder_element::add_element('testimonial', 'onepagepro_gdlr_core_pb_element_testimonial'); 
	}

	if( !class_exists('onepagepro_gdlr_core_pb_element_testimonial') ){
		class onepagepro_gdlr_core_pb_element_testimonial{
			
			// get the element settings
			static function get_settings(){
				return array(
					'icon' => 'fa-quote-right',
					'title' => esc_html__('Testimonial', 'onepagepro')
				);
			}
			
			// return the element options
			static function get_options(){
				global $gdlr_core_item_pdb;
				
				return array(
					'general' => array(
						'title' => esc_html__('General', 'onepagepro'),
						'options' => array(
							'title' => array(
								'title' => esc_html__('Title', 'onepagepro'),
								'type' => 'text',
								'default' => esc_html__('Sample Testimonial Title', 'onepagepro'),
							),
							'title-left-icon' => array(
								'title' => esc_html__('Title Left Icon ( Only for center style )', 'onepagepro'),
								'type' => 'icons',
								'allow-none' => true,
								'wrapper-class' => 'gdlr-core-fullsize',
							),
							'caption' => array(
								'title' => esc_html__('Caption ( Only for center style )', 'onepagepro'),
								'type' => 'text'
							),
							'tabs' => array(
								'title' => esc_html__('Add Testimonial Tab', 'onepagepro'),
								'type' => 'custom',
								'item-type' => 'tabs',
								'wrapper-class' => 'gdlr-core-fullsize',
								'options' => array(
									'title' => array(
										'title' => esc_html__('Name', 'onepagepro'),
										'type' => 'text'
									),
									'position' => array(
										'title' => esc_html__('Position', 'onepagepro'),
										'type' => 'text'
									),
									'content' => array(
										'title' => esc_html__('Content', 'onepagepro'),
										'type' => 'textarea'
									),
									'image' => array(
										'title' => esc_html__('Author Image', 'onepagepro'),
										'type' => 'upload'
									),
									'rating' => array(
										'title' => esc_html__('Rating ( Fill number 1 to 10 )', 'onepagepro'),
										'type' => 'text'
									),
								),
								'default' => array(
									array(
										'title' => esc_html__('Sameple Name', 'onepagepro'),
										'position' => esc_html__('Sample Position', 'onepagepro'),
										'content' => esc_html__('Sample testimonial content area', 'onepagepro'),
										'image' => '',
									),
									array(
										'title' => esc_html__('Sameple Name', 'onepagepro'),
										'position' => esc_html__('Sample Position', 'onepagepro'),
										'content' => esc_html__('Sample testimonial content area', 'onepagepro'),
										'image' => '',
									),
								)
							),
						),
					),
					'style' => array(
						'title' => esc_html('Style', 'onepagepro'),
						'options' => array(
							'style' => array(
								'title' => esc_html__('Testimonial Style', 'onepagepro'),
								'type' => 'radioimage',
								'options' => array(
									'left' => GDLR_CORE_URL . '/include/images/testimonial/left.png',
									'center' => GDLR_CORE_URL . '/include/images/testimonial/center.png',
									'right' => GDLR_CORE_URL . '/include/images/testimonial/right.png',
								),
								'default' => 'left',
								'wrapper-class' => 'gdlr-core-fullsize'
							),
							'column' => array(
								'title' => esc_html__('Column Number', 'onepagepro'),
								'type' => 'combobox',
								'options' => array( 1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6),
								'default' => 3
							),
							'enable-quote' => array(
								'title' => esc_html__('Enable Testimonial Quote', 'onepagepro'),
								'type' => 'checkbox',
								'default' => 'enable'
							),
							'carousel' => array(
								'title' => esc_html__('Enable Carousel', 'onepagepro'),
								'type' => 'checkbox',
								'default' => 'disable'
							),
							'carousel-autoslide' => array(
								'title' => esc_html__('Autoslide Carousel', 'onepagepro'),
								'type' => 'checkbox',
								'default' => 'enable',
								'condition' => array( 'carousel' => 'enable' )
							),
							'carousel-navigation' => array(
								'title' => esc_html__('Carousel Navigation', 'onepagepro'),
								'type' => 'combobox',
								'options' => array(
									'none' => esc_html__('None', 'onepagepro'),
									'navigation' => esc_html__('Only Navigation', 'onepagepro'),
									'bullet' => esc_html__('Only Bullet', 'onepagepro'),
									'both' => esc_html__('Both Navigation and Bullet', 'onepagepro'),
								),
								'default' => 'navigation',
								'condition' => array( 'carousel' => 'enable' )
							),
							'carousel-nav-style' => array(
								'title' => esc_html__('Carousel Nav Style', 'onepagepro'),
								'type' => 'combobox',
								'options' => array(
									'default' => esc_html__('Default', 'onepagepro'),
									'gdlr-core-plain-style gdlr-core-small' => esc_html__('Small Plain Style', 'onepagepro'),
									'gdlr-core-plain-style' => esc_html__('Plain Style', 'onepagepro'),
									'gdlr-core-plain-circle-style' => esc_html__('Plain Circle Style', 'onepagepro'),
									'gdlr-core-round-style' => esc_html__('Large Round Style', 'onepagepro'),
									'gdlr-core-rectangle-style' => esc_html__('Rectangle Style', 'onepagepro'),
									'gdlr-core-rectangle-style gdlr-core-large' => esc_html__('Large Rectangle Style', 'onepagepro'),
								),
								'condition' => array( 'carousel' => 'enable', 'carousel-navigation' => array('navigation','both') )
							),
							'side-border' => array(
								'title' => esc_html__('Title Side Border', 'onepagepro'),
								'type' => 'combobox',
								'options' => array(
									'none' => esc_html__('None', 'onepagepro'),
									'left' => esc_html__('Left', 'onepagepro'),
									'right' => esc_html__('Right', 'onepagepro'),
								),
								'default' => 'none'
							),
							'side-border-divider-color' => array(
								'title' => esc_html__('Title Side Border Divider Color', 'onepagepro'),
								'type' => 'colorpicker',
								'condition' => array( 'side-border' => array('left', 'right')  )
							),	
						)
					),
					'typography' => array(
						'title' => esc_html('Typograhy', 'onepagepro'),
						'options' => array(
							'title-size' => array(
								'title' => esc_html__('Title Size', 'onepagepro'),
								'type' => 'fontslider',
								'default' => '28px'
							),
							'title-text-transform' => array(
								'title' => esc_html__('Title Text Transform', 'onepagepro'),
								'type' => 'combobox',
								'data-type' => 'text',
								'options' => array(
									'none' => esc_html__('None', 'onepagepro'),
									'uppercase' => esc_html__('Uppercase', 'onepagepro'),
									'lowercase' => esc_html__('Lowercase', 'onepagepro'),
									'capitalize' => esc_html__('Capitalize', 'onepagepro'),
								),
								'default' => 'uppercase'
							),
							'title-letter-spacing' => array(
								'title' => esc_html__('Title Letter Spacing', 'onepagepro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
							),
							'caption-size' => array(
								'title' => esc_html__('Caption Size', 'onepagepro'),
								'type' => 'fontslider',
								'default' => '16px',
								'condition' => array( 'style' => 'center' )
							),
							'content-size' => array(
								'title' => esc_html__('Content Size', 'onepagepro'),
								'type' => 'fontslider',
								'default' => '15px'
							)
						)
					),				
					'color' => array(
						'title' => esc_html('Color', 'onepagepro'),
						'options' => array(
							'title-color' => array(
								'title' => esc_html__('Title Color', 'onepagepro'),
								'type' => 'colorpicker'
							),
							'caption-color' => array(
								'title' => esc_html__('Caption Color', 'onepagepro'),
								'type' => 'colorpicker',
								'condition' => array( 'style' => 'center' )
							),
							'quote-color' => array(
								'title' => esc_html__('Quote Color', 'onepagepro'),
								'type' => 'colorpicker'
							),
							'content-color' => array(
								'title' => esc_html__('Content Color', 'onepagepro'),
								'type' => 'colorpicker'
							),
							'name-color' => array(
								'title' => esc_html__('Name Color', 'onepagepro'),
								'type' => 'colorpicker'
							),
							'position-color' => array(
								'title' => esc_html__('Position Color', 'onepagepro'),
								'type' => 'colorpicker'
							)
						)
					),
					'spacing' => array(
						'title' => esc_html('Spacing', 'onepagepro'),
						'options' => array(
							'title-wrap-bottom-margin' => array(
								'title' => esc_html__('Title Wrap Bottom Margin', 'onepagepro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
							),
							'content-bottom-padding' => array(
								'title' => esc_html__('Content Bottom Margin', 'onepagepro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => '0px'
							),
							'padding-bottom' => array(
								'title' => esc_html__('Padding Bottom ( Item )', 'onepagepro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => $gdlr_core_item_pdb
							)
						)
					)
				);
			}

			// get the preview for page builder
			static function get_preview( $settings = array() ){
				$content  = self::get_content($settings);
				$id = mt_rand(0, 9999);
				
				ob_start();
?><script type="text/javascript" id="gdlr-core-preview-testimonial-<?php echo esc_attr($id); ?>" >
jQuery(document).ready(function(){
	jQuery('#gdlr-core-preview-testimonial-<?php echo esc_attr($id); ?>').parent().gdlr_core_flexslider();
});
</script><?php	
				$content .= ob_get_contents();
				ob_end_clean();
				
				return $content;
			}		
			
			// get the content from settings
			static function get_content( $settings = array() ){
				global $gdlr_core_item_pdb;

				// default variable
				if( empty($settings) ){
					$settings = array(
						'title' => esc_html__('Sample Testimonial Title', 'onepagepro'),
						'tabs' => array(
							array(
								'title' => esc_html__('Sameple Name', 'onepagepro'),
								'position' => esc_html__('Sample Position', 'onepagepro'),
								'content' => esc_html__('Sample testimonial content area', 'onepagepro'),
								'image' => '',
							),
							array(
								'title' => esc_html__('Sameple Name', 'onepagepro'),
								'position' => esc_html__('Sample Position', 'onepagepro'),
								'content' => esc_html__('Sample testimonial content area', 'onepagepro'),
								'image' => '',
							),
						),
						'column' => 3, 'carousel' => 'disable', 'style' => 'left', 
						'padding-bottom' => $gdlr_core_item_pdb
					);
				}
				
				// default value
				$settings['style'] = empty($settings['style'])? 'left': $settings['style'];
				$settings['column'] = empty($settings['column'])? '3': $settings['column'];
				$settings['carousel'] = empty($settings['carousel'])? 'disable': $settings['carousel'];

				// start printing item
				$extra_class  = ' gdlr-core-testimonial-style-' . $settings['style'];
				$extra_class .= ($settings['carousel'] == 'enable')? ' gdlr-core-item-pdlr': '';
				$extra_class .= empty($settings['class'])? '': ' ' . $settings['class'];
				
				$ret  = '<div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix ' . esc_attr($extra_class) . '" ';
				if( !empty($settings['padding-bottom']) && $settings['padding-bottom'] != $gdlr_core_item_pdb ){
					$ret .= gdlr_core_esc_style(array('padding-bottom'=>$settings['padding-bottom']));
				}
				if( !empty($settings['id']) ){
					$ret .= ' id="' . esc_attr($settings['id']) . '" ';
				}
				$ret .= ' >';

				if( !empty($settings['title']) && $settings['style'] == 'center' ){
					if( $settings['carousel'] == 'disable' ){
						$title_settings = $settings;
						$title_settings['title-align'] = 'center';
						$title_settings['title-text-transform'] = (empty($settings['title-text-transform']) || $settings['title-text-transform'] == 'uppercase')? '': $settings['title-text-transform'];
						$title_settings['title-letter-spacing'] = empty($title_settings['title-letter-spacing'])? '': $title_settings['title-letter-spacing'];
						$ret .= gdlr_core_block_item_title($title_settings);
					}

				}else if( !empty($settings['title']) ){
					$side_border = '';
					if( !empty($settings['side-border']) && $settings['side-border'] != 'none' ){
						$side_border  = '<span class="gdlr-core-title-item-side-border gdlr-core-skin-divider gdlr-core-' . esc_attr($settings['side-border']) . '" ' . gdlr_core_esc_style(array(
							'border-color' => empty($settings['side-border-divider-color'])? '': $settings['side-border-divider-color']
						)) . ' ></span>';
					}

					$ret .= '<div class="gdlr-core-testimonial-item-title-wrap ' . (($settings['carousel'] == 'enable')? '': 'gdlr-core-item-mglr') . '" ' . gdlr_core_esc_style(array(
						'margin-bottom' => empty($settings['title-wrap-bottom-margin'])? '': $settings['title-wrap-bottom-margin']
					)) . ' >';
					$ret .= '<h3 class="gdlr-core-testimonial-item-title" ' . gdlr_core_esc_style(array(
						'font-size' => (empty($settings['title-size']) || $settings['title-size'] == '28px')? '': $settings['title-size'],
						'text-transform' => (empty($settings['title-text-transform']) || $settings['title-text-transform'] == 'uppercase')? '': $settings['title-text-transform'],
						'letter-spacing' => empty($settings['title-letter-spacing'])? '': $settings['title-letter-spacing'],
						'color' => (empty($settings['title-color']))? '': $settings['title-color']
					)) . ' >';
					if( !empty($settings['side-border']) && $settings['side-border'] == 'left' ){
						$ret .= gdlr_core_escape_content($side_border);
					}
					$ret .= gdlr_core_text_filter($settings['title']);
					if( !empty($settings['side-border']) && $settings['side-border'] == 'right' ){
						$ret .= gdlr_core_escape_content($side_border);
					}
					$ret .= '</h3>';

					$nav_style = (empty($settings['carousel-nav-style']) || $settings['carousel-nav-style'] == 'default')? 'gdlr-core-plain-style': $settings['carousel-nav-style'];
					if( $settings['style'] == 'left' ){
						$ret .= '<div class="gdlr-core-flexslider-nav ' . esc_attr($nav_style) . ' gdlr-core-absolute-center gdlr-core-right" ></div>';
					}else if( $settings['style'] == 'right' ){
						$ret .= '<div class="gdlr-core-flexslider-nav ' . esc_attr($nav_style) . ' gdlr-core-absolute-center gdlr-core-left" ></div>';
					}
					$ret .= '</div>';
				}

				// grid item
				if( $settings['carousel'] == 'disable' ){

					if( !empty($settings['tabs']) ){
						$t_column_count = 0;
						$t_column = 60 / intval($settings['column']);
						foreach( $settings['tabs'] as $tab ){
							$column_class  = ' gdlr-core-column-' . $t_column;
							$column_class .= ($t_column_count % 60 == 0)? ' gdlr-core-column-first': '';

							$ret .= '<div class="gdlr-core-testimonial-column gdlr-core-item-pdlr gdlr-core-item-mgb ' . esc_attr($column_class) . '" >';
							$ret .= self::get_tab_item($tab, $settings);
							$ret .= '</div>';

							$t_column_count += $t_column;
						}
					}

				// carousel item
				}else{
					$slides = array();
					$flex_atts = array(
						'carousel' => true,
						'column' => empty($settings['column'])? '3': $settings['column'],
						'navigation' => empty($settings['carousel-navigation'])? 'navigation': $settings['carousel-navigation'],
						'disable-autoslide' => (empty($settings['carousel-autoslide']) || $settings['carousel-autoslide'] == 'enable')? '': true,
					);

					$center_nav_style = (empty($settings['carousel-nav-style']))? 'default': $settings['carousel-nav-style'];
					if( !empty($settings['title']) && $settings['style'] == 'center' ){
						$title_settings = $settings;
						$title_settings['title-align'] = 'center';
						if( $center_nav_style != 'default' ){
							$title_settings['carousel'] = 'disable';
						}
						$flex_atts['pre-content'] = gdlr_core_block_item_title($title_settings);
					}

					if( $settings['style'] == 'left' || $settings['style'] == 'right' ){
						$flex_atts['nav-parent'] = 'gdlr-core-testimonial-item';
					}else{
						
						
						if( $center_nav_style == 'default' ){
							$flex_atts['vcenter-nav'] = true;
							$flex_atts['additional-class'] = 'gdlr-core-nav-style-middle-large';
						}else{
							$flex_atts['nav-parent'] = 'gdlr-core-testimonial-item';
							$center_nav = '<div class="gdlr-core-flexslider-nav ' . esc_attr($center_nav_style) . ' gdlr-core-center-align" ></div>';
						}
					}

					if( !empty($settings['tabs']) ){
						foreach( $settings['tabs'] as $tab ){
							$slides[] = self::get_tab_item($tab, $settings);
						}
					}

					$ret .= gdlr_core_get_flexslider($slides, $flex_atts);
					$ret .= empty($center_nav)? '': $center_nav;
				}

				$ret .= '</div>'; // gdlr-core-testimonial-item
				
				return $ret;
			}

			static function get_tab_item( $tab = array(), $settings = array() ){ 

				$ret  = '<div class="gdlr-core-testimonial clearfix" >';
				if( ($settings['style'] == 'left' || $settings['style'] == 'right') &&
					(empty($settings['enable-quote']) || $settings['enable-quote'] == 'enable') ){
					$ret .= '<div class="gdlr-core-testimonial-quote gdlr-core-quote-font" ' . gdlr_core_esc_style(array(
						'color' => (empty($settings['quote-color']))? '': $settings['quote-color']
					)) . ' >' . ($settings['style'] == 'right'? '&#8221;': '&#8220;') . '</div>';
				}

				$ret .= '<div class="gdlr-core-testimonial-content-wrap" >';

				if( !empty($tab['content']) ){
					$ret .= '<div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" ' . gdlr_core_esc_style(array(
						'font-size' => (empty($settings['content-size']) || $settings['content-size'] == '28px')? '': $settings['content-size'],
						'color' => (empty($settings['content-color']))? '': $settings['content-color'],
						'padding-bottom' => (empty($settings['content-bottom-padding']) || $settings['content-bottom-padding'] == '0px')? '': $settings['content-bottom-padding']
					)) . ' >' . gdlr_core_content_filter($tab['content']) . '</div>';
				}

				if( $settings['style'] == 'center' &&
					(empty($settings['enable-quote']) || $settings['enable-quote'] == 'enable') ){
					$ret .= '<div class="gdlr-core-testimonial-quote  gdlr-core-quote-font gdlr-core-skin-icon" ' . gdlr_core_esc_style(array(
						'color' => (empty($settings['quote-color']))? '': $settings['quote-color']
					)) . ' >&#8220;</div>';
				}

				$ret .= '<div class="gdlr-core-testimonial-author-wrap clearfix" >';
				if( !empty($tab['image']) ){
					$ret .= '<div class="gdlr-core-testimonial-author-image gdlr-core-media-image" >' . gdlr_core_get_image($tab['image'], 'thumbnail') . '</div>';
				}
				$ret .= '<div class="gdlr-core-testimonial-author-content" >';
				if( !empty($tab['title']) ){
					$ret .= '<div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" ' . gdlr_core_esc_style(array(
						'color' => (empty($settings['name-color']))? '': $settings['name-color']
					)) . ' >' . gdlr_core_text_filter($tab['title']) . '</div>';
				}
				if( !empty($tab['position']) || !empty($tab['rating']) ){
					$ret .= '<div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" ' . gdlr_core_esc_style(array(
						'color' => (empty($settings['position-color']))? '': $settings['position-color']
					)) . ' >';
					if( !empty($tab['rating']) ){
						$ret .= gdlr_core_get_rating($tab['rating']);
					}
					if( !empty($tab['position']) ){
						$ret .= gdlr_core_text_filter($tab['position']);
					}
					$ret .= '</div>';
				}
				$ret .= '</div>'; // gdlr-core-testimonial-author-content
				$ret .= '</div>'; // gdlr-core-testimonial-author-wrap

				$ret .= '</div>'; // gdlr-core-testimonial-content-wrap
				$ret .= '</div>'; // gdlr-core-testimonial

				return $ret;
			}			
			
		} // gdlr_core_pb_element_testimonial
	} // class_exists	