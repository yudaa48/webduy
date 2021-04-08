 <?php
get_header();
?>

    <section class="blog-section spad mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
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
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						<?php get_sidebar( 'primary' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
