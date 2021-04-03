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
                <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/blog">Blog</a></li>
                <li class="active"><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/contact">Kontak</a></li>
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
                            <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/blog">Blog</a></li>
                            <li class="active"><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/contact">Kontak</a></li>
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

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__text">
                        <h3>Contact info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <ul>
                            <li>
                                <span class="fa fa-map-marker"></span>
                                <h5>Address</h5>
                                <p>160 Pennsylvania Ave NW, Washington Castle, PA 16101-5161</p>
                            </li>
                            <li>
                                <span class="fa fa-mobile"></span>
                                <h5>Address</h5>
                                <p>125-711-811 | 125-668-886</p>
                            </li>
                            <li>
                                <span class="fa fa-headphones"></span>
                                <h5>Address</h5>
                                <p>Support.photography@gmail.com</p>
                            </li>
                        </ul>
                        <div class="contact__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20151.047591375514!2d-0.5735782106784704!3d50.85188881113048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875a4d10c96d8bf%3A0xe9a76e70e6b7cc5a!2sArundel%2C%20UK!5e0!3m2!1sen!2sbd!4v1584862449435!5m2!1sen!2sbd"
                            height="515" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>SEND MESSAGE</h3>
                    <form action="#">
                        <div class="input-list">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Website">
                        </div>
                        <textarea placeholder="Question"></textarea>
                        <button type="submit" class="site-btn">Send question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->
<?php
get_footer();
