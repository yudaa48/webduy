<?php
?> 

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>
	<?php wp_body_open(); ?>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas__menu__overlay"></div>
    <div class="offcanvas__menu__wrapper">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <a href="<?php echo get_bloginfo( 'wpurl' ) ?>">WEBDUY.ID</a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="active"><a href="<?php echo get_bloginfo( 'wpurl' ) ?>">Home</a></li>
                <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/about-us">Tentang Kami</a></li>
                <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services">Layanan</a></li>
                <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/blog">Blog</a></li>
                <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/contact">Kontak</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="<?php echo get_bloginfo( 'wpurl' ) ?>">WEBDUY.ID</a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="<?php echo get_bloginfo( 'wpurl' ) ?>">Home</a></li>
                            <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/about-us">Tentang Kami</a></li>
                            <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services">Layanan</a></li>
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