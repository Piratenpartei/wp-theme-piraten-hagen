<ul id="sidebar_left" class="sidebar">
<?php
	if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'sidebar_full_left' ) ) 
			the_widget('WP_Widget_Pages');
?>
</ul>
