<article <?php post_class('entry-item large-post') ?>>

	<div class="entry-header">
		<?php the_category(', ') ?>
		<h2 class="entry-title">
			<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
		</h2>
	</div>

	<div class="entry-img">
		<a href="<?php the_permalink() ?>">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/featured_post.jpg" alt="">
		</a>
	</div>

	<div class="entry-wrap">
		<div class="entry">

			<div class="entry-content">
				<?php the_content() ?>
				<div class="text-center">
					<a href="<?php the_permalink() ?>" class="read-more underline-link">Читать далее</a>
				</div>
			</div>

			<div class="entry-meta-wrap clearfix">
				<ul class="entry-meta">
					<li class="entry-date">
						<?php the_time('j F Y') ?>
					</li>
					<li class="entry-comments">
						<a href="blog-single.html">5 комментариев</a>
					</li>
				</ul>

			</div>

		</div>
	</div>
</article> <!-- end large post -->