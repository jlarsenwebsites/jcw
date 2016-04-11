<?php
/**
 * Front Page with full width sections.
 *
 * @author      Sridhar Katakam
 * @license      GPL-2.0+
 */

/**
 * Homepage Content
 *
 */
function sk_homepage_content() {

	//* Home Hero (Full Width) section
	genesis_widget_area( 'home-hero', array(
		'before'	=> '<div class="home-hero home-section home-odd"><div class="dark-overlay"><div class="wrap">',
		'after'		=> '</div></div></div>',
	) );
	
		//* Home Hero (Full Width) section
	genesis_widget_area( 'home-top', array(
		'before'	=> '<div class="home-top home-section home-odd"><div class="wrap">',
		'after'		=> '</div></div>',
	) );

	//* 2-column Home Middle section
	echo '<div class="home-middle home-section home-odd"><div class="wrap">';
		genesis_widget_area( 'home-middle-left', array(
			'before'	=> '<div class="home-middle-left widget-area one-half first">',
			'after'		=> '</div>',
		) );

		genesis_widget_area( 'home-middle-right', array(
			'before'	=> '<div class="home-middle-right widget-area one-half">',
			'after'		=> '</div>',
		) );
	echo '</div></div>';

	//* 1-column Home Bottom section
	genesis_widget_area( 'home-bottom', array(
		'before'	=> '<div class="home-bottom home-section home-even"><div class="wrap">',
		'after'		=> '</div></div>',
	) );


}
add_action( 'sk_content_area', 'sk_homepage_content' );

// Remove 'site-inner' from structural wrap
add_theme_support( 'genesis-structural-wraps', array(
	'header',
	'nav',
	'subnav',
	// 'site-inner',
	'footer-widgets',
	'footer'
) );
 
// Build the page
get_header();
do_action( 'sk_content_area' );
get_footer();