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
                <li class="active"><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services">Layanan</a></li>
                <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/blog">Blog</a></li>
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
                            <li class="active"><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services">Layanan</a></li>
                            <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/blog">Blog</a></li>
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

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad services">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="section-title normal-title">
                        <h3>Choose your plan</h3>
                    </div> 
                </div>
            </div>
            <div class="row monthly__plans active">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Landing Page</h4>
                        <h3>$15.90 <span>/ month</span></h3>
                        <ul>
                            <li>2,5 GB web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Company Profile</h4>
                        <h3>$25.90 <span>/ month</span></h3>
                        <ul>
                            <li>90 GB web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Bundling Package</h4>
                        <h3>$35.90 <span>/ month</span></h3>
                        <ul>
                            <li>150 GB web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Choose Plan Section Begin -->
    <section class="choose-plan-section pricing-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo get_theme_file_uri( 'assets/img/online.png' ); ?>" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="plan__text">
                        <h3>up to 70% discount with free domain name registration included!</h3>
                        <ul>
                            <li><span class="fa fa-check"></span> FREE Domain Name</li>
                            <li><span class="fa fa-check"></span> FREE Email Address</li>
                            <li><span class="fa fa-check"></span> Plently of disk space</li>
                            <li><span class="fa fa-check"></span> FREE Website Bullder</li>
                            <li><span class="fa fa-check"></span> FREE Marketing Tools</li>
                            <li><span class="fa fa-check"></span> 1-Click WordPress Install</li>
                        </ul>
                        <a href="#" class="primary-btn">Get start now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose Plan Section End -->

    <!-- Question Section Begin -->
    <section class="question-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Have a questions?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="question__accordin">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        How do I cancel and delete my account?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">
                                        Can I get my website listed in Google?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">
                                        Can I run a business?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFour">
                                        Does ArkaHost offer phone support?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" class="question-form">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <textarea placeholder="Question"></textarea>
                        <button type="submit" class="site-btn">Send question</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Question Section End -->
<?php
get_footer();
