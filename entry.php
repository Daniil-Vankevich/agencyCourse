<div <?php post_class('col-sm-6') ?>>
	<article class="entry-item">
		<div class="entry-img">
			<a href="blog-single.html">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/post_1.jpg" alt="">
			</a>
		</div>
		<div class="entry-header">
			<div class="entry-category"> <?php the_category(', '); ?></div>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
			</h2>
		</div>
		<div class="entry-wrap">
			<div class="entry">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<div class="entry-meta-wrap clearfix">
					<ul class="entry-meta">
						<li class="entry-date">
							<?php the_time(' j F Y '); ?>
						</li>
						<li class="entry-comments">
							<a href="blog-single.html">5 комментариев</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</article>
</div>