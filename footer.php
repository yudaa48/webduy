<?php
?>

    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-info">
              <h3>Comika Entertainment</h3>
              <p>
                DKI Jakarta <br>
                Indonesia<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Business Ecosystems</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Comika Management</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Comika Event</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://comika.id/" target="_blank">Comika Indonesia</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Comika Clothing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://www.comikacomedy.club/" target="_blank">Comika Comedy Club</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Comika Pecahkan</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Latest Article</h4>
              <?php foreach (get_posts(array('numberposts' => 1)) as $post) : setup_postdata($post);?>
                <p><?php the_title(); ?></p>
                <p><?php echo get_the_date(); ?><p><br>

                <h6><?php the_excerpt(); ?></h6>

                <p><a href="<?php the_permalink(); ?>" target="_blank" class="text-white"> Learn More &rarr;</a></p>
              <?php endforeach; ?>

            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          Copyright &copy; <?php echo date('Y'); ?> <strong><span>Comika Entertainment</span></strong>.<br> All Rights Reserved
        </div>
      </div>
    </footer>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<?php wp_footer(); ?>

</body>
</html>
