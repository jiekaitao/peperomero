<?php
/**
 * The template part for displaying blog archive
 */

	global $wp_query;

	$settings = array(
		'query' => $wp_query,
		'blog-style' => onepagepro_get_option('general', 'archive-blog-style', 'blog-full'),
		'blog-full-alignment' => onepagepro_get_option('general', 'archive-blog-full-alignment', 'left'),
		'thumbnail-size' => onepagepro_get_option('general', 'archive-thumbnail-size', 'full'),
		'show-thumbnail' => onepagepro_get_option('general', 'archive-show-thumbnail', 'enable'),
		'column-size' => onepagepro_get_option('general', 'archive-column-size', 20),
		'excerpt' => onepagepro_get_option('general', 'archive-excerpt', 'specify-number'),
		'excerpt-number' => onepagepro_get_option('general', 'archive-excerpt-number', 55),
		'blog-date-feature' => onepagepro_get_option('general', 'archive-date-feature', 'enable'),
		'meta-option' => onepagepro_get_option('general', 'archive-meta-option', array()),
		'show-read-more' => onepagepro_get_option('general', 'archive-show-read-more', 'enable'),

		'paged' => (get_query_var('paged'))? get_query_var('paged') : 1,
		'pagination' => 'page',
		'pagination-style' => onepagepro_get_option('general', 'pagination-style', 'round'),
		'pagination-align' => onepagepro_get_option('general', 'pagination-align', 'right'),

	);

	echo '<div class="onepagepro-content-area" >';
	if( is_category() ){
		$tax_description = category_description();
		if( !empty($tax_description) ){
			echo '<div class="onepagepro-archive-taxonomy-description onepagepro-item-pdlr" >' . $tax_description . '</div>';
		}
	}else if( is_tag() ){
		$tax_description = term_description(NULL, 'post_tag');
		if( !empty($tax_description) ){
			echo '<div class="onepagepro-archive-taxonomy-description onepagepro-item-pdlr" >' . $tax_description . '</div>';
		}
	}

	echo gdlr_core_pb_element_blog::get_content($settings);
	echo '</div>'; // onepagepro-content-area