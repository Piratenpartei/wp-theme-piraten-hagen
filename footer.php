		<div id="rechts">			
			<?php require( 'sidebar_right.php' ); ?>
		</div>
	</div>
	<div id="unten">

	</div>
	<div id="fussoben"></div>
	<div id="fussmitte">
		<div id="fussl"><!-- links aussen -->
			<!-- Widget 1 -->
			<?php dynamic_sidebar( 'footer-widget-area-01' ); ?>
		</div>
		<div id="fusslm"><!-- links mittig -->
			<!-- Widget 2 -->
			<?php dynamic_sidebar( 'footer-widget-area-02' ); ?>
		</div>
		<div id="fussrm"><!-- rechts aussen -->
			<!-- Widget 4 -->
			<?php dynamic_sidebar( 'footer-widget-area-04' ); ?>
		</div>
		<div id="fussr"><!-- rechts mittig -->
			<!-- Widget 3 -->
			<?php dynamic_sidebar( 'footer-widget-area-03' ); ?>
		</div>
	</div>
	<div id="fussunten"></div>
	<div id="fusslinie">
		<?php wp_nav_menu( array('theme_location' => 'footer-menu', 'menu_class' => 'footer-links', 'container' => '') ); ?>
		<div id="serverinfo">
			WordPress mit <em>piratenhagen</em> bzw. <em>piratenmk</em> Theme<br/>
			Design von <a href="http://wiki.piratenpartei.de/Benutzer:Seeki">Seeki</a>, umgesetzt von <a href="http://wiki.piratenpartei.de/Benutzer:hatch">hatch</a> und Tilli und den <a href="http://piraten-hagen.de/">Piraten Hagen</a>, WordPress Theme von <a href="http://wiki.piratenpartei.de/Benutzer:motorradblogger">motorradblogger</a>, <a href="http://piratenpartei-iserlohn.de">Lenne Piraten</a>, <a href="http://campino2k.de">campino2k</a>
		</div>
		<?php wp_footer(); ?>
	</div>
</div>
</body>
</html>
