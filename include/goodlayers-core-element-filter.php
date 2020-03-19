<?php 
	/*	
	*	Goodlayers Core Plugin Filter
	*	---------------------------------------------------------------------
	*	This file contains the script to includes necessary function
	* 	for compatibility with goodlayers core plugin
	*	---------------------------------------------------------------------
	*/

	// style blog content
	add_filter('gdlr_core_blog_info_prefix', 'onepagepro_gdlr_core_blog_info_prefix');
	if( !function_exists('onepagepro_gdlr_core_blog_info_prefix') ){
		function onepagepro_gdlr_core_blog_info_prefix($icons){
			$icons['date'] = '<i class="fa fa-clock-o"></i>';
			$icons['author'] = '<i class="fa fa-pencil"></i>';
			$icons['tag'] = '<i class="fa fa-tag"></i>';
			$icons['category'] = '<i class="fa fa-folder-o"></i>';
			$icons['comment'] = '<i class="fa fa-comment-o"></i>';
			$icons['comment-number'] = '<i class="fa fa-comment-o"></i>';

			return $icons;
		}
	}
	add_filter('gdlr_core_blog_item_options', 'onepagepro_gdlr_core_blog_item_options');
	if( !function_exists('onepagepro_gdlr_core_blog_item_options') ){
		function onepagepro_gdlr_core_blog_item_options($options){
			if( !empty($options['settings']['options']) ){
				$options['settings']['options'] = $options['settings']['options'] +
					array('blog-column-bottom-divider' => array(
						'title' => esc_html__('Blog Column Bottom Divider', 'onepagepro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'blog-style' => array('blog-column', 'blog-column-no-space') )
					));
			}

			return $options;
		}
	}
	add_filter('gdlr_core_blog_style_content', 'onepagepro_gdlr_core_blog_style_content', 10, 3);
	if( !function_exists('onepagepro_gdlr_core_blog_style_content') ){
		function onepagepro_gdlr_core_blog_style_content($ret, $args, $blog_style){

			if( $args['blog-style'] == 'blog-column' || $args['blog-style'] == 'blog-column-no-space' || $args['blog-style'] == 'blog-column-with-frame' ){

				$post_format = get_post_format();
				if( in_array($post_format, array('aside', 'quote', 'link')) ){
					$args['extra-class']  = ' gdlr-core-blog-grid gdlr-core-small';
					
					return $blog_style->blog_format( $args, $post_format );
				}

				$additional_class  = ($args['blog-style'] == 'blog-column-with-frame')? ' gdlr-core-blog-grid-with-frame gdlr-core-item-mgb': '';

				$ret  = '<div class="gdlr-core-blog-grid ' . esc_attr($additional_class) . '" >';
				if( empty($args['show-thumbnail']) || $args['show-thumbnail'] == 'enable' ){
					$ret .= $blog_style->blog_thumbnail(array(
						'thumbnail-size' => $args['thumbnail-size'],
						'post-format' => $post_format,
						'post-format-gallery' => 'slider',
						'opacity-on-hover' => empty($args['enable-thumbnail-opacity-on-hover'])? 'enable': $args['enable-thumbnail-opacity-on-hover'],
						'zoom-on-hover' => empty($args['enable-thumbnail-zoom-on-hover'])? 'enable': $args['enable-thumbnail-zoom-on-hover'],
						'grayscale-effect' => empty($args['enable-thumbnail-grayscale-effect'])? 'disable': $args['enable-thumbnail-grayscale-effect']
					));
				}
				
				if( $args['blog-style'] == 'blog-column-with-frame' ){
					$ret .= '<div class="gdlr-core-blog-grid-frame gdlr-core-skin-e-background gdlr-core-js" data-sync-height="blog-grid-with-frame" >';
				}else{
					if( !empty($args['layout']) && $args['layout'] == 'masonry' ){
						$ret .= '<div class="gdlr-core-blog-grid-content-wrap">';
					}else{
						$ret .= '<div class="gdlr-core-blog-grid-content-wrap gdlr-core-js" data-sync-height="blog-grid-content-wrap" >';
					}
				}
				
				$ret .= $blog_style->blog_title($args);
				$ret .= $blog_style->blog_info(array(
					'display' => $args['meta-option'],
					'wrapper' => true
				));
				$ret .= $blog_style->get_blog_excerpt($args);
				
				if( in_array($args['blog-style'], array('blog-column', 'blog-column-no-space')) &&
					(empty($args['blog-column-bottom-divider']) || $args['blog-column-bottom-divider'] == 'enable') ){

					$ret .= '<div class="gdlr-core-blog-divider gdlr-core-skin-divider" data-sync-height-offset ></div>'; //  data-sync-height-offset
				}
				$ret .= '</div>'; // gdlr-core-blog-grid-content-wrap
				$ret .= '</div>'; // gdlr-core-blog-grid
				
				return $ret;

			}

			return false;

		}
	}

	// block item title
	add_filter('gdlr_core_block_item_title', 'onepagepro_gdlr_core_block_item_title', 10, 2);
	if( !function_exists('onepagepro_gdlr_core_block_item_title') ){
		function onepagepro_gdlr_core_block_item_title( $ret = '', $settings = array() ){
			$ret = '';

			$settings['title-size'] = (empty($settings['title-size']) || $settings['title-size'] == '41px')? '': $settings['title-size'];
			$settings['caption-size'] = (empty($settings['caption-size']) || $settings['caption-size'] == '16px')? '': $settings['caption-size'];
			$settings['read-more-size'] = (empty($settings['read-more-size']) || $settings['read-more-size'] == '14px')? '': $settings['read-more-size'];

			if( !empty($settings['title']) || !empty($settings['caption']) ){ 

				// prepare html element
				$side_border = '';
				if( !empty($settings['side-border']) && $settings['side-border'] != 'none' ){
					$side_border  = '<span class="gdlr-core-block-item-title-side-border gdlr-core-skin-divider gdlr-core-' . esc_attr($settings['side-border']) . '" ' . gdlr_core_esc_style(array(
						'border-color' => empty($settings['side-border-divider-color'])? '': $settings['side-border-divider-color']
					)) . ' ></span>';
				}

				$read_more_text = '';
				if( !empty($settings['read-more-text']) && !empty($settings['read-more-link']) ){
					$read_more_text .= '<div class="gdlr-core-block-item-read-more-wrap" >';
					$read_more_text .= '<a class="gdlr-core-block-item-read-more" href="' . esc_url($settings['read-more-link']) . '" ';
					$read_more_text .= empty($settings['read-more-target'])? '': 'target="' . esc_attr($settings['read-more-target']) . '" ';
					$read_more_text .= gdlr_core_esc_style(array(
						'font-size' => $settings['read-more-size'],
						'color' => empty($settings['read-more-color'])? '': $settings['read-more-color']
					));
					$read_more_text .= ' >' . gdlr_core_text_filter($settings['read-more-text']) . '</a>';
					$read_more_text .= '</div>';
				}				

				$caption = '';
				$settings['caption-position'] = empty($settings['caption-position'])? 'top': $settings['caption-position'];
				if( !empty($settings['caption']) ){
					$caption .= '<div class="gdlr-core-block-item-caption gdlr-core-info-font gdlr-core-skin-caption" ' . gdlr_core_esc_style(array(
						'font-size' => $settings['caption-size'],
						'font-style' => empty($settings['caption-font-style'])? '': $settings['caption-font-style'],
						'color' => empty($settings['caption-color'])? '': $settings['caption-color'],
						'padding-top' => empty($settings['caption-top-padding'])? '': $settings['caption-top-padding']
					)) . ' >';
					$caption .= gdlr_core_text_filter($settings['caption']);
					if( $settings['caption-position'] == 'right' ){
						$caption .= $read_more_text;
					}
					$caption .= '</div>';
				}

				// print
				$title_align = empty($settings['title-align'])? 'left': $settings['title-align'];
				$extra_class  = ' gdlr-core-' . $title_align . '-align';
				$extra_class .= ' gdlr-core-caption-' . $settings['caption-position'];
				$extra_class .= (!isset($settings['pdlr']) || $settings['pdlr'] == true)? ' gdlr-core-item-mglr': '';
				$extra_class .= (!empty($settings['carousel']) && $settings['carousel'] != 'disable' )? ' gdlr-core-with-nav': '';

				$ret .= '<div class="gdlr-core-block-item-title-wrap ' . esc_attr($extra_class) . '" ' . gdlr_core_esc_style(array(
					'margin-bottom' => empty($settings['title-wrap-bottom-margin'])? '': $settings['title-wrap-bottom-margin']
				)) . ' >';
				if( !empty($caption) && $settings['caption-position'] == 'top' ){
					$ret .= $caption;
				}
				if( !empty($settings['title']) ){
					$title_width = ($settings['caption-position'] == 'right' && !empty($settings['title-width']))? $settings['title-width']: '';

					$ret .= '<h3 class="gdlr-core-block-item-title" ' . gdlr_core_esc_style(array(
						'font-size' => $settings['title-size'],
						'font-style' => empty($settings['title-font-style'])? '': $settings['title-font-style'],
						'text-transform' => (empty($settings['title-text-transform']) || $settings['title-text-transform'] == 'uppercase')? '': $settings['title-text-transform'],
						'letter-spacing' => empty($settings['title-letter-spacing'])? '': $settings['title-letter-spacing'],
						'color' => empty($settings['title-color'])? '': $settings['title-color'],
						'width' => $title_width
					)) . ' >';
					if( !empty($settings['side-border']) && $settings['side-border'] == 'left' ){
						$ret .= $side_border;
					}else if( !empty($settings['side-border']) && $settings['side-border'] == 'bottom-right' ){
						$ret .= '<span class="gdlr-core-side-border-wrap" >';
					}
					if( !empty($settings['title-left-icon']) ){
						$ret .= '<i class="' . esc_attr($settings['title-left-icon']) . '" ' . gdlr_core_esc_style(array(
							'color' => (empty($settings['title-left-icon-color'])? '': $settings['title-left-icon-color'])
						)) . ' ></i>';
					}
					$ret .= gdlr_core_text_filter($settings['title']);
					if( !empty($settings['side-border']) && $settings['side-border'] == 'right' ){
						$ret .= $side_border;
					}else if( !empty($settings['side-border']) && $settings['side-border'] == 'bottom-right' ){
						$ret .= gdlr_core_escape_content($side_border);
						$ret .= '</span>';
					}
					$ret .= '</h3>';
				}
				if( !empty($caption) && in_array($settings['caption-position'], array('bottom', 'right')) ){
					$ret .= $caption;
				}
				if( $settings['caption-position'] != 'right' ){
					$ret .= $read_more_text;
				}

				if( !empty($settings['carousel']) && $settings['carousel'] != 'disable' ){
					$flex_nav_atts = array();

					if( empty($settings['title-carousel-nav-style']) || $settings['title-carousel-nav-style'] == 'default' ){
						$nav_style  = apply_filters('gdlr_core_block_item_title_nav_filter', 'gdlr-core-round-style');
					}else{
						$nav_style  = $settings['title-carousel-nav-style'];
					}
					if( $settings['caption-position'] == 'right' ){
						$nav_style .= ' gdlr-core-absolute';
						$flex_nav_atts['padding-top'] = empty($settings['caption-top-padding'])? '': $settings['caption-top-padding'];
					}else{
						$nav_style .= ' gdlr-core-absolute-center';
					}	

					
					$ret .= '<div class="gdlr-core-flexslider-nav ' . esc_attr($nav_style) . ' gdlr-core-right" ' . gdlr_core_esc_style($flex_nav_atts) . ' ></div>';
				}
				$ret .= '</div>';

			}else if( !empty($settings['carousel']) && $settings['carousel'] != 'disable' ){

				$enable_carousel = apply_filters('gdlr_core_block_item_title_only_carousel', 'enable');
				if( $enable_carousel == 'enable' ){
					$extra_class = (!isset($settings['pdlr']) || $settings['pdlr'] == true)? ' gdlr-core-item-mglr': '';

					if( empty($settings['title-carousel-nav-style']) || $settings['title-carousel-nav-style'] == 'default' ){
						$nav_style = 'gdlr-core-plain-style';
					}else{
						$nav_style = $settings['title-carousel-nav-style'];
					}

					$ret .= '<div class="gdlr-core-block-item-title-nav ' . esc_attr($extra_class) . '" >';
					$ret .= '<div class="gdlr-core-flexslider-nav ' . esc_attr($nav_style) . ' gdlr-core-block-center" ></div>';
					$ret .= '</div>';
				}
			} 

			return $ret;
		} // onepagepro_block_item_title
	}
	add_filter('gdlr_core_block_item_option', 'onepagepro_gdlr_core_block_item_option', 10, 2);
	if( !function_exists('onepagepro_gdlr_core_block_item_option') ){
		function onepagepro_gdlr_core_block_item_option( $options ){
			
			return array(
				'title-align' => array(
					'title' => esc_html__('Title Align', 'onepagepro'),
					'type' => 'combobox',
					'options' => array(
						'left' => esc_html__('Left', 'onepagepro'),
						'center' => esc_html__('Center', 'onepagepro'),
					),
					'default' => 'left',
				),
				'title-left-icon' => array(
					'title' => esc_html__('Title Left Icon', 'onepagepro'),
					'type' => 'icons',
					'allow-none' => true,
					'wrapper-class' => 'gdlr-core-fullsize'
				),
				'title' => array(
					'title' => esc_html__('Title', 'onepagepro'),
					'type' => 'text',
				),
				'side-border' => array(
					'title' => esc_html__('Side Border', 'onepagepro'),
					'type' => 'combobox',
					'options' => array(
						'none' => esc_html__('None', 'onepagepro'),
						'left' => esc_html__('Left', 'onepagepro'),
						'right' => esc_html__('Right', 'onepagepro'),
						'bottom-right' => esc_html__('Bottom Right', 'onepagepro'),
					),
					'default' => 'none'
				),
				'caption' => array(
					'title' => esc_html__('Caption', 'onepagepro'),
					'type' => 'textarea',
				),
				'caption-position' => array(
					'title' => esc_html__('Caption Position', 'onepagepro'),
					'type' => 'combobox',
					'options' => array(
						'top' => esc_html__('Top', 'onepagepro'),
						'bottom' => esc_html__('Bottom', 'onepagepro'),
						'right' => esc_html__('Right', 'onepagepro'),
					)
				),
				'title-width' => array(
					'title' => esc_html__('Title Width', 'onepagepro'),
					'type' => 'text',
					'data-input-type' => 'pixel',
					'default' => '300px',
					'condition' => array( 'caption-position' => 'right' )
				),
				'read-more-text' => array(
					'title' => esc_html__('Read More Text', 'onepagepro'),
					'type' => 'text',
					'default' => esc_html__('Read More', 'onepagepro'),
				),
				'read-more-link' => array(
					'title' => esc_html__('Read More Link', 'onepagepro'),
					'type' => 'text',
				),
				'read-more-target' => array(
					'title' => esc_html__('Read More Target', 'onepagepro'),
					'type' => 'combobox',
					'options' => array(
						'_self' => esc_html__('Current Screen', 'onepagepro'),
						'_blank' => esc_html__('New Window', 'onepagepro'),
					),
				),
				'title-size' => array(
					'title' => esc_html__('Title Size', 'onepagepro'),
					'type' => 'fontslider',
					'default' => '41px'
				),
				'title-font-style' => array(
					'title' => esc_html__('Title Font Style', 'onepagepro'),
					'type' => 'combobox',
					'options' => array(
						'' => esc_html__('Default', 'onepagepro'),
						'normal' => esc_html__('Normal', 'onepagepro'),
						'italic' => esc_html__('Italic', 'onepagepro'),
					),
					'default' => ''
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
				'caption-top-padding' => array(
					'title' => esc_html__('Caption Top Padding', 'onepagepro'),
					'type' => 'text',
					'data-input-type' => 'pixel',
					'default' => '0px'
				),
				'caption-size' => array(
					'title' => esc_html__('Caption Size', 'onepagepro'),
					'type' => 'fontslider',
					'default' => '16px'
				),
				'caption-font-style' => array(
					'title' => esc_html__('Caption Font Style', 'onepagepro'),
					'type' => 'combobox',
					'options' => array(
						'' => esc_html__('Default', 'onepagepro'),
						'normal' => esc_html__('Normal', 'onepagepro'),
						'italic' => esc_html__('Italic', 'onepagepro'),
					),
					'default' => ''
				),
				'read-more-size' => array(
					'title' => esc_html__('Read More Size', 'onepagepro'),
					'type' => 'fontslider',
					'default' => '14px',
				),
				'title-left-icon-color' => array(
					'title' => esc_html__('Title Left Icon Color', 'onepagepro'),
					'type' => 'colorpicker'
				),
				'title-color' => array(
					'title' => esc_html__('Title Color', 'onepagepro'),
					'type' => 'colorpicker'
				),
				'side-border-divider-color' => array(
					'title' => esc_html__('Side Border Divider Color', 'onepagepro'),
					'type' => 'colorpicker',
					'condition' => array( 'side-border' => array('left','right', 'bottom-right') )
				),
				'caption-color' => array(
					'title' => esc_html__('Caption Color', 'onepagepro'),
					'type' => 'colorpicker'
				),
				'read-more-color' => array(
					'title' => esc_html__('Read More Color', 'onepagepro'),
					'type' => 'colorpicker',
				),
				'title-wrap-bottom-margin' => array(
					'title' => esc_html__('Title Wrap Bottom Margin', 'onepagepro'),
					'type' => 'text',
					'data-input-type' => 'pixel',
				),
				'title-carousel-nav-style' => array(
					'title' => esc_html__('Title Carousel Nav Style (if any)', 'onepagepro'),
					'type' => 'combobox',
					'options' => array(
						'default' => esc_html__('Default', 'onepagepro'),
						'gdlr-core-plain-style gdlr-core-small' => esc_html__('Small Plain Style', 'onepagepro'),
						'gdlr-core-plain-style' => esc_html__('Plain Style', 'onepagepro'),
						'gdlr-core-plain-circle-style' => esc_html__('Plain Circle Style', 'onepagepro'),
						'gdlr-core-round-style' => esc_html__('Large Round Style', 'onepagepro'),
						'gdlr-core-rectangle-style' => esc_html__('Rectangle Style', 'onepagepro'),
						'gdlr-core-rectangle-style gdlr-core-large' => esc_html__('Large Rectangle Style', 'onepagepro'),
					)
				)
			);

		} // onepagepro_block_item_options
	}