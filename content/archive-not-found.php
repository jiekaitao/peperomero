<?php
/**
 * The template for displaying archive not found
 */

	echo '<div class="onepagepro-not-found-wrap" id="onepagepro-full-no-header-wrap" >';
	echo '<div class="onepagepro-not-found-background" ></div>';
	echo '<div class="onepagepro-not-found-container onepagepro-container">';
	echo '<div class="onepagepro-header-transparent-substitute" ></div>';
	
	echo '<div class="onepagepro-not-found-content onepagepro-item-pdlr">';
	echo '<h1 class="onepagepro-not-found-head" >' . esc_html__('Not Found', 'onepagepro') . '</h1>';
	echo '<div class="onepagepro-not-found-caption" >' . esc_html__('Nothing matched your search criteria. Please try again with different keywords.', 'onepagepro') . '</div>';

	echo '<form role="search" method="get" class="search-form" action="' . esc_url(home_url('/')) . '">';
	echo '<input type="text" class="search-field onepagepro-title-font" placeholder="' . esc_html__('Type Keywords...', 'onepagepro') . '" value="" name="s">';
	echo '<div class="onepagepro-top-search-submit"><i class="fa fa-search" ></i></div>';
	echo '<input type="submit" class="search-submit" value="Search">';
	echo '</form>';
	echo '<div class="onepagepro-not-found-back-to-home" ><a href="' . esc_url(home_url('/')) . '" >' . esc_html__('Or Back To Homepage', 'onepagepro') . '</a></div>';
	echo '</div>'; // onepagepro-not-found-content

	echo '</div>'; // onepagepro-not-found-container
	echo '</div>'; // onepagepro-not-found-wrap