<article class="mt-5">
	<?php the_post_thumbnail(null, ['class' => 'w-100 h-auto mb-4']); ?>

	<h2 class="text-color--dark-blue"><?php the_title(); ?></h2>
	<p class="mb-4"><?php echo get_the_date(); ?></p>

	<?php the_excerpt(); ?>

	<a href="<?php the_permalink(); ?>" class="section--blog__read-more">READ MORE</a>
</article>
