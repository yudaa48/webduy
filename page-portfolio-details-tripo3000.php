<?php
get_header();
?>
<main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="text-center">
          <h1><?php echo get_the_title()?><br>Tripo 3000</h1>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/tripo-1.png' ); ?>" class="img-fluid" alt="">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/tripo-2.png' ); ?>" class="img-fluid" alt="">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/tripo-3.png' ); ?>" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Landing Page</li>
              <li><strong>Client</strong>: Tripo 3000</li>
              <li><strong>Project date</strong>: 01 Maret, 2020</li>
              <li><strong>Project URL</strong>: <a href="http://tripo3000.com" target="_blank">www.tripo3000.com</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>This is an example of portfolio detail</h2>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

 </main>
  <!-- End #main -->
<?php
get_footer();
