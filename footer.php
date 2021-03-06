<?php
?>

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
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Best Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Company Profile</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Landing Page</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Shop</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Bundling Package</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Latest Article</h4>
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
