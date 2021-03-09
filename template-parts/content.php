<article class="blog_item">
	<div class="blog_item_img">
		<?php the_post_thumbnail(null, ['class' => 'w-100 h-auto mb-4']); ?>
		<p class="blog_item_date">
			<?php echo get_the_date(); ?>
		</p>
	</div>
	<div class="blog_details">
		<a class="d-inline-block" href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
		</a>
		<p><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">READ MORE</a>
	</div>
</article>