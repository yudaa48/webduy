<?php
get_header();
?>

    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active blog-page" style="">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Blog</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h2 class="section--blog__header"><?php printf( esc_html__( 'Search Results for: %s', 'coba' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</div>
		</div>
	</div>

<section class="blog_area section-padding">
	<div class="container"> 
		<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="blog_left_sidebar">
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
