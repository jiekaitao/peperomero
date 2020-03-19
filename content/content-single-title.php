<?php
/**
 * The template part for displaying single post title
 */

	echo '<header class="onepagepro-single-article-head clearfix" >';
	echo '<div class="onepagepro-single-article-head-right">';
	if( is_single() ){
		echo '<h1 class="onepagepro-single-article-title">' . get_the_title() . '</h1>';
	}else{
		echo '<h3 class="onepagepro-single-article-title"><a href="' . get_permalink() . '" >' . get_the_title() . '</a></h3>';
	}

	$single_blog_meta = onepagepro_get_option('general', 'meta-option', '');
	if( empty($blog_date) && empty($single_blog_meta) ){
		$single_blog_meta = array('author', 'category', 'tag', 'comment-number');
	}
	echo onepagepro_get_blog_info(array(
		'display' => $single_blog_meta,
		'wrapper' => true
	));
	echo '</div>';
	echo '</header>';