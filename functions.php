<?php

add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {

	// This theme uses wp_nav_menu() in three locations.
	register_nav_menu( 'standard','Standard' );
	register_nav_menu( 'siteservice','Siteservice' );
	register_nav_menu( 'footer-menu','Footer Links');

	if ( ! isset( $content_width ) )
		$content_width = 500;
	
	// Setup for dynamic header image
	define('NO_HEADER_TEXT', true );
	define('HEADER_TEXTCOLOR', '');
	define('HEADER_IMAGE', '%s/images/hintergrundoben.png'); // %s is the template dir uri
	define('HEADER_IMAGE_WIDTH', 964); // use width and height appropriate for your theme
	define('HEADER_IMAGE_HEIGHT', 130);

	add_custom_image_header('header_style', 'admin_header_style');


}

// called in wp_head, needed for custom image header
function header_style() {
    ?><style type="text/css">
        #oben {
            background: url(<?php header_image(); ?>);
        }
    </style><?php
}

// called in admin menu, needed for custom image header
function admin_header_style() {
    ?><style type="text/css">
        #headimg {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
            background: no-repeat;
        }
    </style><?php
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
