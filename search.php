<?php get_header(); ?>
		<div id="mitte">
<?php if ($posts) { ?>
			<div class="post">
				<div class="post-head">
					<div class="post-info">Recherche</div>
					<div class="post-title"><h3>Suchergebnisse für '<?php echo $s; ?>'</h3></div>
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
				<div class="post-head">
					<div class="post-info">Recherche</div>
					<div class="post-title"><h3 class="center">Nichts gefunden</h3></div>
				</div>
				<div class="post-content">
					<p>Keine Beiträge gefunden, die deinen Kriterien entsprechen.</p>
				</div>
			</div>
<?php } ?>
			<div class="post" style="text-align:right">
				<?php posts_nav_link( ' | ', 'Neuere Beiträge', 'Ältere Beiträge' ); ?>
			</div>
		</div>

<?php get_footer(); ?>