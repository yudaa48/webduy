<?php
get_header();
?>

<main>
	<div class="container">
		<?php
		if ( have_posts() ) {
			$i = 0;

			while ( have_posts() ) {
				$i++;

				the_post();

				get_template_part( 'template-parts/content-single', get_post_type() );
			}
		}
		?>
	</div>
</main>

<?php get_footer(); ?>
