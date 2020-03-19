<?php

	// use to clear an option for customize page
	if( !function_exists('onepagepro_clear_option') ){
		function onepagepro_clear_option(){
			$options = array('general', 'typography', 'color', 'plugin');

			foreach( $options as $option ){
				unset($GLOBALS['onepagepro_' . $option]);
			}
			
		}
	}