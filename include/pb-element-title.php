<?php
	/*	
	*	Goodlayers Item For Page Builder
	*/
	
	if( class_exists('gdlr_core_page_builder_element') ){
		gdlr_core_page_builder_element::add_element('title', 'onepagepro_gdlr_core_pb_element_title'); 
	}

	if( !class_exists('onepagepro_gdlr_core_pb_element_title') ){
		class onepagepro_gdlr_core_pb_element_title{
			
			// get the element settings
			static function get_settings(){
				return array(
					'icon' => 'fa-text-width',
					'title' => esc_html__('Title', 'onepagepro')
				);
			}
			
			// return the element options
			static function get_options(){
				global $gdlr_core_item_pdb;
				
				return apply_filters('gdlr_core_title_item_options', array(
					'general' => array(
						'title' => esc_html__('General', 'onepagepro'),
						'options' => array(
							'title' => array(
								'title' => esc_html__('Title', 'onepagepro'),
								'type' => 'text',
								'default' => esc_html__('Default Sample Title', 'onepagepro'),
							),	
							'caption' => array(
								'title' => esc_html__('Caption', 'onepagepro'),
								'type' => 'textarea',
								'default' => esc_html__('Default sample caption text', 'onepagepro'),
							),
							'caption-position' => array(
								'title' => esc_html__('Caption Position', 'onepagepro'),
								'type' => 'combobox',
								'options' => array(
									'top' => esc_html__('Top', 'onepagepro'),
									'bottom' => esc_html__('Bottom', 'onepagepro'),
									'right' => esc_html__('Right', 'onepagepro'),
								),
								'default' => 'top'
							),	
							'title-width' => array(
								'title' => esc_html__('Title Width', 'onepagepro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => '300px',
								'condition' => array( 'caption-position' => 'right' )
							),
							'title-link-text' => array(
								'title' => esc_html__('Title Link Text', 'onepagepro'),
								'type' => 'text',
								'description' => esc_html__('Leave this field blank to link the title text', 'onepagepro')
							),
							'title-link' => array(
								'title' => esc_html__('Title Link', 'onepagepro'),
								'type' => 'text'
							),
							'title-link-target' => array(
								'title' => esc_html__('Title Link Target', 'onepagepro'),
								'type' => 'combobox',
								'options' => array(
									'_self' => esc_html__('Current Screen', 'onepagepro'),
									'_blank' => esc_html__('New Window', 'onepagepro'),
								)
							),				
						)
					),
					'style' => array(
						'title' => esc_html__('Style', 'onepagepro'),
						'options' => array(
							'text-align' => array(
								'title' => esc_html__('Text Align', 'onepagepro'),
								'type' => 'radioimage',
								'options' => 'text-align',
								'default' => 'left'
							),
							'left-media-type' => array(
								'title' => esc_html__('Left Media Type', 'onepagepro'),
								'type' => 'combobox',
								'options' => array(
									'none' => esc_html__('None', 'onepagepro'),
									'icon' => esc_html__('Icon', 'onepagepro'),
									'image' => esc_html__('Image', 'onepagepro'),
								),
								'default' => 'image',
								'condition' => array( 'text-align' => 'left' ),
							),
							'left-icon' => array(
								'title' => esc_html__('Left Icon Selector', 'onepagepro'),
								'type' => 'icons',
								'default' => 'fa fa-gear',
								'wrapper-class' => 'gdlr-core-fullsize',
								'condition' => array( 'text-align' => 'left', 'left-media-type' => 'icon' )
							),
							'left-image' => array(
								'title' => esc_html__('Left Image', 'onepagepro'),
								'type' => 'upload',
								'condition' => array( 'text-align' => 'left', 'left-media-type' => 'image' ),
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
							'side-border-divider-color' => array(
								'title' => esc_html__('Side Border Divider Color', 'onepagepro'),
								'type' => 'colorpicker',
								'condition' => array( 'side-border' => array('left', 'right', 'bottom-right')  )
							),
							'heading-tag' => array(
								'title' => esc_html__('Heading Tag', 'onepagepro'),
								'type' => 'combobox',
								'options' => array(
									'h1' => esc_html__('H1', 'onepagepro'),
									'h2' => esc_html__('H2', 'onepagepro'),
									'h3' => esc_html__('H3', 'onepagepro'),
									'h4' => esc_html__('H4', 'onepagepro'),
									'h5' => esc_html__('H5', 'onepagepro'),
									'h6' => esc_html__('H6', 'onepagepro'),
								),
								'default' => 'h3'
							),
						)
					),
					'typography' => array(
						'title' => esc_html('Typography', 'onepagepro'),
						'options' => array(
							'icon-font-size' => array(
								'title' => esc_html__('Left Icon Size ( Only for left align with icon )', 'onepagepro'),
								'type' => 'fontslider',
								'default' => '30px'
							),
							'title-font-size' => array(
								'title' => esc_html__('Title Font Size', 'onepagepro'),
								'type' => 'fontslider',
								'default' => '41px'
							),
							'title-font-weight' => array(
								'title' => esc_html__('Title Font Weight', 'onepagepro'),
								'type' => 'text',
								'default' => 800,
								'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'onepagepro')
							),
							'title-font-style' => array(
								'title' => esc_html__('Title Font Style', 'onepagepro'),
								'type' => 'combobox',
								'options' => array(
									'normal' => esc_html__('Normal', 'onepagepro'),
									'italic' => esc_html__('Italic', 'onepagepro'),
								),
								'default' => 'normal'
							),
							'title-font-letter-spacing' => array(
								'title' => esc_html__('Title Font Letter Spacing', 'onepagepro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => '1px'
							),
							'title-font-uppercase' => array(
								'title' => esc_html__('Title Font Uppercase', 'onepagepro'),
								'type' => 'checkbox',
								'default' => 'enable'
							),	
							'caption-font-size' => array(
								'title' => esc_html__('Caption Font Size', 'onepagepro'),
								'type' => 'fontslider',
								'default' => '16px'
							),
							'caption-font-weight' => array(
								'title' => esc_html__('Caption Font Weight', 'onepagepro'),
								'type' => 'text',
								'default' => 400
							),
							'caption-font-style' => array(
								'title' => esc_html__('Caption Font Style', 'onepagepro'),
								'type' => 'combobox',
								'options' => array(
									'normal' => esc_html__('Normal', 'onepagepro'),
									'italic' => esc_html__('Italic', 'onepagepro'),
								),
								'default' => 'italic'
							),
							'caption-font-letter-spacing' => array(
								'title' => esc_html__('Caption Font Letter Spacing', 'onepagepro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => '0px'
							),
							'caption-font-uppercase' => array(
								'title' => esc_html__('Caption Font Uppercase', 'onepagepro'),
								'type' => 'checkbox',
								'default' => 'disable'
							),
						)
					),
					'color' => array(
						'title' => esc_html('Color', 'onepagepro'),
						'options' => array(
							'left-icon-color' => array(
								'title' => esc_html__('Left Icon Color', 'onepagepro'),
								'type' => 'colorpicker',
							),	
							'title-color' => array(
								'title' => esc_html__('Title Color', 'onepagepro'),
								'type' => 'colorpicker',
							),	
							'title-link-hover-color' => array(
								'title' => esc_html__('Title Link Hover Color', 'onepagepro'),
								'type' => 'colorpicker',
							),	
							'caption-color' => array(
								'title' => esc_html__('Caption Color', 'onepagepro'),
								'type' => 'colorpicker',
							),
						)
					),
					'spacing' => array(
						'title' => esc_html('Spacing', 'onepagepro'),
						'options' => array(
							
							'caption-top-padding' => array(
								'title' => esc_html__('Caption Top Padding', 'onepagepro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => '0px'
							),
							'caption-spaces' => array(
								'title' => esc_html__('Space Between Caption ( And Title )', 'onepagepro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => '10px'
							),
							'media-margin' => array(
								'title' => esc_html__('Left Media Margin ( Only for left title style )', 'onepagepro'),
								'type' => 'custom',
								'item-type' => 'padding',
								'data-input-type' => 'pixel',
								'default' => array( 'top'=>'10px', 'right'=>'30px', 'bottom'=>'0px', 'left'=>'0px', 'settings'=>'unlink' ),
							),
							'padding-bottom' => array(
								'title' => esc_html__('Padding Bottom ( Item )', 'onepagepro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => $gdlr_core_item_pdb
							)
						)
					)
				));
			}
			
			// get the preview for page builder
			static function get_preview( $settings = array() ){
				$content  = self::get_content($settings, true);
				$id = mt_rand(0, 9999);
				
				ob_start();
?><script type="text/javascript" id="gdlr-core-preview-title-<?php echo esc_attr($id); ?>" >
jQuery(document).ready(function(){
	jQuery('#gdlr-core-preview-title-<?php echo esc_attr($id); ?>').parent().gdlr_core_title_divider();
});
</script><?php	
				$content .= ob_get_contents();
				ob_end_clean();
				
				return $content;
			}			
			
			// get the content from settings
			static function get_content( $settings = array(), $preview = false ){
				global $gdlr_core_item_pdb;
				
				// default variable
				if( empty($settings) ){
					$settings = array(
						'title' => esc_html__('Default Sample Title', 'onepagepro'),
						'caption' => esc_html__('Default sample caption text', 'onepagepro'),
						'title-link' => '',
						'text-align' => 'left',
						'padding-bottom' => $gdlr_core_item_pdb
					);
				}

				$extra_style = '';
				if( !empty($settings['title-link']) && (!empty($settings['title-color']) || !empty($settings['title-link-hover-color'])) ){
					if( empty($settings['id']) ){
						global $gdlr_core_title_id; 
						$gdlr_core_title_id = empty($gdlr_core_title_id)? array(): $gdlr_core_title_id;
						
						// generate unique id so it does not get overwritten in admin area
						$rnd_title_id = mt_rand(0, 99999);
						while( in_array($rnd_title_id, $gdlr_core_title_id) ){
							$rnd_title_id = mt_rand(0, 99999);
						}
						$gdlr_core_title_id[] = $rnd_title_id;
						$settings['id'] = 'gdlr-core-title-item-id-' . $rnd_title_id;
					}
						
					
					if( !empty($settings['title-color']) ){
						$extra_style .= '#' . $settings['id'] . ' .gdlr-core-title-item-title a{ color:' . $settings['title-color'] . '; }';
					}
					if( !empty($settings['title-link-hover-color']) ){
						$extra_style .= '#' . $settings['id'] . ' .gdlr-core-title-item-title a:hover{ color:' . $settings['title-link-hover-color'] . '; }';
					}
					if( $preview ){
						$extra_style = '<style type="text/css" scoped >' . $extra_style . '</style>';
					}else{
						gdlr_core_add_inline_style($extra_style);
						$extra_style = '';
					}
				}				
				
				// default value
				$settings['text-align'] = empty($settings['text-align'])? 'left': $settings['text-align'];
				$settings['caption-position'] = empty($settings['caption-position'])? 'top': $settings['caption-position'];
				$settings['heading-tag'] = ($preview || empty($settings['heading-tag']))? 'h3': $settings['heading-tag'];

				$title_atts = array(
					'font-size' => (empty($settings['title-font-size']) || $settings['title-font-size'] == '41px')? '': $settings['title-font-size'],
					'font-weight' => (empty($settings['title-font-weight']) || $settings['title-font-weight'] == '800')? '': $settings['title-font-weight'],
					'font-style' => (empty($settings['title-font-style']) || $settings['title-font-style'] == 'normal')? '': $settings['title-font-style'],
					'letter-spacing' => (empty($settings['title-font-letter-spacing']) || $settings['title-font-letter-spacing'] == '1px')? '': $settings['title-font-letter-spacing'],
					'text-transform' => (empty($settings['title-font-uppercase']) || $settings['title-font-uppercase'] == 'enable')? '': 'none',
					'color' => empty($settings['title-color'])? '': $settings['title-color']
				);
				$caption_atts = array(
					'font-size' => (empty($settings['caption-font-size']) || $settings['caption-font-size'] == '16px')? '': $settings['caption-font-size'],
					'font-weight' => (empty($settings['caption-font-weight']) || $settings['caption-font-weight'] == '400')? '': $settings['caption-font-weight'],
					'font-style' => (empty($settings['caption-font-style']) || $settings['caption-font-style'] == 'italic')? '': $settings['caption-font-style'],
					'letter-spacing' => (empty($settings['caption-font-letter-spacing']) || $settings['caption-font-letter-spacing'] == '0px')? '': $settings['caption-font-letter-spacing'],
					'text-transform' => (empty($settings['caption-font-uppercase']) || $settings['caption-font-uppercase'] == 'disable')? '': 'uppercase',
					'color' => empty($settings['caption-color'])? '': $settings['caption-color']
				);

				$side_border = '';
				if( !empty($settings['side-border']) && $settings['side-border'] != 'none' ){
					$side_border  = '<span class="gdlr-core-title-item-side-border gdlr-core-skin-divider gdlr-core-' . esc_attr($settings['side-border']) . '" ' . gdlr_core_esc_style(array(
						'border-color' => empty($settings['side-border-divider-color'])? '': $settings['side-border-divider-color']
					)) . ' ></span>';
				}

				// start printing item
				$extra_class  = ' gdlr-core-' . $settings['text-align'] . '-align';
				$extra_class .= ' gdlr-core-title-item-caption-' . $settings['caption-position'];
				$extra_class .= empty($settings['no-pdlr'])? ' gdlr-core-item-pdlr': '';
				$extra_class .= empty($settings['class'])? '': ' ' . $settings['class'];
				$extra_class .= apply_filters('gdlr_core_pb_element_title_class', '', $settings);
				
				$ret  = '<div class="gdlr-core-title-item gdlr-core-item-pdb clearfix ' . esc_attr($extra_class) . '" ';
				if( !empty($settings['padding-bottom']) && $settings['padding-bottom'] != $gdlr_core_item_pdb ){
					$ret .= gdlr_core_esc_style(array('padding-bottom'=>$settings['padding-bottom']));
				}
				if( !empty($settings['id']) ){
					$ret .= ' id="' . esc_attr($settings['id']) . '" ';
				}
				$ret .= ' >';

				if( $settings['text-align'] == 'left' ){
					$media_css_atts = array(
						'margin' => (empty($settings['media-margin']) || $settings['media-margin'] == array('top'=>'10px', 'right'=>'30px', 'bottom'=>'0px', 'left'=>'0px', 'settings'=>'unlink' ))? '': $settings['media-margin']
					);

					if( empty($settings['left-media-type']) || $settings['left-media-type'] == 'image' ){
						if( !empty($settings['left-image']) ){
							$ret .= '<div class="gdlr-core-title-item-left-image gdlr-core-media-image" ' . gdlr_core_esc_style($media_css_atts) . ' >' . gdlr_core_get_image($settings['left-image']) . '</div>';
							$ret .= '<div class="gdlr-core-title-item-left-image-wrap" >';
						}
					}else if( $settings['left-media-type'] == 'icon' ){

						$media_css_atts['font-size'] = (empty($settings['icon-font-size']) || $settings['icon-font-size'] == '30px')? '': $settings['icon-font-size'];

						$ret .= '<div class="gdlr-core-title-item-left-icon" ' . gdlr_core_esc_style($media_css_atts) . ' >';
						$ret .= '<i class="' . esc_attr($settings['left-icon']) . '" ' . gdlr_core_esc_style(array(
							'color' => empty($settings['left-icon-color'])? '': $settings['left-icon-color']
						)) . ' ></i>';
						$ret .= '</div>';	
						$ret .= '<div class="gdlr-core-title-item-left-icon-wrap" >';
					}
				}

				if( $settings['caption-position'] == 'top' && !empty($settings['caption']) ){
					$caption_atts['margin-bottom'] = (empty($settings['caption-spaces']) || $settings['caption-spaces'] == '10px')? '': $settings['caption-spaces'];
					$caption_atts['padding-top'] = (empty($settings['caption-top-padding']) || $settings['caption-top-padding'] == '0px')? '': $settings['caption-top-padding'];
					$ret .= '<span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" ' . gdlr_core_esc_style($caption_atts) . ' >' . gdlr_core_text_filter($settings['caption']) . '</span>';
				}
				if( !empty($settings['title']) ){
					
					$ret .= '<div class="gdlr-core-title-item-title-wrap" ';
					if( $settings['caption-position'] == 'right' ){
						$ret .= gdlr_core_esc_style(array(
							'width' => empty($settings['title-width'])? '': $settings['title-width']
						));
					}
					$ret .= ' >';
					$ret .= '<' . $settings['heading-tag'] . ' class="gdlr-core-title-item-title gdlr-core-skin-title" ' . gdlr_core_esc_style($title_atts) . ' >';
					if( !empty($settings['side-border']) && $settings['side-border'] == 'left' ){
						$ret .= gdlr_core_escape_content($side_border);
					}else if( !empty($settings['side-border']) && $settings['side-border'] == 'bottom-right' ){
						$ret .= '<span class="gdlr-core-side-border-wrap" >';
					}
					if( empty($settings['title-link-text']) && !empty($settings['title-link']) ){
						$ret .= '<a href="'. esc_url($settings['title-link']) . '" target="' . (empty($settings['title-link-target'])? '_self': $settings['title-link-target']) . '" >';
					}
					$ret .= gdlr_core_text_filter($settings['title']);
					if( empty($settings['title-link-text']) && !empty($settings['title-link']) ){
						$ret .= '</a>';
					}
					if( !empty($settings['side-border']) && $settings['side-border'] == 'right' ){
						$ret .= gdlr_core_escape_content($side_border);
					}else if( !empty($settings['side-border']) && $settings['side-border'] == 'bottom-right' ){
						$ret .= gdlr_core_escape_content($side_border);
						$ret .= '</span>';
					}
					$ret .= '</' . $settings['heading-tag'] . '>';

					if( $settings['text-align'] == 'left' && !empty($settings['title-link-text']) && !empty($settings['title-link']) && $settings['caption-position'] != 'right' ){
						$ret .= '<a href="'. esc_url($settings['title-link']) . '" target="' . (empty($settings['title-link-target'])? '_self': $settings['title-link-target']) . '" class="gdlr-core-title-item-link">';
						$ret .= gdlr_core_text_filter($settings['title-link-text']) . '</a>';
					}
					$ret .= '</div>';
					if( $settings['text-align'] != 'left' && !empty($settings['title-link-text']) && !empty($settings['title-link']) && $settings['caption-position'] != 'right' ){
						$ret .= '<a href="'. esc_url($settings['title-link']) . '" target="' . (empty($settings['title-link-target'])? '_self': $settings['title-link-target']) . '" class="gdlr-core-title-item-link">';
						$ret .= gdlr_core_text_filter($settings['title-link-text']) . '</a>';
					}
					
				}
				if( $settings['caption-position'] != 'top' && !empty($settings['caption']) ){
					$caption_atts['margin-top'] = (empty($settings['caption-spaces']) || $settings['caption-spaces'] == '10px')? '': $settings['caption-spaces'];
					$caption_atts['padding-top'] = (empty($settings['caption-top-padding']) || $settings['caption-top-padding'] == '0px')? '': $settings['caption-top-padding'];
					$ret .= '<span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" ' . gdlr_core_esc_style($caption_atts) . ' >';
					$ret .= gdlr_core_text_filter($settings['caption']);
					if( !empty($settings['title-link-text']) && !empty($settings['title-link']) && $settings['caption-position'] == 'right' ){
						$ret .= '<a href="'. esc_url($settings['title-link']) . '" target="' . (empty($settings['title-link-target'])? '_self': $settings['title-link-target']) . '" class="gdlr-core-title-item-link">';
						$ret .= gdlr_core_text_filter($settings['title-link-text']) . '</a>';
					}
					$ret .= '</span>';
				}
				
				if( $settings['text-align'] == 'left' ){

					if( ((empty($settings['left-media-type']) || $settings['left-media-type'] == 'image') && !empty($settings['left-image'])) ||
						(!empty($settings['left-media-type']) && $settings['left-media-type'] == 'icon') ){

						$ret .= '</div>'; // gdlr-core-title-item-left-image-wrap
					}
				}

				$ret .= '</div>' . $extra_style;

				return $ret;
			}
			
		} // onepagepro_gdlr_core_pb_element_title
	} // class_exists