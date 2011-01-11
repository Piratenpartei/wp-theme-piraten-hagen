<?php

add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menu( 'standard','Standard' );
	register_nav_menu( 'siteservice','Siteservice' );

	if ( ! isset( $content_width ) )
		$content_width = 500;

	if( function_exists('register_sidebar') )
		register_sidebar( array( 'name' => 'sidebar_full_left' ) );
	if( function_exists('register_sidebar') )
		register_sidebar( array( 'name' => 'sidebar_full_right' ) );

}
?>
