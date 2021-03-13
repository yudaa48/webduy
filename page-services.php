<?php
get_header();
?>
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active section-services">
            <div class="carousel-container">
              <div class="carousel-content container">
                <div class="col-md-8">
                  <h1 class="animate__animated animate__fadeInDown">Layanan Kami</h1>
                  <p class="animate__animated animate__fadeInUp">Layanan kami menawarkan pengembangan website bisnis Anda yang modern dan terkini. Pengembangan dilakukan secara teliti dengan memerhatikan responsibilitas terhadap perangkat apapun. Hasil dari pengembangan website dapat mempermudah pelanggan Anda menemukan perusahaan Anda di internet.</p>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->
  
<main id="main">

    <!-- ======= About Lists Section ======= -->
    <section class="about-listss" id="about-listss">
      <div class="container">
          <div class="section-title">
              <h2>Alur Pengembangan Website <span class="brand">Webduy.id</span></h2>
            </div>
        <div class="row d-flex align-items-center text-center">

          <div class="col-lg-3 col-md-6 content-items" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-md-8">
                <span><i class='bx bx-analyse'></i></span>
                <h4>Analisa</h4>                
              </div>
              <div class="col-md-4 d-flex align-items-center">
                <span><i class='bx bxs-chevron-right'></i></span>  
              </div> 
            </div>
          </div>

          <div class="col-lg-3 col-md-6 content-items" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-8">
                <span><i class='bx bx-palette'></i></span>
                <h4>Desain</h4>                
              </div>
              <div class="col-md-4 d-flex align-items-center">
                <span><i class='bx bxs-chevron-right'></i></span>  
              </div> 
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 content-items" data-aos="fade-up" data-aos-delay="300">
            <div class="row">
              <div class="col-md-8">
                <span><i class='bx bx-code-alt'></i></span>
                <h4>Pengembangan</h4>               
              </div>
              <div class="col-md-4 d-flex align-items-center">
                <span><i class='bx bxs-chevron-right'></i></span>  
              </div> 
            </div>
          </div>

          <div class="col-lg-2 col-md-6 content-items" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
              <div class="col-md-8">
                <span><i class='bx bx-support'></i></span>
                <h4>Maintence</h4>               
              </div>
              <div class="col-md-4 d-flex align-items-center">
                <!-- <span><i class='bx bxs-chevron-right'></i></span>   -->
              </div> 
            </div>
          </div>

        </div>
      </div>
    </section><!-- End About Lists Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>What We Have Done</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/portfolio-2.jpg' ); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="<?php echo get_theme_file_uri( 'assets/img/portfolio/portfolio-2.jpg' ); ?>" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-eye"></i></a>
                  <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/portfolio-details/" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/portfolio-5.jpg' ); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="<?php echo get_theme_file_uri( 'assets/img/portfolio/portfolio-5.jpg' ); ?>" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-eye"></i></a>
                  <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/portfolio-details/" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/portfolio-9.jpg' ); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="<?php echo get_theme_file_uri( 'assets/img/portfolio/portfolio-9.jpg' ); ?>" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-eye"></i></a>
                  <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/portfolio-details/" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>DKI Jakarta, Indonesia</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@example.com<br>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
</main>
  <!-- End #main -->
<?php
get_footer();
