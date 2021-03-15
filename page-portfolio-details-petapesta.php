<?php
get_header();
?>
<main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="text-center">
          <h1><?php echo get_the_title()?><br>Peta Pesta</h1>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/peta-pesta-1.png' ); ?>" class="img-fluid" alt="">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/peta-pesta-2.png' ); ?>" class="img-fluid" alt="">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/peta-pesta-3.png' ); ?>" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Custom Product</li>
              <li><strong>Client</strong>: Tripo 3000</li>
              <li><strong>Project date</strong>: 01 Oktober, 2020</li>
              <li><strong>Project URL</strong>: <a href="https://petapesta.com/">www.petapesta.com</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Detail Portfolio</h2>
          <p>
            Peta Pesta merupakan sebuah platform musik virtual yang dirilis pada bulan Oktober 2020. Saya bertindak sebagai Front End Developer dalam project ini. Berawal dari PSBB di sebagian besar Indonesia termasuk provinsi DKI Jakarta menyebabkan banyak pelaku seni dibidang musik menjadi kesulitan mengadakan event musik secara langsung atau offline. Hadirnya Peta Peta diharapkan dapat menjadi sebuah pionir platform persebaran event musik virtual diatas tampilan peta.
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

 </main>
  <!-- End #main -->
<?php
get_footer();
