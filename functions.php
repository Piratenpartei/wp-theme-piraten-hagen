<?php
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'standard','Standard' );
	register_nav_menu( 'siteservice','Siteservice' );
if( function_exists('register_sidebar') )
	register_sidebar( array( 'name' => 'sidebar_full_left' ) );
if( function_exists('register_sidebar') )
	register_sidebar( array( 'name' => 'sidebar_full_right' ) );
?>
