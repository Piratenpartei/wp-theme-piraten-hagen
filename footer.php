		<div id="rechts">
			<div id="sidebar_right" class="sidebar">
			<?php require( 'sidebar_right.php' ); ?>
			</div>
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
		<a href="/kontakt">Kontakt</a>&nbsp;&#x25cf; <a href="/impressum">Impressum</a>&nbsp;&#x25cf; <a href="http://www.piratenpartei.de/">Piratenpartei Deutschland</a>&nbsp;&#x25cf; <a href="http://piratenpartei-hessen.de/">Piratenpartei Landesverband Hessen</a>&nbsp;&#x25cf; <a href="http://www.junge-piraten.de/">Junge Piraten</a>
		<div id="serverinfo">
			WordPress mit <em>piratenhagen</em> bzw. <em>piratenmk</em> Theme<br/>
			<a href="http://wiki.piratenpartei.de/images/6/62/We_.jpg">Design</a> von <a href="http://wiki.piratenpartei.de/Benutzer:Seeki">Seeki</a>, umgesetzt von <a href="http://wiki.piratenpartei.de/Benutzer:hatch">hatch</a> und <a href="">Tilli</a> und den <a href="http://piraten-hagen.de/">Piraten Hagen</a>, WordPress Theme von <a href="http://wiki.piratenpartei.de/Benutzer:motorradblogger">motorradblogger</a>, <a href="http://piratenpartei-iserlohn.de">Lenne Piraten</a>, <a href="http://campino2k.de">campino2k</a>
		</div>
		<?php wp_footer(); ?>
	</div>
</div>
</body>
</html>
