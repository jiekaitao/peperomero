<?php
/**
 * The template part for displaying default archive
 */

	echo '<div class="onepagepro-content-area onepagepro-item-pdlr" >';

	while( have_posts() ){ the_post();

		get_template_part('content/content', 'full');
		
	} // while

	the_posts_pagination(array(
		'prev_text'          => esc_html__('Previous page', 'onepagepro'),
		'next_text'          => esc_html__('Next page', 'onepagepro'),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'onepagepro') . ' </span>',
	));

	echo '</div>'; // onepagepro-content-area