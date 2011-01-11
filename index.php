<?php get_header(); ?>
		<div id="mitte">
<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>
			<div class="post">
				<?php require('post.php'); ?>
				<?php comments_template(); ?>
			</div>
<?php endforeach; else: ?>
			<div class="post">
				Keine Beiträge gefunden?
			</div>
<?php endif; ?>
			<div class="post" style="text-align:right">
				<?php posts_nav_link( ' | ', 'Neuere Beiträge', 'Ältere Beiträge' ); ?>
			</div>
		</div>

<?php get_footer(); ?>