<?php
	require('./wp-blog-header.php');
?><?php echo '<'.'?xml version="1.0" encoding="' . get_bloginfo( 'charset' ) . '"?'.'>' . "\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo( 'version' ); ?>" />
	<meta http-equiv="imagetoolbar" content="no"/>
	<meta name="language" content="de" />
	<meta name="publisher" content="Piratenpartei Deutschland - PIRATEN" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo( 'rss2_url' ) ?>" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) . " letzte Beiträge" ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo( 'comments_rss2_url' ) ?>" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) . " letzte Kommentare" ?>" />
<?php wp_get_archives( 'type=monthly&format=link' ); ?>
<?php wp_head(); ?>
</head>

<body id="body">
<div id="wrap">
	<div id="heimathafen">
		<?php wp_nav_menu( array( 'theme_location'=>'siteservice', 'menu_class' => 'menu', 'container' => 'nav', 'container_id' => 'heimathafen-nav'  ) ); ?>
	</div>
	<div id="oben">

	</div>
	<div id="toplinks">
		<div class="toplinkstext">
			<?php wp_nav_menu( array( 'theme_location'=>'standard', 'menu_class' => 'links-menu', 'container' => 'nav', 'container_id' => 'toplinks-nav'  ) ); ?>
		</div>
	</div>
	<div id="container">
		<div id="links">			
			<?php require( 'sidebar_left.php' ); ?>
		</div>
