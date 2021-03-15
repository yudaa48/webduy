<?php
get_header();
?>
<main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="text-center">
          <h1><?php echo get_the_title()?><br>Himpunan Mahasiswa Sistem Informasi<br>Kota Bogor</h1>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/himsi-bogor-1.png' ); ?>" class="img-fluid" alt="">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/himsi-bogor-2.png' ); ?>" class="img-fluid" alt="">
            <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/himsi-bogor-3.png' ); ?>" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Profil Organisasi</li>
              <li><strong>Client</strong>: Himpunan Mahasiswa Sistem<br>Informasi Kota Bogor</li>
              <li><strong>Project date</strong>: 01 Maret, 2020</li>
              <li><strong>Project URL</strong>: <a href="http://himsiubsibogor.com" target="_blank">www.himsiubsibogor.com</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Detail Portfolio</h2>
          <p>
            Dalam pengembangannya, website Himpunan Mahasiswa Sistem Informasi Kota Bogor yang disebut juga sebagai HIMSI Bogor ini didirikan untuk dapat memperkenalkan HIMSI Bogor lebih luas lagi. Peran saya dalam pengembangan ini adalah sebagai salah satu inisiator pengembangan website HIMSI Bogor ini.<br><br>Pengembangan website HIMSI Bogor ini dilakukan turun temurun sejak tahun 2020 dan masih akan terus mengalami perubahan dari sisi tampilan hingga pengalaman pengguna. 
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

 </main>
  <!-- End #main -->
<?php
get_footer();
