<?php get_header(); ?>
		<div id="mitte">
<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>
			<div class="post">
				<div style="text-align:right">
				<?php if( $post -> ping_status == 'open' ) { ?><a href="<?php trackback_url(display); ?> ">Trackback</a><?php } ?><?php if( $post -> comment_status == 'open' ) { ?> <a href="#comments">Kommentare</a><?php } ?>
				<a href="?article2pdf=1">PDF Version</a>
				</div>
					<?php require('post.php'); ?>
					<?php comments_template(); ?>
			</div>
<?php endforeach; else: ?>
			<div class="post">
				Dieser Beitrag wurde nicht gefunden.
			</div>
<?php endif; ?>
			<div class="post" style="text-align:right">
				<?php posts_nav_link( ' | ', 'Neuere Beiträge', 'Ältere Beiträge' ); ?>
			</div>
		</div>

<?php get_footer(); ?>