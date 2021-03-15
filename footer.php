<?php
?>
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Hubungi Kami</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Alamat Kami</h3>
              <p>Cibinong, Bogor<br>Jawa Barat, Indonesia</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="800">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Kami</h3>
              <p>hello@webduy.id</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="900">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon Kami</h3>
              <p>+62 8952 1106 758</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="1000">
            <?php echo do_shortcode('[wpforms id="35" title="false"]'); ?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
   
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-info">
              <h3>Webduy Development</h3>
              <p>
                Cibinong, Bogor <br>
                Jawa Barat, Indonesia<br><br>
                <strong>Phone:</strong> +62 895 2110 6758<br>
                <strong>Email:</strong> hello@webduy.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Akses Cepat</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Layanan Kami</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Landing Page</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Profil Bisnis</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Toko Online</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Paket Website</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Tulisan Terbaru</h4>
              <?php foreach (get_posts(array('numberposts' => 1)) as $post) : setup_postdata($post);?>
                <p><?php the_title(); ?></p>
                <p><?php echo get_the_date(); ?><p>

                <h6><?php the_excerpt(); ?></h6>

                <p><a href="<?php the_permalink(); ?>" target="_blank" class="text-white"> Learn More &rarr;</a></p>
              <?php endforeach; ?>

            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          Copyright &copy; <?php echo date('Y'); ?> <strong><span>Webduy Development</span></strong>.<br> All Rights Reserved
        </div>
      </div>
    </footer>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<?php wp_footer(); ?>

</body>
</html>
