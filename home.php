 <?php
get_header();
?>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas__menu__overlay"></div>
    <div class="offcanvas__menu__wrapper">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <a href="<?php echo get_bloginfo( 'wpurl' ) ?>"><img src="<?php echo get_theme_file_uri( 'assets/img/logo.png' ); ?>" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>">Home</a></li>
                <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/about-us">Tentang Kami</a></li>
                <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services">Layanan</a></li>
                <li class="active"><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/blog">Blog</a></li>
                <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/contact">Kontak</a></li>
            </ul>
        </nav>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="<?php echo get_bloginfo( 'wpurl' ) ?>"><img src="<?php echo get_theme_file_uri( 'assets/img/logo.png' ); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>">Home</a></li>
                            <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/about-us">Tentang Kami</a></li>
                            <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services">Layanan</a></li>
                            <li class="active"><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/blog">Blog</a></li>
                            <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/contact">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <section class="blog-section spad">
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
