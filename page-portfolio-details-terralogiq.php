<?php
get_header();
?>
<main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="text-center">
          <h1><?php echo get_the_title()?><br>PT. Terralogiq Integrasi Solusi</h1>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/terralogiq-1.png' ); ?>" class="img-fluid" alt="">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/terralogiq-2.png' ); ?>" class="img-fluid" alt="">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/terralogiq-3.png' ); ?>" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Profil Bisnis</li>
              <li><strong>Client</strong>: PT. Terralogiq Integrasi Solusi</li>
              <li><strong>Project date</strong>: 25 Desember, 2020</li>
              <li><strong>Project URL</strong>: <a href="http://terralogiq.com" target="_blank">www.terralogiq.com</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Detail Portfolio</h2>
          <p>
            PT. Terralogiq Integrasi Solusi adalah perusahaan pertama dan satu-satunya yang menjadi Google Maps Premier Partner di Indonesia. Dalam pengembangan website resmi Terralogiq, saya menerima tanggung jawab untuk dapat memastikan website berjalan dengan lancar tanpa kendala, kemudian saya juga bertindak sebagai Front End Developer bila ada penambahan fitur atau adanya pengembangan tampilan baru untuk website Terralogiq.
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

 </main>
  <!-- End #main -->
<?php
get_footer();
