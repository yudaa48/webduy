<?php if ( ! is_category() && ! is_home() && ! is_single() && ! is_search() ): ?>
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Hubungi Kami</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 my-auto" data-aos="fade-up">
            <div class="row">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Alamat Kami</h3>
                <p>Cibinong, Bogor<br>Jawa Barat, Indonesia</p>
              </div>              
            </div>
            <div class="row">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email Kami</h3>
                <p>hello@webduy.id</p>
                <p>yudaa0110@gmail.com</p>
              </div>              
            </div>
            <div class="row">
              <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Hubungi Kami</h3>
                <p>+62 8952-1106-758</p>
              </div>              
            </div>
          </div>

          <div class="col-lg-9" data-aos="fade-up">
            <?php echo do_shortcode('[wpforms id="35" title="false"]'); ?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
<?php endif ?>
