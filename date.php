<?php get_header(); ?>
		<div id="mitte">
<?php if ($posts) { ?>
			<div class="post">
				<div class="post-head">
					<?php $post = $posts[0]; /* Hack. Set $post so that the_date() works. */ ?>
					<?php if (is_day()) { ?>
						<div class="post-info">Archiv nach Tagen</div>
						<div class="post-title"><h3><?php the_time('l, F jS, Y'); ?></h3></div>
					<?php } elseif (is_month()) { ?>
						<div class="post-info">Archiv nach Monaten</div>
						<div class="post-title"><h3><?php the_time('F Y'); ?></h3></div>
					<?php } elseif (is_year()) { ?>
						<div class="post-info">Archiv nach Jahren</div>
						<div class="post-title"><h3><?php the_time('Y'); ?></h3></div>
					<?php } ?>
				</div>
			</div>
			<?php foreach ($posts as $post) : start_wp(); ?>
				<div class="post">
					<?php require('post.php'); ?>
					<?php comments_template(); ?>
				</div>
			<?php endforeach; ?>
<?php } else { ?>
			<div class="post">
				<p>Zu diesem Zeitraum wurden leider keine Beiträge gefunden.</p>
			</div>
<?php } ?>
			<div class="post" style="text-align:right">
				<?php posts_nav_link( ' | ', 'Neuere Beiträge', 'Ältere Beiträge' ); ?>
			</div>
		</div>

<?php get_footer(); ?>