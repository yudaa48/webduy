<article class="mt-5">
	<?php the_post_thumbnail(null, ['class' => 'w-50 h-auto mb-4']); ?>

	<a href="<?php the_permalink(); ?>"><h2 class="text-color--dark-blue"><?php the_title(); ?></h2></a>
	<p class="mb-4"><?php echo get_the_date(); ?></p>

	<?php the_excerpt(); ?>

	<a href="<?php the_permalink(); ?>" class="section--blog__read-more">READ MORE</a>
</article>
