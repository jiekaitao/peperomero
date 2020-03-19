<?php 
	/*	
	*	Goodlayers File For WPML Support
	*/
	
	if( !function_exists('onepagepro_get_wpml_flag') ){
		function onepagepro_get_wpml_flag(){
			$ret = '';
			
			if( function_exists('icl_get_languages') ){
				$languages = icl_get_languages('skip_missing=1');
				
				if( !empty($languages) ){
					$ret .= '<span class="onepagepro-custom-wpml-flag" >';
					foreach($languages as $language_slug => $language){
						$ret .= '<span class="onepagepro-custom-wpml-flag-item onepagepro-language-code-' . esc_attr($language_slug) . '" >';
						$ret .= '<a href="' . esc_url($language['url']) . '" >';
						if( !empty($language['country_flag_url']) ){
							$ret .= '<img src="' . esc_url($language['country_flag_url']) . '" alt="' . esc_attr($language_slug) . '" width="18" height="12" />';
						}else{
							$ret .= '<span class="onepagepro-head">' . gdlr_core_escape_content($language['native_name']) . '</span>';
						}
						$ret .= '</a>';
						$ret .= '</span>';
					}
					$ret .= '</span>';
				}
			}
			
			return $ret;
		}
	}