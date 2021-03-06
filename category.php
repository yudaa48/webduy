<?php
get_header();
?>

<main>
	<section class="section--blog">
		<div class="container">
			<div class="section--blog__content">
				<div class="row">
					<div class="col-md-6">
						<h1>Our Blog</h1>

						<p class="lead">Since 2013 Terralogiq has been providing Geo Solutions to our clients. We help our clients understand challenges and prepare a solution for them.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="section--blog__header">Category: <?php echo get_the_category()[0]->name; ?></h2>
			</div>
		</div>
	</div>

	<div class="container mb-5">
		<div class="row">
			<div class="col-lg-8">
				<?php
					if ( have_posts() ) {
						$i = 0;

						while ( have_posts() ) {
							$i++;

							the_post();

							get_template_part( 'template-parts/content', get_post_type() );
						}

						the_posts_pagination([
							'prev_text' => '<img src="' . get_theme_file_uri( 'assets/images/icon--chevron-left.svg' ) . '" alt="">',
							'next_text' => '<img src="' . get_theme_file_uri( 'assets/images/icon--chevron-right.svg' ) . '" alt="">'
						]);
					}
				?>
			</div>
			<div class="col-lg-4 mt-5 mt-lg-0">
				<?php get_sidebar( 'primary' ); ?>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
