<?php get_header(); ?>
		<div id="mitte">
<?php if ($posts) { ?>
			<div class="post">
				<div class="post-head">
					<div class="post-title"><h3>Alle Einträge in &quot;<?php echo single_cat_title(); ?>&quot;</h3></div>
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
				<p>In dieser Kategorie existieren leider keine Beiträge.</p>
			</div>
<?php } ?>
			<div class="post" style="text-align:right">
				<?php posts_nav_link( ' | ', 'Neuere Beiträge', 'Ältere Beiträge' ); ?>
			</div>
		</div>

<?php get_footer(); ?>