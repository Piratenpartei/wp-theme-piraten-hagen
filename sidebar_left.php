<ul id="sidebar_left" class="sidebar">
<?php
	if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'sidebar_full_left' ) ) : ?>
		<li class="widget widget_pages">
		<?php the_widget('WP_Widget_Pages'); ?>
		</li> 
<?php endif; ?>
</ul>
