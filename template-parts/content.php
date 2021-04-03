<div class="blog__item">
	<div class="blog__pic">
		<?php the_post_thumbnail(null, ['class' => 'w-100 h-auto mb-2']); ?>
	</div>
	<div class="blog__text">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			<?php the_excerpt(); ?>
		<ul>
			<li><i class="fa fa-user"></i><?php echo get_the_author();?></li>
			<li><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?></li>
		</ul>
	</div>
</div>