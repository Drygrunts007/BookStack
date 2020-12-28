<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BookStack</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>Regna/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>Regna/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>Regna/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>Regna/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>Regna/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>Regna/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>Regna/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>Regna/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>Regna/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Regna - v2.2.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-transparent">
    <div class="container">

      <div id="logo" class="pull-left">
        <!--<a href="welcome_message.php"><img src="<?php echo base_url(); ?>Regna/assets/img/logo.png" alt=""></a> --> 
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#hero">BookStack</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About BookStack</a></li>
          <li><a href="#portfolio">Books</a></li>
          <li><a href="http://localhost/BookStack/index.php/Welcome/do_upload">Upload</a></li>
          

      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to BookStack</h1>
      <h2>Your Digital Library</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title"><b>What You Can DO</b></h2>
            <p>
              BookStack is an online library where you can read,download and even upload Books,Manga and Comics.
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="#"><i class="#"></i></div>
              <h2 class="h2"><a href=""><b>Read Books</b></a></h2> 
              <p class="description"></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="#"><i class="#"></i></div>
              <h2 class="h2"><a href=""><b>Download the Books you Like</b></a></h2>
              <p class="description"></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="#"><i class="#"></i></div>
              <h2 class="h2"><a href=""><b>Upload The Books You Love</b></a></h2>
              <p class="description"></p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
<!-- End Facts Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <!-- End Call To Action Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Books</h3>
          <p class="section-description"></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Fiction</li>
              <li data-filter=".filter-card">Detective</li>
              <li data-filter=".filter-web">Education</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo base_url(); ?>Regna/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>China Rich Girlfriend</h4>
              <p>Fiction</p>
              <a href="Regna/assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="http://localhost/BookStack/index.php/Welcome/rich" class="details-link" title="Read"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?php echo base_url(); ?>Regna/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Android Recipes</h4>
              <p>Education</p>
              <a href="Regna/assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="http://localhost/BookStack/index.php/Welcome/android" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo base_url(); ?>Regna/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Rich People Problem</h4>
              <p>Fiction</p>
              <a href="Regna/assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="http://localhost/BookStack/index.php/Welcome/richpeople" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo base_url(); ?>Regna/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Feluda Samagra Vol.1</h4>
              <p>Detective</p>
              <a href="Regna/assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="http://localhost/BookStack/index.php/Welcome/feluda1" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?php echo base_url(); ?>Regna/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Head First Java</h4>
              <p>Education</p>
              <a href="Regna/assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="http://localhost/BookStack/index.php/Welcome/head" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo base_url(); ?>Regna/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Crazy Rich Asians</h4>
              <p>Fiction</p>
              <a href="Regna/assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="http://localhost/BookStack/index.php/Welcome/cra" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo base_url(); ?>Regna/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Feluda Samagra Volume.2</h4>
              <p>Detective</p>
              <a href="Regna/assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="http://localhost/BookStack/index.php/Welcome/feluda2" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo base_url(); ?>Regna/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>KakaBabu Samagra</h4>
              <p>Detective</p>
              <a href="Regna/assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="http://localhost/BookStack/index.php/Welcome/kakababu" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?php echo base_url(); ?>Regna/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Computer systems:A Programmer’s Perspective</h4>
              <p>Education</p>
              <a href="Regna/assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="http://localhost/BookStack/index.php/Welcome/computer" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
   <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->


      <!-- Uncomment below if you wan to use dynamic maps -->
     <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BookStack</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
        Designed by <a href="https://bootstrapmade.com/">BookStack</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>Regna/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>Regna/assets/js/main.js"></script>

</body>

</html>