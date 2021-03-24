<?php
get_header();
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active section-home">
            <div class="carousel-container">
              <div class="carousel-content container">
                <div class="col-md-8">
                  <h1 class="animate__animated animate__fadeInDown">Webduy Development</h1>
                  <p class="animate__animated animate__fadeInUp">Kami hadir untuk memberikan layanan pembuatan website terkini, harga terjangkau dan mudah diakses. Tersedia untuk UKM / UMKM, sekolah, instansi pemerintah, hingga perusahaan.</p>                  
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
    <section class="about-lists" id="about-lists">
      <div class="container">
          <div class="section-title">
              <h2>Mengapa harus Memilih <span class="brand">Webduy.id</span></h2>
            </div>
        <div class="row">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
            <span class="icon"><i class='bx bx-wallet'></i></span>
            <h3>Harga Terjangkau</h3>
            <p>Kami menjamin harga yang terjangkau untuk Anda dalam memulai membangun website bisnis atau usaha Anda.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span class="icon"><i class='bx bx-palette'></i></span>
            <h3>Tampilan Menarik</h3>
            <p>Tampilan website terkini yang profesional, dapat diakses melalui beragam jenis perangkat (Responsive) dan user friendly.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span class="icon"><i class='bx bx-support'></i></span>
            <h3>Layanan Support</h3>
            <p>Membantu Anda dalam mengelola website dengan aman dan tidak mengalami kendala.</p>
          </div>
        </div>
      </div>
    </section><!-- End About Lists Section -->

    <section class="section--services">
      <div class="container">
          <div class="section-title">
              <h2>Layanan Jasa Website <span class="brand">Webduy.id</span></h2>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-lg-4 card" data-aos="fade-up" data-aos-delay="300">
              <p>Paket Website</p>
              <h3 class="mb-3">Landing Page</h3>
              <i>Mulai Dari</i>
              <span>400K</span>
              <i>Termasuk</i>
              <ol>
                <li class="mt-3">Gratis Domain .com</li>
                <li>Gratis Hosting</li>
                <li>Desain dan Fitur</li>
              </ol>
              <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services/" class="btn btn-primary"><i class='bx bx-pointer'></i> Detail Layanan</a>
            </div>
            <div class="col-lg-4 card" data-aos="fade-up" data-aos-delay="400">
              <p>Paket Website</p>
              <h3 class="mb-3">Profile Bisnis</h3>
              <i>Mulai Dari</i>
              <span>600K</span>
              <i>Termasuk</i>
              <ol>
                <li class="mt-3">Gratis Domain .com</li>
                <li>Gratis Hosting</li>
                <li>Desain dan Fitur</li>
              </ol>
              <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services/" class="btn btn-primary"><i class='bx bx-pointer'></i> Detail Layanan</a>
            </div>
            <div class="col-lg-4 card" data-aos="fade-up" data-aos-delay="500">
              <p>Paket Website</p>
              <h3>Profile Bisnis &</h3>
              <h3 class="mb-3">Landing Page</h3>
              <i>Mulai Dari</i>
              <span>900K</span>
              <i>Termasuk</i>
              <ol>
                <li class="mt-3">Gratis Domain .com</li>
                <li>Landing Page Menggunakan <br>Subdomain</li>
                <li>Gratis Hosting</li>
                <li>Desain dan Fitur</li>
              </ol>
              <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services/" class="btn btn-primary"><i class='bx bx-pointer'></i> Detail Layanan</a>
            </div>
            <div class="col-lg-4 card" data-aos="fade-up" data-aos-delay="600">
              <p>Paket Website</p>
              <h3>Toko Online</h3>
              <h3 class="mb-3">(E-Commerce)</h3>
              <i>Mulai Dari</i>
              <span>SOON</span>
              <i>Termasuk</i>
              <ol>
                <li class="mt-3">Gratis Domain .com</li>
                <li>Gratis Hosting</li>
                <li>Desain dan Fitur</li>
                <li>Pilihan Layanan Pengiriman</li>
              </ol>
              <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services/" class="btn btn-primary"><i class='bx bx-pointer'></i> Detail Layanan</a>
            </div>
          </div>
      </div>
    </section>

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="700">

        <div class="section-title">
          <h2>Portofolio <span class="brand">Webduy.id</span></h2>
          <p>Berikut merupakan portofolio yang sudah kami kerjakan sebelumnya.<br>Apakah Anda berikutnya? Mari bergabung dengan kami.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-landing">Landing Page</li>
              <li data-filter=".filter-profil">Profil Bisnis</li>
              <li data-filter=".filter-toko">Toko Online</li>
              <li data-filter=".filter-produk">Custom Product</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-landing">
            <div class="portfolio-wrap">
              <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/tripo-1.png' ); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tripo 3000</h4>
                <p>Profile Bisnis</p>
                <div class="portfolio-links">
                  <a href="<?php echo get_theme_file_uri( 'assets/img/portfolio/tripo-1.png' ); ?>" data-gall="portfolioGallery" class="venobox" title="Tripo 3000"><i class="icofont-eye"></i></a>
                  <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/portfolio-details-tripo3000/" target="_blank" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-produk">
            <div class="portfolio-wrap">
              <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/peta-pesta-1.png' ); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Peta Pesta</h4>
                <p>Custom Product</p>
                <div class="portfolio-links">
                  <a href="<?php echo get_theme_file_uri( 'assets/img/portfolio/peta-pesta.png' ); ?>" data-gall="portfolioGallery" class="venobox" title="Peta Pesta"><i class="icofont-eye"></i></a>
                  <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/portfolio-details-petapesta/" target="_blank" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-profil">
            <div class="portfolio-wrap">
              <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/terralogiq-1.png' ); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>PT. Terralogiq Integrasi Solusi</h4>
                <p>Profile Bisnis</p>
                <div class="portfolio-links">
                  <a href="<?php echo get_theme_file_uri( 'assets/img/portfolio/terralogiq-1.png' ); ?>" data-gall="portfolioGallery" class="venobox" title="PT. Terralogiq Integrasi Solusi"><i class="icofont-eye"></i></a>
                  <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/portfolio-details-terralogiq/" target="_blank" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-profil">
            <div class="portfolio-wrap">
              <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/himsi-bogor-1.png' ); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Himpunan Mahasiswa Sistem Informasi Kota Bogor</h4>
                <p>Profile Organisasi</p>
                <div class="portfolio-links">
                  <a href="<?php echo get_theme_file_uri( 'assets/img/portfolio/himsi-bogor.png' ); ?>" data-gall="portfolioGallery" class="venobox" title="Himpunan Mahasiswa Sistem Informasi Kota Bogor"><i class="icofont-eye"></i></a>
                  <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/portfolio-details-himsi/" target="_blank" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-toko">
            <div class="portfolio-wrap">
              <img src="<?php echo get_theme_file_uri( 'assets/img/portfolio/portfolio-9.jpg' ); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Your Business Will Be Here</h4>
                <p>Contact Us Now!</p>
                <div class="portfolio-links">
                  <a href="<?php echo get_theme_file_uri( 'assets/img/portfolio/portfolio-9.jpg' ); ?>" data-gall="portfolioGallery" class="venobox" title="Your Business Here"><i class="icofont-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <section class="faq" id="faq">
      <div class="container">
        <div class="section-title">
          <h2>Frequently Ask Question</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-xs-12 faq-item" data-aos="fade-up" data-aos-delay="800">
            <h4>Pertanyaan</h4>
            <p>Jawaban</p>
          </div>
          <div class="col-md-6 col-xs-12 faq-item" data-aos="fade-up" data-aos-delay="900">
            <h4>Pertanyaan</h4>
            <p>Jawaban</p>
          </div>
          <div class="col-md-6 col-xs-12 faq-item" data-aos="fade-up" data-aos-delay="1000">
            <h4>Pertanyaan</h4>
            <p>Jawaban</p>
          </div>
          <div class="col-md-6 col-xs-12 faq-item" data-aos="fade-up" data-aos-delay="1100">
            <h4>Pertanyaan</h4>
            <p>Jawaban</p>
          </div>
        </div>
      </div>
    </section>

</main>
  <!-- End #main -->
<?php
get_footer();
