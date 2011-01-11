<div class="post-head">
	<p class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanenter Link: <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link(' [edit] '); ?></p>
</div>
<div class="post-content">
	<?php the_content('Diesen Beitrag vollständig lesen'); ?>
	<p class="post-info-co">
		<?php wp_link_pages(); ?>
	</p>
</div>
<div class="the-meta">
	<?php
		$meta_keys = get_post_custom_keys();
		if( count( $meta_keys ) )
		{
			echo "<ul class=\"post-meta\">\n";
			foreach( $meta_keys AS $key )
			{
				if( substr( $key, 0, 1 ) != '_' && $key != 'wp_jd_target' && $key != 'views' && $key != 'lightboxoff' && $key != 'jd_tweet_this' && $key != 'wp_jd_clig' && $key != 'jd_twitter' )
				{
					$value = get_post_meta( $post -> ID, $key, true );
					$key_class = preg_replace( "/[^a-z0-9]/i", '', $key );
					echo "<li class=\"post-meta-li $key_class\"><span class=\"post-meta-key $key_class\">$key: </span><span class=\"post-meta-value $key_class\">$value</span></li>\n";
				}
			}
			echo "</ul>\n";
		}
	?>
</div>
<div class="post-footer">
	<div class="post-comment-link"><div class="comment_left"></div><div class="comment_right"><?php comments_popup_link(__('Keine Kommentare bisher'), __('Kommentare (1)'), __('Kommentare (%)')); ?></div></div>
	<div class="post-info">Am <?php the_time('d M Y'); ?> in <?php the_category('&amp;');?></div>
</div>
