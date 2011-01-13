<?php

add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menu( 'standard','Standard' );
	register_nav_menu( 'siteservice','Siteservice' );

	if ( ! isset( $content_width ) )
		$content_width = 500;


}

add_action( 'widgets_init', 'theme_widgets_setup' );
function theme_widgets_setup() {

	register_sidebar( array(
		'name' => 'Linke Sidebar',
		'id' => 'sidebar_full_left' 
	) );
	register_sidebar( array(
		'name' => 'Rechte Sidebar',
		'id' => 'sidebar_full_right' 
	) );

	register_sidebar( array(
		'name' => 'Footer Widget Area 01',
		'id' => 'footer-widget-area-01',
		'description' => 'Erste von 4 Footer-Spalten',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<strong>',
		'after_title' => '</strong>',
	) );
	register_sidebar( array(
		'name' => 'Footer Widget Area 02',
		'id' => 'footer-widget-area-02',
		'description' => 'Zweite von 4 Footer-Spalten',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<strong>',
		'after_title' => '</strong>',
	) );
	register_sidebar( array(
		'name' => 'Footer Widget Area 03',
		'id' => 'footer-widget-area-03',
		'description' => 'Dritte von 4 Footer-Spalten',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<strong>',
		'after_title' => '</strong>',
	) );
	register_sidebar( array(
		'name' => 'Footer Widget Area 04',
		'id' => 'footer-widget-area-04',
		'description' => 'Vierte von 4 Footer-Spalten',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<strong>',
		'after_title' => '</strong>',
	) );
};
?>
