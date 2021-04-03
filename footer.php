<?php
?>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer__text-about">
                            <div class="footer__logo">
                                <a href="./index.html"><img src="<?php echo get_theme_file_uri( 'assets/img/logo.png' ); ?>" alt=""></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida viverra maecen
                                lacus vel facilisis. </p>
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer__text-widget">
                            <h5>Perusahaan</h5>
                            <ul>
                                <li><a href="#">Perusahaan</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Tulisan Baru</a></li>
                                <li><a href="#">Karir</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer__text-widget">
                            <h5>Layanan</h5>
                            <ul>
                                <li><a href="#">Landing Page</a></li>
                                <li><a href="#">Company Profile</a></li>
                                <li><a href="#">Bundling Package</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer__text-widget">
                            <h5>Kontak Kami</h5>
                            <ul class="footer__widget-info">
                                <li><span class="fa fa-map-marker"></span> Bojong Gede, Kab. Bogor<br />
                                    Jawa Barat 16920</li>
                                <li><span class="fa fa-mobile"></span> +62 895-2110-6758</li>
                                <li><span class="fa fa-headphones"></span> hello@webduy.id <br>yudaa0110@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__text-copyright text-white">
                    <p>Copyright &copy; <?php echo date('Y'); ?> <strong><span>Webduy Development</span></strong>.<br> All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

	<?php wp_footer(); ?>

</body>
</html>
