<?php
/**
 * The main template file
 */

	get_header();

	echo '<div class="onepagepro-outer-content-wrap">';
	echo '<div class="onepagepro-content-container onepagepro-container">';
	echo '<div class="onepagepro-sidebar-style-none" >'; // for max width

	get_template_part('content/archive', 'default');

	echo '</div>'; // onepagepro-content-area
	echo '</div>'; // onepagepro-content-container
	echo '</div>'; // onepagepro-outer-content-wrap

	get_footer(); 
